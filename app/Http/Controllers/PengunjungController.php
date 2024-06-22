<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Services\GuestService;
use App\Services\PengunjungService;
use App\Http\Requests\StorePengunjungRequest;
use App\Http\Requests\UpdatePengunjungRequest;
use App\Http\Requests\StorePengunjungGuestRequest;

class PengunjungController extends Controller
{
    protected $pengunjungService;
    protected $userService;
    protected $guestService;

    public function __construct()
    {
        $this->pengunjungService = new PengunjungService();
        $this->userService = new UserService();
        $this->guestService = new GuestService();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('admin.pengunjung.index', [
                'pengunjung' => $this->pengunjungService->getPengunjungAll(),
                'title' => 'Pengunjung - Admin Pantai Goa Petapa'
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            abort(500);
        }
    }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    try {
      return view('admin.pengunjung.create', [
        'title' => 'Tambah Pengunjung - Admin Pantai Goa Petapa'
      ]);
    } catch (\Exception $e) {
      abort(500);
    }
  }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengunjungRequest $request)
    {
        try {
            $data = $request->all();
            $pengunjung = $this->pengunjungService->createPengunjung($data);
            $data['pengunjung_uuid'] = $pengunjung->uuid;

            if ($request->tipe == 'user') {
                $this->userService->createUser($data);
            } else {
                $this->guestService->createGuest($data);
            }

            return redirect()->route('pengunjung.index')->with('success', 'Data pengunjung berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->route('pengunjung.index')->with('error', 'Data pengunjung gagal ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return view('admin.pengunjung.show', [
                'title' => 'Detail Pengunjung - Admin Pantai Goa Petapa',
                'pengunjung' => $this->pengunjungService->getPengunjungByUuid($id),
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
            $pengunjung = $this->pengunjungService->getPengunjungByUuid($id);

            return view('admin.pengunjung.edit', [
                'pengunjung' => $pengunjung,
                'title' => 'Edit Pengunjung - Admin Pantai Goa Petapa'
            ]);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengunjungRequest $request, string $id)
    {
        try {
            if ($this->pengunjungService->isUser($id)) {
                $user_id = $this->userService->getUserWhere('pengunjung_uuid', $id)->first()->uuid;
                $this->userService->updateUser($request->all(), $user_id);
            } else {
                $guest_id = $this->guestService->getGuestWhere('pengunjung_uuid', $id)->first()->uuid;
                $this->guestService->updateGuest($request->all(), $guest_id);
            }

            $this->pengunjungService->updatePengunjung($request->all(), $id);

            return redirect()->route('pengunjung.index')->with('success', 'Data pengunjung berhasil diperbarui!');
        } catch (\Exception $e) {
            redirect()->route('pengunjung.index')->with('error', 'Data pengunjung gagal diperbarui!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            if ($this->pengunjungService->isUser($id)) {
                $this->userService->deleteUserWhere('pengunjung_uuid', $id);
            } else {
                $this->guestService->deleteGuestWhere('pengunjung_uuid', $id);
            }

            $this->pengunjungService->deletePengunjung($id);

            return redirect()->route('pengunjung.index')->with('success', 'Data pengunjung berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('pengunjung.index')->with('error', 'Data pengunjung gagal dihapus!');
        }
    }

    /**
     * Store a newly created resource only guest in storage.
     */
    public function storeGuest(StorePengunjungGuestRequest $request)
    {
        try {
            $data = $request->all();
            $pengunjung = $this->pengunjungService->createPengunjung($data);
            $data['pengunjung_uuid'] = $pengunjung->uuid;
            $this->guestService->createGuest($data);

            return redirect()->route('transaksi.create')->with('success', 'Data pengunjung berhasil ditambahkan!');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->route('transaksi.create')->with('error', 'Data pengunjung gagal ditambahkan!');
        }
    }
}
