@extends('layouts.app')

@section('title', 'Store')

@section('content')

    <div class="row">
        <div class="card mb-4">
            <div class="card-header">
                <div class="row align-items-center">
                    <h6>Info store</h6>
                    <form action="{{ route('dashboard.store.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            {{-- form for input file image --}}
                            <div class="col-md-4">
                                <div class="uploader border-2" onclick="$('#filePhoto').click()">
                                    <img class="image-uploader" src="{{ url('https://via.placeholder.com/750x500') }}" />
                                    <input type="file" name="thumbnail" id="filePhoto" />
                                </div>
                            </div>
                            {{-- end form for input file image --}}

                            {{-- form for input text/number/email/etc --}}
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Nama Produk">
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="price">Price</label>
                                    <input type="number" name="price" id="category" class="form-control"
                                        placeholder="Harga Produk">
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="url">Link Url</label>
                                    <input type="text" name="url" id="url" class="form-control"
                                        placeholder="Link URL Produk">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="description">Description</label>
                                    <textarea id="editor" name="description" class="form-control" placeholder="A few words about this Ormawa ..."></textarea>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class=" btn btn-sm bg-gradient-primary mb-0">Save</button>
                                </div>
                            </div>
                            {{-- end form for input text/number/email/etc --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('after-style')
    <style>
        .uploader {
            position: relative;
            overflow: hidden;
            width: 300px;
            min-height: 350px;
            background: #f3f3f3;

            border-radius: 15px;
            border: 2px dashed #e8e8e8;
        }

        .uploader .image-uploader {
            width: 300px;
            min-height: 350px;
            object-fit: cover;
            object-position: center;
        }

        #filePhoto {
            position: absolute;
            border-radius: 15px;
            width: 300px;
            height: 400px;
            top: -50px;
            left: 0;
            z-index: 2;
            opacity: 0;
            cursor: pointer;
        }

        .uploader img {
            position: absolute;
            border-radius: 15px;
            object-position: center;
            object-fit: cover;
            width: 302px;
            height: 302px;
            top: -1px;
            left: -1px;
            z-index: 1;
            border: none;
        }
    </style>
@endpush

@push('after-script')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>

    <script>
        var imageLoader = document.getElementById('filePhoto');
        imageLoader.addEventListener('change', handleImage, false);

        function handleImage(e) {
            var reader = new FileReader();
            reader.onload = function(event) {
                $('.uploader img').attr('src', event.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        }

        // Edit for multiple images
        // I didn't try but it should work.
        // Also you need write some CSS code to see all images in container properly.
        function handleImages(e) {
            $('.uploader img').remove();
            for (var i = 0; i < e.target.files.length; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    var $img = $('<img/>');
                    $img.attr('src', event.target.result);
                    $('.uploader').append($img);
                }
                reader.readAsDataURL(e.target.files[i]);
            }
        }
    </script>
@endpush
