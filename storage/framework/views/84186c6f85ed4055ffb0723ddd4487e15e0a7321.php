<?php $__env->startSection('content'); ?>

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
            style="background-image:url(front/assets/images/img_bg_2.jpg); height: 200px"
            data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
    </header>



    <?php if(isset( $posts )): ?>

    <div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Artigos Recentes</h2>
                    <p>Confira aqui nossos últimos artigos e video aulas!<br>Conteúdo exclusivo sobre o Laravel
                        FrameWork.</p>
                </div>
            </div>
            <div class="row">

                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-lg-4 col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="<?php echo e(route('article', $post->uri)); ?>">

                                <img class="img-responsive" src="<?php echo e(\Illuminate\Support\Facades\Storage::url(
                                        \App\Support\Cropper::thumb($post->cover, 800, 450)
                                    )); ?>">

                            </a>

                            <div class="blog-text">
                                <h3><a href="<?php echo e(route('article', $post->uri)); ?>"><?php echo e($post->title); ?></a></h3>
                                <span class="posted_on"><?php echo e(date('d/m/Y H:m', strtotime($post->created_at))); ?></span>
                                <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                                <p><?php echo e($post->subtitle); ?></p>
                                <a href="<?php echo e(route('article', $post->uri)); ?>" class="btn btn-primary">Leia mais</a>
                            </div>
                        </div>
                    </div>

                    <?php if(( $loop->index + 1 ) % 3 === 0): ?>
                        <div style="width: 100%; float: left; height: 1px;"></div>
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <?php endif; ?>

    <?php echo $__env->make('front.includes.optin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>