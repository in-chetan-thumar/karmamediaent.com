<div class="offcanvas offcanvas-end" style="width: 40% ;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($news) ? 'Edit' : 'Create new' }} news</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if (isset($news))
            {!! Form::open([
                'url' => route('news.update', $news->id),
                'method' => 'PATCH',
                'id' => 'news-form',
                'files' => true,
            ]) !!}
        @else
            {!! Form::open([
                'url' => route('news.store'),
                'method' => 'POST',
                'id' => 'news-form',
                'files' => true,
            ]) !!}
        @endif

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Title','title',isset($news) ? $news->title : old('title'),'',['class'=>'','id' => 'title'],[],true) }}
                        @error('title')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Slug','slug',isset($news) ? $news->slug : old('slug'),'',['class'=>'','id' => 'slug'],[],true) }}
                        @error('slug')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsFile('Photo','photo','','',['class'=>'','id' => 'image-input'],[],isset($news) ? false : true) }}
                        <div id="image-preview">
                            @if (isset($news))
                                <img src="/{{$news->photo_url}}" alt="Preview" id="preview-image" class="mt-1">
                            @endif
                        </div>

                        @error('photo')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Link','link',isset($news) ? $news->link : old('link'),'',['class'=>'','id' => 'link'],[],true) }}
                        @error('link')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsSelect('Month','month',isset($news) ? $news->month : old('month'),'',['class'=>'','placeholder'=>'Select month'],config('constants.MONTH'),true) }}
                        @error('month')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsSelect('Year','year',isset($news) ? $news->year : old('year'),'',['class'=>'','placeholder'=>'Select year'],config('constants.YEARS'),true) }}
                        @error('year')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsCheckBox('','is_published',isset($news) ? ( $news->is_published == 'Y' ? 1 : 0 ) : 0,'',['class'=>''],["1"=>'Published'],false) }}
                    </div>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        </form>
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\NewsRequest', '#news-form') !!}
<script>
    // Save OR UPDATE DATA
    $('#news-form').on('submit', function(e) {
        
        e.preventDefault();
        var formData = new FormData($('#news-form')[0]);
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
                        console.log('true')
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

    const imageInput = document.getElementById('image-input');
    const imagePreview = document.getElementById('image-preview');

    imageInput.addEventListener('change', function() {
        const file = imageInput.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                const imageUrl = reader.result;
                imagePreview.innerHTML = '';
                imagePreview.innerHTML = `<img src="${imageUrl}" alt="Preview" id="preview-image" class="mt-1">`;
            });
            reader.readAsDataURL(file);
        }
    });
</script>
