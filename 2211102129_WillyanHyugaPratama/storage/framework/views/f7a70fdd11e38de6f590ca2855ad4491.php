<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($profile->name ?? 'Portfolio'); ?> | Digital Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .gradient-text {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bg-gradient-saas {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
        }
        .soft-shadow {
            box-shadow: 0 10px 30px -5px rgba(99, 102, 241, 0.2);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 selection:bg-indigo-100 selection:text-indigo-600">
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="text-2xl font-bold gradient-text">W.HP</div>
                <div class="hidden md:flex space-x-8 text-sm font-medium text-slate-600">
                    <a href="#about" class="hover:text-indigo-600 transition-colors">About</a>
                    <a href="#skills" class="hover:text-indigo-600 transition-colors">Skills</a>
                    <a href="#projects" class="hover:text-indigo-600 transition-colors">Projects</a>
                    <a href="#achievements" class="hover:text-indigo-600 transition-colors">Achievements</a>
                </div>
                <div>
                    <a href="<?php echo e(route('login')); ?>" class="bg-indigo-600 text-white px-5 py-2 rounded-full text-sm font-semibold hover:bg-indigo-700 transition-all soft-shadow">Admin Access</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="bg-white border-t border-slate-100 py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-slate-400 text-sm">© <?php echo e(date('Y')); ?> <?php echo e($profile->name ?? 'Willyan'); ?>. Built with ❤️ for Digital Excellence.</p>
        </div>
    </footer>
</body>
</html>
<?php /**PATH D:\Master\Telkom University Purwokerto\Semester 6\Aplikasi Berbasis Platform\Praktikum\ModulDUL\Willy\2211102129_WillyanHyugaPratama\resources\views/layouts/app.blade.php ENDPATH**/ ?>