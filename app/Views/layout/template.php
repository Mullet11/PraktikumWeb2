<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Tugas CI4 M3' ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        m3: {
                            surface: '#F4F3F7',
                            onSurface: '#1C1B1F',
                            primaryContainer: '#EADDFF',
                            onPrimaryContainer: '#21005D',
                            secondaryContainer: '#F4EFF4',
                            onSecondaryContainer: '#49454F',
                            primary: '#6750A4',
                            activeNav: '#D0BCFF',
                            onActiveNav: '#381E72'
                        }
                    },
                    borderRadius: {
                        'm3-bar': '28px',
                        'm3-card': '24px',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-m3-surface text-m3-onSurface font-sans antialiased min-h-screen">

<nav class="bg-m3-primaryContainer text-m3-onPrimaryContainer mx-2 sm:mx-4 mt-3 mb-8 px-6 py-4 rounded-m3-bar shadow-sm flex flex-wrap items-center justify-between">

    <a href="/" class="text-2xl font-bold flex items-center gap-2">
        <span class="material-symbols-outlined text-3xl">code_blocks</span>
        Praktikum 6
    </a>

    <div class="flex gap-1 sm:gap-2 mt-3 sm:mt-0">
        <a href="/" class="flex items-center px-4 py-2 rounded-full font-medium transition-colors <?= current_url() == site_url('/') ? 'bg-m3-activeNav text-m3-onActiveNav font-bold' : 'text-m3-onSecondaryContainer hover:bg-black/5' ?>">
            <span class="material-symbols-outlined text-[20px] mr-1.5">home</span> Beranda
        </a>
        <a href="/profil" class="flex items-center px-4 py-2 rounded-full font-medium transition-colors <?= current_url() == site_url('profil') ? 'bg-m3-activeNav text-m3-onActiveNav font-bold' : 'text-m3-onSecondaryContainer hover:bg-black/5' ?>">
            <span class="material-symbols-outlined text-[20px] mr-1.5">person</span> Profil
        </a>
    </div>
</nav>

<main class="container mx-auto px-4">
    <?= $this->renderSection('content'); ?>
</main>

</body>
</html>