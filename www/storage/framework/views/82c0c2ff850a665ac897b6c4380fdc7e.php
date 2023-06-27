
<?php $__env->startSection('title'); ?>
    Karma Media | Movies
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>
    <!-- content div start -->
    <div class="contentdiv">
        <div class="movies-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>movies</h2>
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
                                </ol>
                                <div class="carousel-inner">
                                    <?php $__currentLoopData = $upcoming_movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="carousel-item <?php if($upcoming_movies->first() == $movie): ?> active <?php endif; ?>"
                                            data-interval="300">
                                            <a href="<?php echo e($movie->is_clickable == 'N' ? 'javascript:void(0)' : '#'); ?>">
                                                <img class="d-block w-100" src="<?php echo e($movie->poster_landscape_url); ?>"
                                                    alt="Slider Image">
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>

                        <?php if(!empty($recent_movies->first())): ?>
                            <div class="recentdiv">
                                <div class="heading">
                                    <h3>Recent</h3>
                                </div>
                                <div class="tworowdiv">
                                    <ul>
                                        <?php $__currentLoopData = $recent_movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="animated flipInX" data-wow-delay=".50s">
                                                <a
                                                    href="<?php echo e($movie->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.movie.details',$movie->slug)); ?>">
                                                    <img src="<?php echo e($movie->poster_landscape_url); ?>" />
                                                    <span class="moviename"><?php echo e($movie->title); ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="flclear"></div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(!empty($all_movies->first())): ?>
                            <div class="released">
                                <div class="heading">
                                    <h3>Released</h3>
                                </div>
                                <div class="fourrowdiv">
                                    <ul id="released_movies_block">

                                        <?php $__currentLoopData = $all_movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="animated fadeIn" data-wow-delay="1.25s">
                                                <a
                                                    href="<?php echo e($movie->is_clickable == 'N' ? 'javascript:void(0)' : route('frontend.movie.details',$movie->slug)); ?>">
                                                    <img src="/<?php echo e($movie->poster_potrait_url); ?>" />
                                                    <span class="moviename"><?php echo e($movie->title); ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="flclear"></div>
                                </div>
                                <div class="mt-4 text-center view_more_block">
                                    <a href="javascript:void(0);" class="blueborderbtn view_more" next-page="2">view
                                        more</a>
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

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            var current_page = '<?php echo e($all_movies->currentPage()); ?>';
            var last_page = '<?php echo e($all_movies->lastPage()); ?>';
            if (current_page == last_page) {
                $('.view_more').remove();
            }
            $('.view_more').click(function() {
                var nextPage = $(this).attr("next-page");
                var additionalParam = 'page=' + nextPage;
                var url = window.location.href;

                if (url.indexOf('?') !== -1) {
                    url += '&' + additionalParam;
                } else {
                    url += '?' + additionalParam;
                }

                $('.view_more').html('Loading...');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        if (!data.error) {
                            $('#released_movies_block').append(data.view);
                            $('.view_more').attr('next-page', data.current_page + 1);

                            if (data.current_page == data.last_page) {
                                $('.view_more').remove();
                            }

                        } else {
                            $('#status').hide();
                            $('#preloader').hide();
                            toastr.error(data.message);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#status').hide();
                        $('#preloader').hide();
                        toastr.error('Error occurred!');
                    }
                });
                $('.view_more').html('view more');
            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\karmamediaent.com\www\resources\views/frontend/project/movie.blade.php ENDPATH**/ ?>