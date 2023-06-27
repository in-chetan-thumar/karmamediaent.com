
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
                                    <?php if(isset($upcoming_webseries) and !empty($upcoming_webseries->first())): ?>
                                        <?php $__currentLoopData = $upcoming_webseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webseries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="carousel-item <?php if($upcoming_webseries->first() == $webseries): ?> active <?php endif; ?>">

                                                <a href="<?php echo e($webseries->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.webseries.details',$webseries->slug)); ?>">
                                                    <img class="d-block w-100" src="<?php echo e($webseries->poster_landscape_url); ?>"
                                                        alt="Slider Image">
                                                </a>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                     <h1> No data available</h1>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <?php if(!empty($recent_webseries->first())): ?>
                        <div class="recentdiv">
                            <div class="heading">
                                <h3>Recent</h3>
                            </div>
                            <div class="tworowdiv">
                                <ul>
                                    <?php $__currentLoopData = $recent_webseries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webseries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="animated flipInX" data-wow-delay=".50s">
                                            <a
                                                href="<?php echo e($webseries->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.webseries.details',$webseries->slug)); ?>">
                                                <img src="<?php echo e($webseries->poster_landscape_url); ?>" />
                                                <span class="moviename"><?php echo e($webseries->title); ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <div class="flclear"></div>
                            </div>
                        </div>
                    <?php endif; ?>



                    


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content div end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\karmamediaent.com\www\resources\views/frontend/project/webseries.blade.php ENDPATH**/ ?>