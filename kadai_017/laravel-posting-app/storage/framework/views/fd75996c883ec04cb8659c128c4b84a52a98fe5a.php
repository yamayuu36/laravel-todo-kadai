<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo $__env->yieldContent('title'); ?></title>
 
     <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
 </head>
 
 <body style="padding: 60px 0;">
  <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <main>
         <article>
             <div class="container">  
                 <h1 class="fs-2 my-3"><?php echo $__env->yieldContent('title'); ?></h1>
                 <?php echo $__env->yieldContent('content'); ?>
             </div>
         </article>
     </main>
  <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </body>
 
</html><?php /**PATH C:\xampp\htdocs\laravel-posting-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>