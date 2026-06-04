<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="flex flex-col items-center justify-center mt-10 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-m3-onPrimaryContainer mb-4">Selamat Datang!</h1>
        <p class="text-m3-onSecondaryContainer text-lg mb-8 max-w-lg">
            Berikut adalah data yang dipanggil menggunakan pola arsitektur MVC dari BiodataModel.
        </p>

        <div class="bg-white rounded-m3-card shadow-md hover:shadow-xl transition-shadow duration-300 p-6 md:p-8 w-full max-w-sm text-left">
            <div class="flex items-center gap-4 md:gap-5">
                <div class="bg-m3-primaryContainer rounded-full p-4 flex shrink-0">
                    <span class="material-symbols-outlined text-m3-onPrimaryContainer text-3xl md:text-4xl">badge</span>
                </div>
                <div>
                    <h4 class="text-xl md:text-2xl font-bold text-m3-onSurface mb-1"><?= $nama; ?></h4>
                    <span class="bg-m3-secondaryContainer text-m3-onSecondaryContainer px-3 py-1 rounded-lg font-medium text-sm inline-block">
                    NIM: <?= $nim; ?>
                </span>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>