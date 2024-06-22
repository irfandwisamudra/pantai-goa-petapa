<?php

namespace App\Http\Controllers;

use App\Services\PengunjungService;
use App\Services\TiketService;
use App\Services\TransaksiService;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
  protected $transaksiService;
  protected $pengunjungService;
  protected $tiketService;

  public function __construct()
  {
    $this->transaksiService = new TransaksiService();
    $this->pengunjungService = new PengunjungService();
    $this->tiketService = new TiketService();
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    try {
      return view('admin.transaksi.index', [
        'title' => 'Transaksi - Admin Pantai Goa Petapa',
        'transaksi' => $this->transaksiService->getTransaksiAll(),
      ]);
    } catch (\Exception $e) {
      // abort(500);
      throw $e;
    }
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    try {
      return view('admin.transaksi.create', [
        'title' => 'Tambah Transaksi - Admin Pantai Goa Petapa',
        'pengunjung' => $this->pengunjungService->getPengunjungAll(),
        'tiket' => $this->tiketService->getTiketAll(),
      ]);
    } catch (\Exception $e) {
      abort(500);
    }
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    try {
      $this->transaksiService->createTransaksi($request->all());

      return redirect()->route('transaksi.index')->with('success', 'Berhasil menambahkan transaksi baru.');
    } catch (\Exception $e) {
      // return back()->with('error', 'Gagal menambahkan transaksi baru.');
      throw $e;
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    try {
      return view('admin.transaksi.show', [
        'title' => 'Detail Transaksi - Admin Pantai Goa Petapa',
        'transaksi' => $this->transaksiService->getTransaksiByUuid($id),
      ]);
    } catch (\Exception $e) {
      abort(500);
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    try {
      return view('admin.transaksi.edit', [
        'title' => 'Edit Transaksi - Admin Pantai Goa Petapa',
        'transaksi' => $this->transaksiService->getTransaksiByUuid($id),
        'pengunjung' => $this->pengunjungService->getPengunjungAll(),
        'tiket' => $this->tiketService->getTiketAll(),
      ]);
    } catch (\Exception $e) {
      abort(500);
    }
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    try {
    } catch (\Exception $e) {
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
