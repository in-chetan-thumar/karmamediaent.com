<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="offcanvas offcanvas-end" style="width: 65% ;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate"><?php echo e(isset($movie) ? 'Edit' : 'Create new'); ?> movie</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <?php echo Form::open([
            'url' => isset($movie) ? route('movie.update', $movie->id) : route('movie.store'),
            'method' => isset($movie) ? 'PATCH' : 'POST',
            'id' => 'movie-form',
            'files' => true,
        ]); ?>



        <?php if(isset($movie)): ?>
            <input type="hidden" id='movie_id' value="<?php echo e($movie->id); ?>">
        <?php endif; ?>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Title', 'title', isset($movie) ? $movie->title : old('title'), '', ['class' => '', 'id' => 'title'], [], true)); ?>

                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Slug', 'slug', isset($movie) ? $movie->slug : old('slug'), '', ['class' => '', 'id' => 'slug'], [], true)); ?>

                        <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Directed by', 'directed_by', isset($movie) ? $movie->directed_by : old('directed_by'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['directed_by'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Produced by', 'produced_by', isset($movie) ? $movie->produced_by : old('produced_by'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['produced_by'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Main cast', 'main_cast', isset($movie) ? $movie->main_cast : old('main_cast'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['main_cast'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsDate('Release date', 'release_date', isset($movie) ? $movie->release_date : old('main_cast'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['release_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsFile('Logo', 'logo', '', '', ['class' => '', 'id' => 'logo'], [], false)); ?>

                        <div id="logo-preview">
                            <?php if(isset($movie)): ?>
                                <img src="/<?php echo e($movie->logo_url); ?>" alt="" id="preview-logo" class="mt-1">
                            <?php endif; ?>
                        </div>

                        <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Youtube trailer link ', 'youtube_trailer_link', isset($movie) ? $movie->youtube_trailer_link : old('youtube_trailer_link'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['youtube_trailer_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsFile('Poster (landscape)', 'poster_landscape', '', '', ['class' => '', 'id' => 'poster_landscape'], [], isset($movie) ? false : true)); ?>

                        <div id="poster-landscape-preview">
                            <?php if(isset($movie)): ?>
                                <img src="/<?php echo e($movie->poster_landscape_url); ?>" alt="Preview"
                                    id="preview-poster-landscape" class="mt-1">
                            <?php endif; ?>
                        </div>

                        <?php $__errorArgs = ['poster_landscape'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsFile('Poster (potrait)', 'poster_potrait', '', '', ['class' => '', 'id' => 'poster_potrait'], [], isset($movie) ? false : true)); ?>

                        <div id="poster-potrait-preview">
                            <?php if(isset($movie)): ?>
                                <img src="/<?php echo e($movie->poster_potrait_url); ?>" alt="Preview" id="preview-poster-potrait"
                                    class="mt-1">
                            <?php endif; ?>
                        </div>

                        <?php $__errorArgs = ['poster_potrait'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-2">
                <div class="row">
                    <div class="col-md-2">
                        <div class="upload-container mx-auto">
                            <img src="<?php echo e(asset('assets/images/upload.png')); ?>" alt="" style="width: 80%">
                            <input type="file" name="images[]" id="imageUpload" multiple>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div id="imagePreview" class="image-preview">
                            <?php if(isset($movie)): ?>
                                <?php $__currentLoopData = $movie->gallery_url; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="preview-item">
                                        <img class="preview-image" src="/<?php echo e($image); ?>">
                                        <span class="server-preview-delete" onclick="deleteServerImage(this)"
                                            data-file="<?php echo e($image); ?>"></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Facebook', 'facebook', isset($movie) ? $movie->facebook : old('facebook'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['facebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Instagram', 'instagram', isset($movie) ? $movie->instagram : old('instagram'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['instagram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Youtube', 'youtube', isset($movie) ? $movie->youtube : old('youtube'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['youtube'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Twitter', 'twitter', isset($movie) ? $movie->twitter : old('twitter'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['twitter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Netflix', 'netflix', isset($movie) ? $movie->netflix : old('netflix'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['netflix'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Amazon Prime', 'amazon_prime', isset($movie) ? $movie->amazon_prime : old('amazon_prime'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['amazon_prime'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Zee5', 'zee5', isset($movie) ? $movie->zee5 : old('zee5'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['zee5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Alt Balaji', 'alt_balaji', isset($movie) ? $movie->alt_balaji : old('alt_balaji'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['alt_balaji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Hotstar', 'hotstar', isset($movie) ? $movie->hotstar : old('hotstar'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['hotstar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Eros Now', 'eros_now', isset($movie) ? $movie->eros_now : old('eros_now'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['eros_now'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsText('Mx Player', 'mx_player', isset($movie) ? $movie->mx_player : old('mx_player'), '', ['class' => ''], [], false)); ?>

                        <?php $__errorArgs = ['mx_player'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsRadio('Status', 'status', isset($movie) ? ($movie->status == 'RELEASED' ? 'RELEASED' : 'UPCOMING') : 'RELEASED', '', ['class' => ''], ['RELEASED' => 'Released', 'UPCOMING' => 'Upcoming'], false)); ?>

                        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color:red">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsCheckBox('', 'is_clickable', isset($movie) ? ($movie->is_clickable == 'Y' ? 1 : 0) : 0, '', ['class' => ''], ['1' => 'Is clickable'], false)); ?>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        <?php echo e(Form::bsCheckBox('', 'is_recent', isset($movie) ? ($movie->is_recent == 'Y' ? 1 : 0) : 0, '', ['class' => ''], ['1' => 'Is recent'], false)); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php echo Form::submit('Submit', ['class' => 'btn btn-primary', 'onclick' => 'submitForm()']); ?>

            </div>
        </div>
        </form>
    </div>
</div>
<?php echo JsValidator::formRequest('App\Http\Requests\MovieRequest', '#movie-form'); ?>

<script>
    // Save OR UPDATE DATA
    $('#movie-form').on('submit', function(e) {

        e.preventDefault();
        var formData = new FormData($('#movie-form')[0]);
        var url = $(this).attr('action');
        var method = $(this).attr('method');

        if ($(this).valid()) {
            $('#status').show();
            $('#preloader').show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                processData: false,
                contentType: false,
                type: method,
                data: formData,
                success: function(data, textStatus, jqXHR) {
                    if (!data.error) {
                        $('#status').hide();
                        $('#preloader').hide();
                        // $(".divtable").html(data.view);
                        location.reload()
                        toastr.success(data.message);
                        let closeCanvas = document.querySelector('[data-bs-dismiss="offcanvas"]');
                        closeCanvas.click();

                    } else {
                        $('#status').hide();
                        $('#preloader').hide();
                        toastr.error(data.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#make-info').find(':input[type=submit]').prop('disabled', false);
                    $('#status').hide();
                    $('#preloader').hide();
                    toastr.error('Error occurred!');
                }
            });
        }

    })


    function handleImageUpload(inputId, previewId, previewImgId) {

        const imageInput = document.getElementById(inputId);
        const imagePreview = document.getElementById(previewId);

        imageInput.addEventListener('change', function() {
            const file = imageInput.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', function() {
                    const imageUrl = reader.result;
                    imagePreview.innerHTML =
                        `<img src="${imageUrl}" alt="Preview" id="${previewImgId}" class="mt-1">`;
                });

                reader.readAsDataURL(file);
            }
        });
    }

    $('#logo').click(function() {
        handleImageUpload('logo', 'logo-preview', 'preview-logo');
    });

    $('#poster_landscape').click(function() {
        handleImageUpload('poster_landscape', 'poster-landscape-preview', 'preview-poster-landscape');
    });

    $('#poster_potrait').click(function() {
        handleImageUpload('poster_potrait', 'poster-potrait-preview', 'preview-poster-potrait');
    });
</script>

<script>
    function previewImages() {
        var previewContainer = document.getElementById('imagePreview');
        var files = document.getElementById('imageUpload').files;

        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();

            reader.onload = (function(file) {
                return function(e) {
                    var imageContainer = document.createElement('div');
                    imageContainer.className = 'preview-item';

                    var image = document.createElement('img');
                    image.className = 'preview-image';
                    image.src = e.target.result;
                    imageContainer.appendChild(image);

                    var deleteBtn = document.createElement('span');
                    deleteBtn.className = 'preview-delete';
                    deleteBtn.addEventListener('click', function() {
                        deleteImage(imageContainer, file);
                    });
                    imageContainer.appendChild(deleteBtn);

                    previewContainer.appendChild(imageContainer);
                };
            })(file);

            reader.readAsDataURL(file);
        }
    }

    function deleteImage(imageContainer, file) {
        swal({
                title: "Are you sure ? You, want to delete ?",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "Yes",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    var previewContainer = document.getElementById('imagePreview');
                    previewContainer.removeChild(imageContainer);

                    // Remove the file from the input's file list
                    var input = document.getElementById('imageUpload');
                    var files = Array.from(input.files);
                    var index = files.indexOf(file);
                    if (index > -1) {
                        files.splice(index, 1);
                    }
                    input.files = new FileListArray(files);
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }

    function FileListArray(array) {
        var list = new DataTransfer();
        array.forEach(function(file) {
            list.items.add(file);
        });
        return list.files;
    }

    document.getElementById('imageUpload').addEventListener('change', previewImages);
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script>
    function deleteServerImage(element, imageUrl) {
        var imageUrl = element.getAttribute('data-file');
        var movieId = $('#movie_id').val();

        var fileName = imageUrl.split('\\').pop();
        var name = fileName.split('.').shift(); // Get the file name without extension
        var extension = fileName.split('.').pop(); // Get the file extension

        swal({
                title: "Are you sure ? You, want to delete ?",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "Yes",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    var previewContainer = $(element).closest('.preview-item');
                    var url =
                        '<?php echo e(route('movie.delete.image', [':movieId', ':imageUrl', ':ext'])); ?>'; // Update URL template
                    url = url.replace(':movieId', movieId); // Replace placeholder with the movie ID
                    url = url.replace(':imageUrl', name); // Replace placeholder with the file name
                    url = url.replace(':ext', extension); // Replace placeholder with the file extension
                    var method = 'POST';
                    // Send an AJAX request to delete the file from the server.
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: url,
                        processData: false,
                        contentType: false,
                        type: method,
                        success: function(data, textStatus, jqXHR) {
                            if (!data.error) {
                                previewContainer.remove();
                                toastr.success(data.message);
                            } else {
                                toastr.error(data.message);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            toastr.error('Error occurred!');
                        }
                    });
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }
</script>
<?php /**PATH D:\OSPanel\domains\karmamediaent\www\resources\views/admin/movie/offcanvas.blade.php ENDPATH**/ ?>