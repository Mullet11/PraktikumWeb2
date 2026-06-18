<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Hero Section -->
<div class="flex flex-col lg:flex-row gap-12 lg:gap-24 items-center mt-8 mb-24">
    
    <!-- Left Column: Text Content -->
    <div class="flex-1 max-w-2xl">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-brand-200 text-brand-600 text-sm font-medium mb-6 bg-white shadow-sm">
            <span class="material-symbols-outlined text-[18px]">badge</span>
            <?= $nim; ?>
        </div>
        
        <h1 class="text-5xl sm:text-6xl font-bold text-brand-900 mb-4 tracking-tight leading-tight">
            <?= $nama; ?>
        </h1>
        
        <h2 class="text-2xl font-medium text-brand-600 mb-6">
            Computer Science & Cognitive Psychology
        </h2>
        
        <p class="text-brand-600 text-lg leading-relaxed mb-8">
            An undergraduate researcher exploring the intersection of artificial intelligence and human cognition. My academic journey is driven by a commitment to understanding how computational models can illuminate the mechanisms of human thought, aiming to design more intuitive and ethical AI systems.
        </p>
    </div>

    <!-- Right Column: Image -->
    <div class="flex-1 w-full flex justify-center lg:justify-end relative">
        <!-- Subtle decorative lines behind image like the design -->
        <div class="absolute -top-6 -right-6 w-32 h-32 border-t-2 border-r-2 border-brand-800 hidden lg:block"></div>
        <div class="absolute -bottom-6 -left-6 w-32 h-32 border-b-2 border-l-2 border-brand-800 hidden lg:block"></div>
        
        <div class="relative z-10 w-full max-w-md bg-brand-100 rounded-sm overflow-hidden shadow-2xl">
            <img src="/images/profile.jpeg" alt="Profile Hero Image" class="w-full h-[500px] object-cover object-center" />
        </div>
    </div>
</div>

<!-- Academic Focus Section -->
<div class="mb-16">
    <h3 class="text-2xl font-bold text-brand-900 mb-8 border-b border-brand-200 pb-4">Academic Focus</h3>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <!-- Lab Card -->
        <div class="bg-white border border-brand-200 rounded-sm p-8 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start mb-6">
                <div class="w-10 h-10 rounded-full bg-brand-100 flex items-center justify-center text-brand-900">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-1 rounded">Current</span>
            </div>
            <h4 class="text-xl font-bold text-brand-900 mb-3">Cognitive Modeling Lab</h4>
            <p class="text-brand-600 leading-relaxed">
                Assisting in the development of computational models that simulate human decision-making processes under uncertainty. Utilizing Python and PyTorch to analyze large datasets of behavioral experiments.
            </p>
        </div>

        <!-- Coursework Card -->
        <div class="bg-white border border-brand-200 rounded-sm p-8 shadow-sm hover:shadow-md transition-shadow">
            <div class="w-10 h-10 rounded-full bg-brand-100 flex items-center justify-center text-brand-900 mb-6">
                <span class="material-symbols-outlined">menu_book</span>
            </div>
            <h4 class="text-xl font-bold text-brand-900 mb-4">Key Coursework</h4>
            <ul class="space-y-3 text-brand-600">
                <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-brand-400"></div> Advanced Machine Learning</li>
                <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-brand-400"></div> Cognitive Neuroscience</li>
                <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-brand-400"></div> Data Structures & Algorithms</li>
                <li class="flex items-center gap-2"><div class="w-1.5 h-1.5 rounded-full bg-brand-400"></div> Philosophy of Mind</li>
            </ul>
        </div>
    </div>

    <!-- Technical Proficiency Card -->
    <div class="bg-white border border-brand-200 rounded-sm p-6 sm:p-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 shadow-sm">
        <div class="max-w-xs">
            <h4 class="text-xl font-bold text-brand-900 mb-2">Technical Proficiency</h4>
            <p class="text-sm text-brand-500">Tools and languages utilized in coursework and research projects.</p>
        </div>
        
        <div class="flex flex-wrap gap-2 justify-start sm:justify-end">
            <span class="px-3 py-1.5 bg-brand-100 text-brand-800 text-sm font-medium rounded-sm border border-brand-200">Python</span>
            <span class="px-3 py-1.5 bg-brand-100 text-brand-800 text-sm font-medium rounded-sm border border-brand-200">Java</span>
            <span class="px-3 py-1.5 bg-brand-100 text-brand-800 text-sm font-medium rounded-sm border border-brand-200">C++</span>
            <span class="px-3 py-1.5 bg-brand-100 text-brand-800 text-sm font-medium rounded-sm border border-brand-200">C</span>
            <span class="px-3 py-1.5 bg-brand-100 text-brand-800 text-sm font-medium rounded-sm border border-brand-200">Git</span>
            <span class="px-3 py-1.5 bg-brand-100 text-brand-800 text-sm font-medium rounded-sm border border-brand-200">Kotlin</span>
            <span class="px-3 py-1.5 bg-brand-100 text-brand-800 text-sm font-medium rounded-sm border border-brand-200">Rust</span>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>