<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="flex justify-center mt-6 mb-12">
        <div class="bg-white w-full max-w-3xl rounded-m3-card shadow-md p-6 md:p-10">

            <h2 class="text-2xl md:text-3xl font-bold text-m3-onPrimaryContainer mb-6 flex items-center gap-3">
                <span class="material-symbols-outlined text-4xl">account_circle</span>
                Profil Praktikan
            </h2>

            <div class="rounded-2xl overflow-hidden border border-gray-100">

                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center p-4 md:px-6 md:py-5 bg-m3-secondaryContainer/50">
                    <span class="font-medium text-m3-onSecondaryContainer mb-1 sm:mb-0">Nama Lengkap</span>
                    <strong class="text-m3-onSurface text-lg">Muhammad Rakha' Athallah</strong>
                </div>

                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center p-4 md:px-6 md:py-5 bg-white">
                    <span class="font-medium text-m3-onSecondaryContainer mb-1 sm:mb-0">NIM</span>
                    <strong class="text-m3-onSurface text-lg">2410817310002</strong>
                </div>

                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center p-4 md:px-6 md:py-5 bg-m3-secondaryContainer/50">
                    <span class="font-medium text-m3-onSecondaryContainer mb-1 sm:mb-0">Asal Program Studi</span>
                    <strong class="text-m3-onSurface text-lg">Teknologi Informasi</strong>
                </div>

                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center p-4 md:px-6 md:py-5 bg-white">
                    <span class="font-medium text-m3-onSecondaryContainer mb-2 sm:mb-0">Keahlian Utama</span>
                    <div>
                    <span class="bg-m3-primary text-white px-4 py-1.5 rounded-full text-sm font-medium shadow-sm">
                        Software Engineer
                    </span>
                        <span class="bg-[#38bdf8] text-white px-4 py-1.5 rounded-full text-sm font-medium shadow-sm ml-2">
                        Java Developer
                    </span>
                    </div>
                </div>

            </div>

        </div>
    </div>

<?= $this->endSection(); ?>