
<?php $__env->startSection('title'); ?>
    Karma Media | Contact us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('section'); ?>

        <!-- main img div start -->
        <div class="radiusdiv zindex">
            <div class="mainimg"><img
                    src="<?php echo e(asset('assets/frontend/images/contact-us-big-img.png')); ?>"
                    alt="Contact us Image" /></div>
        </div>
        <!-- main img div end -->

        <!-- content div start -->
        <div class="contactusmap">
            <?php $__env->startComponent('frontend.components.contact_us'); ?>
        
            <?php echo $__env->renderComponent(); ?>
        </div>
        <!-- content div end -->

        <!-- footer div start -->
        <?php $__env->startComponent('frontend.components.footer'); ?>
        <?php echo $__env->renderComponent(); ?>
        <!-- footer div end -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails",
                animationLoop: true,
            });

            itemWidth = 155;
            if ($(window).width() < 425) {
                itemWidth = 300;
            }

            initializeUpcomingFlexslider();

            $('#nav-tab a').on('click', function(e) {
                e.preventDefault();
                setTimeout(function() {
                    $(window).trigger('resize');
                }, 0);
            });

            $(window).on('resize', function() {
                setTimeout(function() {
                    $('.flexslider-upcoming').data('flexslider').resize();
                }, 0);
            });

            /* Add map's height to parent div */
            $('.text1').css('height', $('#map').height());
            $('#map').fadeIn(2000);

        });

        function initializeUpcomingFlexslider() {
            $('.flexslider-upcoming').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth: itemWidth,
                itemMargin: 20,
                maxItems: 5
            });
        }

        // Initialize and add the map
        function initMap() {
            var mumbai = {
                lat: 19.1414835,
                lng: 72.8333595
            };
            var atlanta = {
                lat: 33.750680,
                lng: -84.364400
            };

            var mapOptions = {
                zoom: 15,
                center: mumbai
            }
            map = new google.maps.Map(
                document.getElementById('map'), mapOptions);

            addMarker(mumbai, map);
            addMarker(atlanta, map);
        }

        // Adds a marker to the map.
        function addMarker(latlong, map) {
            var marker = new google.maps.Marker({
                position: latlong,
                map: map,
                icon: "<?php echo e(asset('assets/frontend/images/location-logo.png')); ?>"
            });

            google.maps.event.addListener(marker, 'click', function() {
                map.setZoom(15);
                map.setCenter(marker.getPosition());
            });
        }

        function highlightLocationOnMap(element, lat, long) {
            $('.show-on-map').removeClass('active');
            $(element).addClass('active');
            $('#map').hide();
            var latlong = new google.maps.LatLng(lat, long);
            $('#map').fadeIn(2000);
            map.setCenter(latlong);

        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOvcK9RAUc_PQm4Ue3SbSWO9aEz5pK1F0&callback=initMap"></script>
<?php $__env->stopSection(); ?>










<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\karmamediaent.com\www\resources\views/frontend/contact.blade.php ENDPATH**/ ?>