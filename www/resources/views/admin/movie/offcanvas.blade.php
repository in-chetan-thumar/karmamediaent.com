<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="offcanvas offcanvas-end" style="width: 65% ;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($movie) ? 'Edit' : 'Create new' }} movie</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        {!! Form::open([
            'url' => isset($movie) ? route('movie.update', $movie->id) : route('movie.store'),
            'method' => isset($movie) ? 'PATCH' : 'POST',
            'id' => 'movie-form',
            'files' => true,
        ]) !!}


        @if (isset($movie))
            <input type="hidden" id='movie_id' value="{{ $movie->id }}">
        @endif

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Title', 'title', isset($movie) ? $movie->title : old('title'), '', ['class' => '', 'id' => 'title'], [], true) }}
                        @error('title')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Slug', 'slug', isset($movie) ? $movie->slug : old('slug'), '', ['class' => '', 'id' => 'slug'], [], true) }}
                        @error('slug')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Directed by', 'directed_by', isset($movie) ? $movie->directed_by : old('directed_by'), '', ['class' => ''], [], false) }}
                        @error('directed_by')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Produced by', 'produced_by', isset($movie) ? $movie->produced_by : old('produced_by'), '', ['class' => ''], [], false) }}
                        @error('produced_by')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Main cast', 'main_cast', isset($movie) ? $movie->main_cast : old('main_cast'), '', ['class' => ''], [], false) }}
                        @error('main_cast')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsDate('Release date', 'release_date', isset($movie) ? $movie->release_date : old('main_cast'), '', ['class' => ''], [], false) }}
                        @error('release_date')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsFile('Logo', 'logo', '', '', ['class' => '', 'id' => 'logo'], [], false) }}
                        <div id="logo-preview">
                            @if (isset($movie))
                                <img src="/{{ $movie->logo_url }}" alt="" id="preview-logo" class="mt-1">
                            @endif
                        </div>

                        @error('logo')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Youtube trailer link ', 'youtube_trailer_link', isset($movie) ? $movie->youtube_trailer_link : old('youtube_trailer_link'), '', ['class' => ''], [], false) }}
                        @error('youtube_trailer_link')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsFile('Poster (landscape)', 'poster_landscape', '', '', ['class' => '', 'id' => 'poster_landscape'], [], isset($movie) ? false : true) }}
                        <div id="poster-landscape-preview">
                            @if (isset($movie))
                                <img src="/{{ $movie->poster_landscape_url }}" alt="Preview"
                                    id="preview-poster-landscape" class="mt-1">
                            @endif
                        </div>

                        @error('poster_landscape')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsFile('Poster (potrait)', 'poster_potrait', '', '', ['class' => '', 'id' => 'poster_potrait'], [], isset($movie) ? false : true) }}
                        <div id="poster-potrait-preview">
                            @if (isset($movie))
                                <img src="/{{ $movie->poster_potrait_url }}" alt="Preview" id="preview-poster-potrait"
                                    class="mt-1">
                            @endif
                        </div>

                        @error('poster_potrait')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-2">
                <div class="row">
                    <div class="col-md-2">
                        <div class="upload-container mx-auto">
                            <img src="{{ asset('assets/images/upload.png') }}" alt="" style="width: 80%">
                            <input type="file" name="images[]" id="imageUpload" multiple>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div id="imagePreview" class="image-preview">
                            @if (isset($movie))
                                @foreach ($movie->gallery_url as $image)
                                    <div class="preview-item">
                                        <img class="preview-image" src="/{{ $image }}">
                                        <span class="server-preview-delete" onclick="deleteServerImage(this)"
                                            data-file="{{ $image }}"></span>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Facebook', 'facebook', isset($movie) ? $movie->facebook : old('facebook'), '', ['class' => ''], [], false) }}
                        @error('facebook')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Instagram', 'instagram', isset($movie) ? $movie->instagram : old('instagram'), '', ['class' => ''], [], false) }}
                        @error('instagram')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Youtube', 'youtube', isset($movie) ? $movie->youtube : old('youtube'), '', ['class' => ''], [], false) }}
                        @error('youtube')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Twitter', 'twitter', isset($movie) ? $movie->twitter : old('twitter'), '', ['class' => ''], [], false) }}
                        @error('twitter')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Netflix', 'netflix', isset($movie) ? $movie->netflix : old('netflix'), '', ['class' => ''], [], false) }}
                        @error('netflix')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Amazon Prime', 'amazon_prime', isset($movie) ? $movie->amazon_prime : old('amazon_prime'), '', ['class' => ''], [], false) }}
                        @error('amazon_prime')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Zee5', 'zee5', isset($movie) ? $movie->zee5 : old('zee5'), '', ['class' => ''], [], false) }}
                        @error('zee5')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Alt Balaji', 'alt_balaji', isset($movie) ? $movie->alt_balaji : old('alt_balaji'), '', ['class' => ''], [], false) }}
                        @error('alt_balaji')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Hotstar', 'hotstar', isset($movie) ? $movie->hotstar : old('hotstar'), '', ['class' => ''], [], false) }}
                        @error('hotstar')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Eros Now', 'eros_now', isset($movie) ? $movie->eros_now : old('eros_now'), '', ['class' => ''], [], false) }}
                        @error('eros_now')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Mx Player', 'mx_player', isset($movie) ? $movie->mx_player : old('mx_player'), '', ['class' => ''], [], false) }}
                        @error('mx_player')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsRadio('Status', 'status', isset($movie) ? ($movie->status == 'RELEASED' ? 'RELEASED' : 'UPCOMING') : 'RELEASED', '', ['class' => ''], ['RELEASED' => 'Released', 'UPCOMING' => 'Upcoming'], false) }}
                        @error('status')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsCheckBox('', 'is_clickable', isset($movie) ? ($movie->is_clickable == 'Y' ? 1 : 0) : 0, '', ['class' => ''], ['1' => 'Is clickable'], false) }}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsCheckBox('', 'is_recent', isset($movie) ? ($movie->is_recent == 'Y' ? 1 : 0) : 0, '', ['class' => ''], ['1' => 'Is recent'], false) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary', 'onclick' => 'submitForm()']) !!}
            </div>
        </div>
        </form>
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\MovieRequest', '#movie-form') !!}
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
                        '{{ route('movie.delete.image', [':movieId', ':imageUrl', ':ext']) }}'; // Update URL template
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
