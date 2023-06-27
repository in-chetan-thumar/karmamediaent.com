
<?php $__env->startSection('title'); ?>
    Karma Media | Webseries
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>
    <!-- content div start -->
    <div class="contentdiv">
        <div class="movies-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>webseries</h2>
                        </div>


                        <div class="heading">
                            <h3>Upcoming</h3>
                        </div>
                        <div class="moviesslider">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                                </ol>
                                <div class="carousel-inner" data-interval="300">
                                    <?php if(isset($all_webseries) and !empty($all_webseries->first())): ?>
                                        <?php $__currentLoopData = $all_webseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webseries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="carousel-item <?php if($all_webseries->first() == $webseries): ?> active <?php endif; ?>">

                                                <a href="javascript:;">
                                                    <img class="d-block w-100" src="<?php echo e($webseries->poster_landscape_url); ?>"
                                                        alt="Slider Image">
                                                </a>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content div end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\karmamediaent\www\resources\views/frontend/project/webseries.blade.php ENDPATH**/ ?>