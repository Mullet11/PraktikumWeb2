<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="flex flex-col lg:flex-row gap-8 items-start mb-24">
    
    <!-- Sidebar: Profile Card -->
    <div class="w-full lg:w-1/3 bg-white border border-brand-200 rounded-sm p-6 shadow-sm sticky top-8">
        
        <!-- Profile Image -->
        <div class="aspect-square bg-brand-100 rounded-sm overflow-hidden mb-6">
            <img src="/images/profile.jpeg" alt="Profile Photo" class="w-full h-full object-cover object-center" />
        </div>

        <h1 class="text-3xl font-bold text-brand-900 mb-2">Muhammad Rakha' Athallah</h1>
        <h2 class="text-lg font-medium text-brand-600 mb-6">Teknologi Informasi</h2>

        <div class="space-y-4 text-sm text-brand-700">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-brand-500">badge</span>
                <span>NIM: 2410817310002</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-brand-500">school</span>
                <span>Class of 2024</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-brand-500">location_on</span>
                <span>Universitas Lambung Mangkurat</span>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="w-full lg:w-2/3 space-y-8">
        
        <!-- Biography Box -->
        <div class="bg-white border border-brand-200 rounded-sm p-8 shadow-sm">
            <h3 class="text-xl font-bold text-brand-900 mb-4">Biography</h3>
            <p class="text-brand-600 leading-relaxed">
                I am a passionate undergraduate student focusing on the intersection of modern web development and software engineering. My academic journey is driven by a desire to build intuitive applications that solve real-world problems efficiently. Currently balancing comprehensive coursework while actively developing independent projects to sharpen my technical capabilities.
            </p>
        </div>

        <!-- Interests and Skills Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Academic Interests -->
            <div class="bg-brand-50 border border-brand-200 rounded-sm p-6 shadow-sm">
                <h4 class="text-lg font-bold text-brand-900 mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">psychology</span>
                    Academic Interests
                </h4>
                <ul class="space-y-3 text-brand-600 text-sm">
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px]">arrow_right</span> Web Technologies</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px]">arrow_right</span> Software Architecture</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px]">arrow_right</span> Database Management</li>
                </ul>
            </div>

            <!-- Core Skills -->
            <div class="bg-brand-50 border border-brand-200 rounded-sm p-6 shadow-sm">
                <h4 class="text-lg font-bold text-brand-900 mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">code</span>
                    Core Skills
                </h4>
                <div class="flex flex-wrap gap-2">
                    <span class="px-2.5 py-1 bg-white text-brand-800 text-xs font-medium rounded-sm border border-brand-200 shadow-sm">Software Engineer</span>
                    <span class="px-2.5 py-1 bg-white text-brand-800 text-xs font-medium rounded-sm border border-brand-200 shadow-sm">Java Developer</span>
                    <span class="px-2.5 py-1 bg-white text-brand-800 text-xs font-medium rounded-sm border border-brand-200 shadow-sm">PHP & CI4</span>
                    <span class="px-2.5 py-1 bg-white text-brand-800 text-xs font-medium rounded-sm border border-brand-200 shadow-sm">Tailwind CSS</span>
                </div>
            </div>

        </div>

        <!-- Academic Timeline -->
        <div class="border-t border-brand-200 pt-8 mt-8">
            <h3 class="text-xl font-bold text-brand-900 mb-6">Academic Timeline</h3>
            
            <div class="relative border-l-2 border-brand-200 ml-3 space-y-8">
                
                <div class="relative pl-6">
                    <div class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-brand-900 border-4 border-brand-50"></div>
                    <h4 class="text-lg font-bold text-brand-900">Undergraduate Student</h4>
                    <p class="text-xs font-bold text-brand-500 mb-2 uppercase tracking-wider">TEKNOLOGI INFORMASI • SEP 2024 - PRESENT</p>
                    <p class="text-brand-600 text-sm leading-relaxed">
                        Actively participating in rigorous academic coursework focused on algorithms, data structures, and software engineering principles. Developing hands-on experience through laboratory practicums.
                    </p>
                </div>

            </div>
        </div>

        <!-- Extracurriculars & Hobbies -->
        <div class="border-t border-brand-200 pt-8 mt-8">
            <h3 class="text-xl font-bold text-brand-900 mb-6">Extracurriculars & Hobbies</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Hobby 1 -->
                <div class="bg-white border border-brand-200 rounded-sm p-6 shadow-sm">
                    <div class="mb-4 text-brand-900"><span class="material-symbols-outlined text-2xl">computer</span></div>
                    <h4 class="text-lg font-bold text-brand-900 mb-2">Coding</h4>
                    <p class="text-sm text-brand-600">
                        Passionate about writing clean code and learning new programming languages in my free time.
                    </p>
                </div>

                <!-- Hobby 2 -->
                <div class="bg-white border border-brand-200 rounded-sm p-6 shadow-sm">
                    <div class="mb-4 text-brand-900"><span class="material-symbols-outlined text-2xl">sports_esports</span></div>
                    <h4 class="text-lg font-bold text-brand-900 mb-2">Gaming</h4>
                    <p class="text-sm text-brand-600">
                        Enjoying strategic and competitive gaming, which helps in developing critical thinking and problem-solving skills.
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection(); ?>