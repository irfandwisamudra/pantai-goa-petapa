<?php

namespace App\Http\Controllers;

use App\Services\PengunjungService;
use App\Services\TiketService;
use App\Services\TransaksiService;
use App\Services\UserService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $tiketService;
    protected $pengunjungService;
    protected $userService;
    protected $transaksiService;

    public function __construct()
    {
        $this->tiketService = new TiketService();
        $this->pengunjungService = new PengunjungService();
        $this->userService = new UserService();
        $this->transaksiService = new TransaksiService();
    }

    public function __invoke()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard - Admin Pantai Goa Petapa',
            'tiket' => $this->tiketService->getTiketAll(),
            'pengunjung' => $this->pengunjungService->getPengunjungAll(),
            'users' => $this->userService->getUserAll(),
            'transaksi' => $this->transaksiService->getTransaksiAll(),
        ]);
    }
}
