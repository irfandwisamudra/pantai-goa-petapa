<?php

namespace App\Http\Controllers;

use App\Services\TransaksiService;
use Illuminate\Http\Request;

class HistoryOrderController extends Controller
{
    protected $transaksiService;

    public function __construct()
    {
        $this->transaksiService = new TransaksiService();
    }

    public function index($id)
    {
        try {
            return view('user.riwayat-pemesanan', [
                'title' => 'Riwayat Pemesanan - Pantai Goa Petapa',
                'transaksi' => $this->transaksiService->getTransaksiWhere('pengunjung_uuid', auth()->user()->pengunjung->uuid)
            ]);
        } catch (\Exception $e) {
            // throw $e;
            abort(500);
        }
    }

    public function show($id, $transaksiId)
    {
        try {
            $transaksi = $this->transaksiService->getTransaksiByUuid($transaksiId);

            return view('user.detail-riwayat-pemesanan', [
                'title' => 'Detail Riwayat Pemesanan - Pantai Goa Petapa',
                'transaksi' => $transaksi,
            ]);
        } catch (\Exception $e) {
            // throw $e;
            abort(500);
        }
    }
}
