<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <div class="item-slide">
                <a href="/shop">
                    <img src="<?php echo e(asset('asset/banner/banner1.webp')); ?>" alt="" class="img-slide"></a>
                    <div class="slide-info slide-1">
	
							<p class="sale-info" style="color:black;padding-top:160px;">get up to <span class="price"style="font-weight: 1000;font-size: 40px;">40%</span> OFF on</p>
							
						</div>
                </div>
                <div class="item-slide">
                <a href="/shop">
                    <img src="<?php echo e(asset('asset/banner/banner2.webp')); ?>" alt="" class="img-slide"></a>
                    <div class="slide-info slide-1">
	
							<p class="sale-info" style="color:black;padding-top:160px;">get up to <span class="price"style="font-weight: 1000;font-size: 40px;">40%</span> OFF</p>
							
						</div>
                </div>
                <div class="item-slide">
                <a href="/shop">
                    <img src="<?php echo e(asset('asset/banner/banner3.webp')); ?>" alt="" class="img-slide"></a>
                    <div class="slide-info slide-1">
	
							<p class="sale-info" style="color:black;padding-top:160px;">get up to <span class="price"style="font-weight: 1000;font-size: 40px;">40%</span> OFF</p>
							
						</div>
                </div>
                <div class="item-slide">
                <a href="/shop">
                    <img src="<?php echo e(asset('asset/banner/banner4.webp')); ?>" alt="" class="img-slide"></a>
                        <div class="slide-info slide-1">
	
							<p class="sale-info" style="color:white;padding-top:160px;">get up to <span class="price"style="font-weight: 1000;font-size: 40px;">40%</span> OFF</p>
							
						</div>
                </div>
                <div class="item-slide">
                <a href="/shop">
    
                    <img src="<?php echo e(asset('asset/banner/banner5.webp')); ?>" alt="" class="img-slide"></a>
                    <div class="slide-info slide-1">
	
							<p class="sale-info" style="color:white;padding-top:160px;">get up to <span class="price"style="font-weight: 1000;font-size: 40px;">40%</span> OFF</p>
							
						</div>
                </div>
                
            </div>
        </div>

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                
                <a href="/shop" class="link-banner banner-effect-1">
                    <figure><img src="<?php echo e(asset('asset/banner/shortBanner1.webp')); ?>" alt="" style="height:235px;"></figure>
                   
                </a>
                
            </div>
            <div class="banner-item">
                <a href="/shop" class="link-banner banner-effect-1">
                    <figure><img src="<?php echo e(asset('asset/banner/shortBanner3.jpg')); ?>" alt="" style="height:235px;"></figure>
                    
                </a>
            </div>
            <div class="banner-item">
                <a href="/shop" class="link-banner banner-effect-1">
                    <figure><img src="<?php echo e(asset('asset/banner/shortBanner2.webp')); ?>" alt="" style="height:235px;"></figure>
                   
                </a>
            </div>
            
            
        </div>

        <!--On Sale-->
        <?php if($sproducts->count()>0): ?>
            <div class="wrap-show-advance-info-box style-1 has-countdown">
                <h3 class="title-box">On Sale</h3>
                <div class="wrap-top-banner">
                <a href="/shop" class="link-banner banner-effect-2">
                    <figure><img src="<?php echo e(asset('asset/banner/salebanner2.jpg')); ?>"  alt=""></figure>
                </a>
            </div>
                
                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                    <?php $__currentLoopData = $sproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" title="<?php echo e($product->name); ?>">
                                    <figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($product->image); ?>" width="800" height="800" alt="<?php echo e($product->name); ?>"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                            </div>
                            <div class="product-info">
                                <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" class="product-name"><span><?php echo e($product->name); ?></span></a>
                                <div class="wrap-price"><ins><p class="product-price">$<?php echo e($product->sale_price); ?></p></ins><del><p class="product-price">$<?php echo e($product->regular_price); ?></p></del></div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        <?php endif; ?>

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="/shop" class="link-banner banner-effect-2">
                    <figure><img src="<?php echo e(asset('asset/banner/newArrival.jpg')); ?>" width="1170" height="100" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                <?php $__currentLoopData = $lproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" title="<?php echo e($product->name); ?>">
                                                <figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($product->image); ?>" width="800" height="800" alt="<?php echo e($product->name); ?>"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="<?php echo e(route('product.details', ['slug'=>$product->slug])); ?>" class="product-name"><span><?php echo e($product->name); ?></span></a>
                                            <div class="wrap-price"><span class="product-price">$<?php echo e($product->regular_price); ?></span></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Our newly launched Categories</h3>
            <div class="wrap-top-banner">
                <a href="/shop" class="link-banner banner-effect-2">
                    <figure><img src="<?php echo e(asset('asset/banner/salebanner3.jpg')); ?>" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="#category_<?php echo e($category->id); ?>" class="tab-control-item <?php echo e($key==0 ? 'active':''); ?>"><?php echo e($category->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="tab-contents">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-content-item <?php echo e($key==0 ? 'active':''); ?>" id="category_<?php echo e($category->id); ?>">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                               
                                    <?php
                                        $c_products = DB::table('products')->where('category_id', $category->id)->get()->take($no_of_products);
                                    ?>

                                    <?php $__currentLoopData = $c_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="<?php echo e(route('product.details', ['slug'=>$c_product->slug])); ?>" title="<?php echo e($c_product->name); ?>">
                                                    <figure><img src="<?php echo e(asset('asset/product_image')); ?>/<?php echo e($c_product->image); ?>" width="800" height="800" alt="<?php echo e($product->name); ?>"></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="<?php echo e(route('product.details', ['slug'=>$c_product->slug])); ?>" class="product-name"><span><?php echo e($c_product->name); ?></span></a>
                                                <div class="wrap-price"><span class="product-price">$<?php echo e($c_product->regular_price); ?></span></div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>	
        <!--blog-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Wanna read some Fashion BLOGs ?</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                   
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                 <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="<?php echo e(route('blog.details',['slug'=>$blog->slug])); ?>" title="<?php echo e($blog->name); ?>">
                                                <figure><img src="<?php echo e(asset('asset/blog')); ?>/<?php echo e($blog->image); ?>.webp" style="height:210px;" alt="<?php echo e($blog->name); ?>"></figure>
                                            </a>
                                            
                                        </div>
                                        <div class="blog-details">
                                    
                
                              <h5>--by <?php echo e($blog->writer); ?></h5>
                             <p><?php echo e($blog->short_description); ?></p>
                             <a href="<?php echo e(route('blog.details',['slug'=>$blog->slug])); ?>">Read more</a>
                             </div>
                                        <div class="product-info">
                                            <a href="<?php echo e(route('blog.details',['slug'=>$blog->slug])); ?>" class="product-name"><span><?php echo e($blog->name); ?></span></a>
                                            
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>


        <!--endblog-->		

    </div>

</main>
<?php /**PATH C:\xampp\htdocs\OnlineFashionStore\resources\views/livewire/home-component.blade.php ENDPATH**/ ?>