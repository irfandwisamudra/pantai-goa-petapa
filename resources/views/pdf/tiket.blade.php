<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="mx-auto">
        @foreach ($transaksi->tiket()->get() as $t)
            <div class="bg-white p-8 rounded-lg border-dotted border-8 w-full mt-12">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold mb-4">Tiket Masuk Destinasi Wisata Goa Petapa</h1>
                        <div class="mb-4">
                            <p><strong>No tiket:</strong> #{{ $t->pivot->no_tiket }}</p>
                            <p><strong>Jenis kendaraan:</strong> {{ $t->kendaraan->jenis_kendaraan }}</p>
                            <p><strong>Jumlah:</strong> {{ $t->pivot->jumlah }}</p>
                            <p><strong>Harga:</strong>
                                Rp. {{ number_format($transaksi->total_harga, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <img src="data:image/png;base64, {!! base64_encode(
                        QrCode::format('png')->size(256)->generate($t->pivot->no_tiket),
                    ) !!} " width="200">
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
