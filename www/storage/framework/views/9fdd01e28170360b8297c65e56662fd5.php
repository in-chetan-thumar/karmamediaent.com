<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="<?php echo e(route('frontend.home')); ?>"><img
                src="<?php echo e(asset('assets/frontend/images/logo.png')); ?>" alt="Logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto pt-0">
            </ul>
            <ul class="navbar-nav mr-0">
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo e(route('frontend.about')); ?>">About</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Projects </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="<?php echo e(route('frontend.movies')); ?>">Movies</a>
                        <a class="dropdown-item " href="<?php echo e(route('frontend.webseries')); ?>">Webseries</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo e(route('frontend.news')); ?>">News</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo e(route('frontend.contact')); ?>">Contact</a>
                </li>
                <li class="nav-item socialtopicon"> <a target="_blank" class="nav-link"
                        href="https://www.facebook.com/KarmaMediaEnt"><i class="fa
      fa-facebook"></i></a> </li>
                <li class="nav-item socialtopicon"> <a target="_blank" class="nav-link"
                        href="https://twitter.com/KarmaMediaEnt"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="nav-item socialtopicon"> <a target="_blank" class="nav-link"
                        href="https://www.instagram.com/karmamediaent"><i class="fa
      fa-instagram"></i></a> </li>
                <li class="nav-item socialtopicon"> <a target="_blank" class="nav-link"
                        href="https://www.youtube.com/channel/UCDt3IC3FUadmisEI1VhUc8A"><i
                            class="fa fa-youtube-play"></i></a> </li>
            </ul>
        </div>
    </nav>

</div>
<?php /**PATH D:\OSPanel\domains\karmamediaent.com\www\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>