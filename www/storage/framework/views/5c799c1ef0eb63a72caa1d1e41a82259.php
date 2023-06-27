<!-- Scripts -->
<script src=<?php echo e(asset('assets/frontend/js/jquery.min.js')); ?>></script>
<script src=<?php echo e(asset('assets/frontend/js/bootstrap.min.js')); ?>></script>
<script src=<?php echo e(asset('assets/frontend/js/popper.min.js')); ?>></script>
<script src=<?php echo e(asset('assets/frontend/js/jquery.flexslider.js')); ?>></script>
<script src=<?php echo e(asset('assets/frontend/js/lightgallery-all.min.js')); ?>></script>

<script type="text/javascript">
    document.onreadystatechange = function() {
        var state = document.readyState
        if (state == 'interactive') {
            document.getElementById('contents').style.visibility = "hidden";
        } else if (state == 'complete') {
            setTimeout(function() {
                document.getElementById('interactive');
                document.getElementById('load').style.visibility = "hidden";
                document.getElementById('contents').style.visibility = "visible";
            }, 500);
        }
    }

    $(document).ready(function() {
        $('#lightgallery').lightGallery();
        $('#lightgallery-mobile').lightGallery();
    });
</script>

<script src=<?php echo e(asset('assets/frontend/js/framework.js')); ?>></script>
<script src=<?php echo e(asset('assets/frontend/js/framework.extras.js')); ?>></script>




<?php /**PATH D:\OSPanel\domains\karmamediaent.com\www\resources\views/frontend/layouts/footer-js.blade.php ENDPATH**/ ?>