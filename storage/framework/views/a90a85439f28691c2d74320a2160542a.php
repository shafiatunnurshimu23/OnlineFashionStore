<div>
   <!--main area-->
	<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Contact us</span></li>
        </ul>
    </div>
    <div class="row">
        <div class=" main-content-area">
            <div class="wrap-contacts ">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="contact-box contact-form">
                        <h2 class="box-title">Leave a Message</h2>
                        <?php if(Session::has('message')): ?>
                        <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                        <?php endif; ?>
                        <form action="#" method="get" name="frm-contact" wire:submit.prevent="sendMessage">

                            <label for="name">Name<span>*</span></label>
                            <input type="text" value="" id="name" name="name" wire:model="name" >
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                            <p class="text-danger"><?php echo e($message); ?></p> 
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <label for="email">Email<span>*</span></label>
                            <input type="text" value="" id="email" name="email" wire:model="email" >
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                            <p class="text-danger"><?php echo e($message); ?></p> 
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <label for="phone">Number Phone</label>
                            <input type="text" value="" id="phone" name="phone" wire:model="phone" >
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                            <p class="text-danger"><?php echo e($message); ?></p> 
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <label for="comment">Comment</label>
                            <textarea name="comment" id="comment" wire:model="comment"></textarea>
                            <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                            <p class="text-danger"><?php echo e($message); ?></p> 
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <input type="submit" name="ok" value="Submit" >
                            
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="contact-box contact-info">
                        <div class="wrap-map">
                        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14946577.92468668!2d34.42350879687683!3d23.85175888145241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2sbd!4v1682035188487!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
                        </div>
                        <h2 class="box-title">Contact Detail</h2>
                        <div class="wrap-icon-box">

                            <div class="icon-box-item">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div class="right-info">
                                    <b>Email</b>
                                    <p>Support1@Mercado.com</p>
                                </div>
                            </div>
                            


                            <div class="icon-box-item">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="right-info">
                                    <b>Phone</b>
                                    <p>+880-2- 58154710</p>
                                </div>
                            </div>

                            <div class="icon-box-item">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="right-info">
                                    <b>Mail Office</b>
                                    <p>Lalmatia, Mirpur Road, Dhanmondi<br />Dhaka- 1207, Bangladesh</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!--end main products area-->

    </div><!--end row-->

</div><!--end container-->

</main>
<!--main area-->
</div>
<?php /**PATH C:\xampp\htdocs\OnlineFashionStore\resources\views/livewire/contact-component.blade.php ENDPATH**/ ?>