
<section id="blog-details">
<div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Blog</span></li>
                <li class="item-link"><span>detail</span></li>
            </ul>
        </div>
        <h1><?php echo e($blog->name); ?></h1>
        <h5><?php echo e($blog->created_at); ?></h5>
        <h5>--by <?php echo e($blog->writer); ?></h5>
        <div class="blog-box">
        <div class="blog-img">
                <img src="<?php echo e(asset('asset/blog')); ?>/<?php echo e($blog->image); ?>.webp" style="height:600px;width:600px;"alt="">
            </div>   
            <div class="blog-details">
                <h3>
               Let's Start
                </h3>
                <p>
                <?php echo e($blog->description); ?>

                    </p>
            </div>
        </div>
        <div class="blog-box " style="padding-right:210px;">
                <p>
                <?php echo e($blog->description); ?>

                    </p>
                    
           
            
        </div>


        


    </section>
        



        



   <?php /**PATH C:\xampp\htdocs\OnlineFashionStore - Copy\resources\views/livewire/details-blog.blade.php ENDPATH**/ ?>