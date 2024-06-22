<ul class="flex flex-col gap-2">
    <x-user.sidebar-link href="{{ route('user.profil', auth()->user()->uuid) }}"
        :active="request()->is('profil')">Profil</x-user.sidebar-link>
    <x-user.sidebar-link href="{{ route('user.history-order', auth()->user()->uuid) }}" :active="request()->is('riwayat-pemesanan')">Riwayat
        Pemesanan</x-user.sidebar-link>
    <x-user.sidebar-link href="{{ route('user.logout') }}" :active="request()->is('user/logout')">Logout</x-user.sidebar-link>
</ul>
