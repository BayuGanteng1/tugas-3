<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-red-300">
    <div class="w-[1000px] mx-auto ">
        <h1 class="font-bold text-4xl my-4">Daftar Makanan</h1>

        <section class="flex gap-8">
            @foreach ($makanans as $makanan)
                <div class="">
                    <img src={{ $makanan->gambar }} class="w-[200px] h-[200px] object-cover rounded-md" />
                    <p class="mt-2">{{ $makanan->nama }}</p>
                    <p>Rp. {{ number_format($makanan->harga) }}</p>
                </div>
            @endforeach
        </section>
    </div>

</body>

</html>
