<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'ScholarPortfolio' ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-brand-50 text-brand-800 font-sans antialiased min-h-screen flex flex-col">

    <header class="bg-white border-b border-brand-200">
        <nav class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            
            <a href="/" class="text-2xl font-bold text-brand-900 tracking-tight">
                ScholarPortfolio
            </a>

            <div class="flex gap-8">
                <a href="/" class="text-sm font-medium transition-colors border-b-2 py-1 <?= current_url() == site_url('/') ? 'border-brand-900 text-brand-900' : 'border-transparent text-brand-500 hover:text-brand-900' ?>">
                    Home
                </a>
                <a href="/profil" class="text-sm font-medium transition-colors border-b-2 py-1 <?= current_url() == site_url('profil') ? 'border-brand-900 text-brand-900' : 'border-transparent text-brand-500 hover:text-brand-900' ?>">
                    Profile
                </a>
            </div>
            
            <!-- Spacing placeholder since Contact button is removed, keeping layout balanced if needed -->
            <div class="w-32"></div>

        </nav>
    </header>

    <main class="flex-grow w-full max-w-6xl mx-auto px-6 py-12">
        <?= $this->renderSection('content'); ?>
    </main>

    <footer class="bg-brand-50 border-t border-brand-200 mt-auto">
        <div class="max-w-6xl mx-auto px-6 py-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <span class="text-brand-500 text-sm">
                ScholarPortfolio
            </span>
            
            <div class="flex gap-6 text-sm font-medium text-brand-600">
                <a href="#" class="hover:text-brand-900 transition-colors">Email</a>
                <a href="#" class="hover:text-brand-900 transition-colors">LinkedIn</a>
                <a href="#" class="hover:text-brand-900 transition-colors">GitHub</a>
            </div>

            <span class="text-brand-500 text-sm">
                &copy; 2024 Academic Portfolio. All rights reserved.
            </span>
        </div>
    </footer>

</body>
</html>