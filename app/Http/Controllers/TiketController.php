<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTiketRequest;
use App\Http\Requests\UpdateTiketRequest;
use App\Services\KendaraanService;
use App\Services\TiketService;

class TiketController extends Controller
{
    protected $tiketService;
    protected $kendaraanService;

    public function __construct()
    {
        $this->tiketService = new TiketService();
        $this->kendaraanService = new KendaraanService();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.tiket.index', [
                'title' => 'Tiket - Admin Pantai Goa Petapa',
                'tiket' => $this->tiketService->getTiketAll(),
            ]);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function displayTiket()
    {
        try {
            return view('tiket', [
                'title' => 'Tiket - Pantai Goa Petapa',
                'tiket' => $this->tiketService->getTiketAll(),
            ]);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('admin.tiket.create', [
                'title' => 'Tambah Tiket - Admin Pantai Goa Petapa',
            ]);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTiketRequest $request)
    {
        try {
            $data = $request->all();
            $kendaraan = $this->kendaraanService->createKendaraan($data);
            $data['kendaraan_uuid'] = $kendaraan->uuid;
            $this->tiketService->createTiket($data);

            return redirect()->route('tiket.index')->with('success', 'Data Tiket berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->route('tiket.index')->with('error', 'Data Tiket gagal ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            return view('admin.tiket.edit', [
                'title' => 'Edit Tiket - Admin Pantai Goa Petapa',
                'tiket' => $this->tiketService->getTiketByUuid($id),
            ]);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTiketRequest $request, string $id)
    {
        try {
            $kendaraan_uuid = $this->tiketService->getTiketByUuid($id)->kendaraan_uuid;
            $this->kendaraanService->updateKendaraan($request->all(), $kendaraan_uuid);
            $this->tiketService->updateTiket($request->all(), $id);

            return redirect()->route('tiket.index')->with('success', 'Data Tiket berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('tiket.index')->with('error', 'Data Tiket gagal diperbarui!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->tiketService->deleteTiket($id);
            $kendaraan_uuid = $this->tiketService->getTiketByUuid($id)->kendaraan_uuid;
            $this->kendaraanService->deleteKendaraan($kendaraan_uuid);

            return redirect()->route('tiket.index')->with('success', 'Data Tiket berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('tiket.index')->with('error', 'Data Tiket gagal dihapus!');
        }
    }
}
