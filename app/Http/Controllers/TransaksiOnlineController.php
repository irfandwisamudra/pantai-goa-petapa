<?php

namespace App\Http\Controllers;

use App\Services\TransaksiService;
use function Spatie\LaravelPdf\Support\pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Resend\Laravel\Facades\Resend;

class TransaksiOnlineController extends Controller
{
    protected $transaksiService;

    public function __construct()
    {
        $this->transaksiService = new TransaksiService();
    }

    public function showTransaksi()
    {
        return view('order', ['title' => 'Transaksi - Pantai Goa Petapa']);
    }

    public function addItem(Request $request)
    {
        try {
            $cart = [];
            $canAdd = true;

            if (!auth()->check()) {
                return back()->with('error', 'Anda harus login terlebih dahulu');
            }

            if ($request->jumlah == 0) {
                return back()->with('error', 'Minimal jumlah item adalah satu');
            }

            if (session()->has('cart')) {
                $cart = session()->get('cart');
            }

            foreach ($cart as $index => $c) {
                if ($c['uuid'] == $request->uuid) {
                    $cart[$index]['jumlah'] = $request->jumlah;
                    $canAdd = false;
                }
            }

            if ($canAdd) {
                $cart[] = [
                    'uuid' => $request->uuid,
                    'jumlah' => $request->jumlah,
                    'keterangan' => $request->keterangan,
                    'harga' => $request->harga,
                ];
            }

            session(['cart' => $cart]);

            return back()->with('success', 'Item berhasil ditambahkan ke keranjang');
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function showPembayaran($id, $transaksiUuid)
    {
        $transaksi = $this->transaksiService->getTransaksiByUuid($transaksiUuid);

        return view('payment', ['title' => 'Pembayaran - Pantai Goa Petapa', 'transaksi' => $transaksi]);
    }

    public function prosesPembayaran(Request $request)
    {
        $data = $request->all();

        $transaksi = $this->transaksiService->createTransaksi($data);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $transaksi->uuid,
                'gross_amount' => $transaksi->total_harga,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->pengunjung->nama,
                'email' => auth()->user()->email,
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $transaksi->snap_token = $snapToken;
        $transaksi->save();

        return redirect()->to(route('user.payment', ['id' => auth()->user()->uuid, 'transaksiUuid' => $transaksi->uuid]))->with('success', 'Transaksi berhasil dibuat, silahkan lanjutkan pembayaran');
    }

    public function transaksiSukses($id, $transaksiUuid)
    {
        if (session()->has('cart')) {
            session()->forget('cart');
        }

        $transaksi = $this->transaksiService->getTransaksiByUuid($transaksiUuid);

        pdf('pdf.tiket', ['transaksi' => $transaksi])->save(storage_path('app/public/tiket/' . $transaksi->uuid . '.pdf'));

        Resend::emails()->send([
            'from' => 'onboarding@resend.dev',
            'to' => 'wchynto.dev@gmail.com',
            'subject' => 'Tiket Pantai Goa Petapa Anda Telah Tersedia!',
            'text' => 'Rasakan sensasi petualangan di Pantai Goa Petapa, pantai bersejarah dengan pesona alam yang memukau! Tiket Anda untuk menjelajahi keindahan pantai ini sudah tersedia dan siap untuk diunduh.',
            'attachments' => [
                [
                    'filename' => $transaksi->uuid . '.pdf',
                    'content' => chunk_split(base64_encode(file_get_contents(storage_path('app/public/tiket/' . $transaksi->uuid . '.pdf')))),
                ],
            ],
        ]);

        Storage::delete('public/tiket/' . $transaksi->uuid . '.pdf');


        $transaksi = $this->transaksiService->getTransaksiByUuid($transaksiUuid);

        $transaksi = $this->transaksiService->getTransaksiByUuid($transaksiUuid);
        $transaksi->status = 'success';
        $transaksi->save();

        return view('order-success', ['title' => 'Transaksi Berhasil - Pantai Goa Petapa', 'transaksi' => $transaksi]);
    }

    public function transaksiGagal($id, $transaksiUuid)
    {
        $transaksi = $this->transaksiService->getTransaksiByUuid($transaksiUuid);
        $transaksi->status = 'failed';
        $transaksi->save();

        return view('order-failed', ['title' => 'Transaksi Gagal - Pantai Goa Petapa', 'transaksi' => $transaksi]);
    }

    public function printTiket($id, $transaksiUuid)
    {
        $transaksi = $this->transaksiService->getTransaksiByUuid($transaksiUuid);

        return pdf('pdf.tiket', ['transaksi' => $transaksi]);
    }
}
