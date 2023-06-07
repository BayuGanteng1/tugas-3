<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-red-300">
    <div class="w-[1000px] mx-auto ">
        <h1 class="font-bold text-4xl my-4">Daftar Makanan</h1>

        <section class="flex gap-8">
            <?php $__currentLoopData = $makanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $makanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="">
                    <img src=<?php echo e($makanan->gambar); ?> class="w-[200px] h-[200px] object-cover rounded-md" />
                    <p class="mt-2"><?php echo e($makanan->nama); ?></p>
                    <p>Rp. <?php echo e(number_format($makanan->harga)); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    </div>

</body>

</html>
<?php /**PATH C:\Users\D2.05\Downloads\example-app\resources\views/welcome.blade.php ENDPATH**/ ?>