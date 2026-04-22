<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section id="about" class="pt-32 pb-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="flex-1 space-y-6">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-indigo-50 border border-indigo-100 text-indigo-600 text-xs font-bold uppercase tracking-wider">
                    <span>Available for Projects</span>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                    Hi, I'm <span class="gradient-text"><?php echo e($profile->name ?? 'Willyan'); ?></span>
                </h1>
                <p class="text-lg text-slate-600 leading-relaxed max-w-2xl">
                    <?php echo e($profile->bio ?? 'Mahasiswa Teknik Informatika yang berfokus pada Desain, Machine Learning dan Solusi Teknologi Digital.'); ?>

                </p>
                <div class="flex space-x-4 pt-4">
                    <a href="#projects" class="bg-indigo-600 text-white px-8 py-3 rounded-xl font-semibold hover:bg-indigo-700 transition-all soft-shadow">View My Work</a>
                    <a href="#skills" class="bg-white border border-slate-200 text-slate-700 px-8 py-3 rounded-xl font-semibold hover:bg-slate-50 transition-all">My Skills</a>
                </div>
            </div>
            <div class="flex-1 relative">
                <div class="w-full h-80 md:h-[500px] bg-gradient-saas rounded-3xl soft-shadow transform rotate-3 hover:rotate-0 transition-transform duration-500 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=1000" alt="Profile" class="w-full h-full object-cover opacity-90 mix-blend-overlay">
                </div>
                <!-- Isometric elements -->
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl soft-shadow hidden md:block">
                    <div class="text-sm font-bold text-slate-400 uppercase">Focus Area</div>
                    <div class="text-xl font-bold text-indigo-600">Machine Learning</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Technical <span class="gradient-text">Expertise</span></h2>
            <div class="w-20 h-1.5 bg-gradient-saas mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="p-8 rounded-3xl border border-slate-100 hover:border-indigo-100 hover:bg-indigo-50/30 transition-all group">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-lg text-slate-800"><?php echo e($skill->name); ?></h3>
                    <span class="text-indigo-600 font-bold text-sm"><?php echo e($skill->level); ?>%</span>
                </div>
                <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-saas transition-all duration-1000" style="width: <?php echo e($skill->level); ?>%"></div>
                </div>
                <p class="mt-4 text-sm text-slate-500"><?php echo e($skill->category); ?> level expertise</p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-end mb-16">
            <div>
                <h2 class="text-3xl font-bold mb-4">Featured <span class="gradient-text">Projects</span></h2>
                <p class="text-slate-500">A collection of systems and applications I've built.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="group bg-white rounded-[2.5rem] p-8 soft-shadow border border-white hover:border-indigo-100 transition-all">
                <div class="flex justify-between items-start mb-6">
                    <div class="space-y-1">
                        <span class="text-xs font-bold uppercase tracking-widest text-indigo-500"><?php echo e($project->role); ?></span>
                        <h3 class="text-2xl font-bold text-slate-800"><?php echo e($project->title); ?></h3>
                    </div>
                    <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-bold"><?php echo e($project->year); ?></span>
                </div>
                <p class="text-slate-600 leading-relaxed mb-8">
                    <?php echo e($project->description); ?>

                </p>
                <div class="flex items-center space-x-2 text-indigo-600 font-bold group-hover:translate-x-2 transition-transform">
                    <span>View Case Study</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Achievements Section -->
<section id="achievements" class="py-20 bg-indigo-900 text-white overflow-hidden relative">
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500/20 rounded-full blur-[100px] -mr-48 -mt-48"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Key <span class="text-indigo-400">Achievements</span></h2>
            <div class="w-20 h-1.5 bg-indigo-400 mx-auto rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl p-10 hover:bg-white/20 transition-all">
                <div class="flex gap-6">
                    <div class="flex-shrink-0 w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-indigo-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 text-indigo-100"><?php echo e($achievement->title); ?></h3>
                        <p class="text-indigo-200/80 leading-relaxed mb-4"><?php echo e($achievement->description); ?></p>
                        <div class="flex items-center space-x-4 text-xs font-bold uppercase tracking-widest text-indigo-300">
                            <span><?php echo e($achievement->role); ?></span>
                            <span class="w-1 h-1 bg-indigo-500 rounded-full"></span>
                            <span><?php echo e($achievement->year); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Master\Telkom University Purwokerto\Semester 6\Aplikasi Berbasis Platform\Praktikum\ModulDUL\Willy\2211102129_WillyanHyugaPratama\resources\views/portfolio/index.blade.php ENDPATH**/ ?>