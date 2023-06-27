
<?php $__env->startSection('title'); ?>
    Karma Media | Webseries details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .gallerysocail img {
            width: 41px;
            height: 42px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>
    <!-- content div start -->
    <div class="radiusdiv">
        <div class="watchnow">
            <?php if(isset($webseries_details) and !empty($webseries_details->youtube_trailer_link)): ?>
                <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter"><img
                        src="<?php echo e(asset('assets/frontend/images/watch-now.png')); ?>" alt="" /></a>
            <?php endif; ?>
        </div>
        <div class="mainimg"> <img src="/<?php echo e($webseries_details->poster_landscape_url); ?>" alt="" /></div>
        <div class="sliderimg"><img src="<?php echo e(asset('assets/frontend/images/slider-bg-gallery.png')); ?>" alt="" />
        </div>
    </div>
    <!-- home slider div end -->

    <!-- content div start -->
    <div class="contentdiv">
        <div class="trailerbox">
            <div class="trailerbox-top-bg">THEATRICAL TRAILER</div>
            <div class="trailertabs">
                <div class="tabings">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link"
                                id="nav-castcrew-tab" data-toggle="tab" href="#nav-castcrew" role="tab"
                                aria-controls="nav-castcrew" aria-selected="true">Cast & Crew</a> <a
                                class="nav-item nav-link active" id="nav-gallery-tab" data-toggle="tab" href="#nav-gallery"
                                role="tab" aria-controls="nav-gallery" aria-selected="false">Gallery</a> </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-castcrew" role="tabpanel" aria-labelledby="nav-castcrew-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-5 marmobbot3">
                                    <div class="text-center"><img src="/<?php echo e($webseries_details->logo_url); ?>" alt="Logo"
                                            class="img-fluid" /></div>
                                </div>
                                <div class="col-lg-7">
                                    <?php if(isset($webseries_details)): ?>
                                        <ul class="galleryinfo">
                                            <?php if(!empty($webseries_details->directed_by)): ?>
                                                <li>
                                                    <div>Directed By :</div>
                                                    <div class="namewhite"><?php echo e($webseries_details->directed_by); ?></div>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->produced_by)): ?>
                                                <li>
                                                    <div>Produced By :</div>
                                                    <div class="namewhite"><?php echo e($webseries_details->produced_by); ?></div>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->release_date_front_formatted)): ?>
                                                <li>
                                                    <div>Release Date:</div>
                                                    <div class="namewhite"><?php echo e($webseries_details->release_date_front_formatted); ?></div>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->main_cast)): ?>
                                                <li>
                                                    <div>Main Cast:</div>
                                                    <div class="namewhite"><?php echo e($webseries_details->main_cast); ?></div>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                        <ul class="gallerysocail">

                                            <?php if(!empty($webseries_details->facebook)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->facebook); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/facebook.png')); ?>"
                                                            alt="facebook" /></a></li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->instagram)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->instagram); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/instagram.png')); ?>"
                                                            alt="instagram" /></a></li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->youtube)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->youtube); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/youtube.png')); ?>"
                                                            alt="youtube" /></a></li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->twitter)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->twitter); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/twitter.png')); ?>"
                                                            alt="twitter" /></a></li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->amazon_prime)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->amazon_prime); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/amazon_prime.png')); ?>"
                                                            alt="amazon prime" /></a></li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->netflix)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->netflix); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/netflix.png')); ?>"
                                                            alt="netflix" /></a></li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->zee5)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->zee5); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/zee5.png')); ?>"
                                                            alt="zee5" /></a></li>
                                            <?php endif; ?>

                                            <?php if(!empty($webseries_details->hotstar)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->hotstar); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/hotstar.png')); ?>"
                                                            alt="hotstar" /></a></li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->alt_balaji)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->alt_balaji); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/alt_balaji.png')); ?>"
                                                            alt="alt balaji" /></a></li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->eros_now)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->eros_now); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/eros_now.png')); ?>"
                                                            alt="eros now" /></a></li>
                                            <?php endif; ?>
                                            <?php if(!empty($webseries_details->mx_player)): ?>
                                                <li><a target="_blank" href="<?php echo e($webseries_details->mx_player); ?>"><img
                                                            src="<?php echo e(asset('assets/frontend/images/mx_player.png')); ?>"
                                                            alt="mx player" /></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <div class="flclear"></div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade show active" id="nav-gallery" role="tabpanel"
                            aria-labelledby="nav-gallery-tab">
                            <div class="galleryslider">
                                <div class="demo-gallery">
                                    <div class="masonry slides" id="lightgallery">
                                        <?php if(isset($webseries_details) and !empty($webseries_details->gallery_url[0])): ?>
                                            <?php $__currentLoopData = $webseries_details->gallery_url; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="brick" data-src="/<?php echo e($image); ?>">
                                                    <img src="/<?php echo e($image); ?>">
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="flexslider1 carousel demo-gallery-mobile" style="display: none;">
                                    <ul class="slides" id="lightgallery-mobile">
                                        <?php if(isset($webseries_details) and !empty($webseries_details->gallery_url[0])): ?>
                                            <?php $__currentLoopData = $webseries_details->gallery_url; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li data-responsive="/<?php echo e($image); ?>"
                                                    data-src="/<?php echo e($image); ?>">
                                                    <a href="">
                                                        <img src="/<?php echo e($image); ?>" width="100%" />
                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- content div end -->

    <!-- video popup Modal -->

    <?php if(isset($webseries_details) and !empty($webseries_details->youtube_trailer_link)): ?>
        <div class="videopopup">
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                                    aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                            <div class="videoWrapper">
                                <iframe width="560" height="349" src="<?php echo e($webseries_details->youtube_trailer_link); ?>"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <!-- content div end -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            var current_page = '<?php echo e($all_webseries->currentPage()); ?>';
            var last_page = '<?php echo e($all_webseries->lastPage()); ?>';
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

        $(document).ready(function() {
            itemWidth = 615;
            if ($(window).width() < 767) {
                itemWidth = 300;
            }
            $('.flexslider1').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth: itemWidth,
                itemMargin: 20,
                maxItems: 1,
                before: function() {
                    $(window).resize();
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\karmamediaent.com\www\resources\views/frontend/project/webseries_details.blade.php ENDPATH**/ ?>