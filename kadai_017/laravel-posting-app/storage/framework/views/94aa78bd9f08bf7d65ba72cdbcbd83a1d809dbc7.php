<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿編集</title>   
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>

<body style="padding: 60px 0;">
    <header>
        <nav class="navbar navbar-light bg-light fixed-top" style="height: 60px;">            
            <div class="container">                               
                <a href="<?php echo e(route('posts.index')); ?>" class="navbar-brand">投稿アプリ</a>                     
            </div>
        </nav>
    </header>

    <main>
        <article>
            <div class="container">                   
                <h1 class="fs-2 my-3">投稿編集</h1>
                
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>                
                
                <div class="mb-2">    
                    <a href="<?php echo e(route('posts.index')); ?>" class="text-decoration-none">&lt; 戻る</a>                                
                </div>
                
                <form action="<?php echo e(route('posts.update', $post)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('patch'); ?>
                    <div class="form-group mb-3">
                        <label for="title">タイトル</label>                        
                        <input type="text" class="form-control" name="title" value="<?php echo e(old('title', $post->title)); ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="content">本文</label>                        
                        <textarea class="form-control" name="content"><?php echo e(old('content', $post->content)); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">更新</button>
                </form>
            </div>
        </article>
    </main>

    <footer class="d-flex justify-content-center align-items-center bg-light fixed-bottom" style="height: 60px;"> 
        <p class="text-muted small mb-0">&copy; 投稿アプリ All rights reserved.</span>
    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel-posting-app\resources\views/posts/edit.blade.php ENDPATH**/ ?>