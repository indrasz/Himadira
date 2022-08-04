@extends('layouts.app')

@section('title', ' Department')

@section('content')

<div class="row">
    <div class="card mb-4">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h6 class="mb-0">Edit Department </h6>
                </div>
                {{-- <div class="col-4 text-end">
                    <a href="#!" class="btn btn-sm bg-gradient-primary mb-0">Settings</a>
                </div> --}}
            </div>
        </div>
        <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Department Profile</h6>
            <form action="{{ route('dashboard.department.update', [$department->id]) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">

                    <div class="uploader border-2" onclick="$('#filePhoto').click()">
                        <img class="image-uploader" src="{{ Storage::url($department->thumbnail) }}"/>
                        <input type="file" name="thumbnail"  id="filePhoto" />
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="department-name">Name</label>
                            <input type="text" name="name" value="{{ $department->name ?? '' }}" id="name" class="form-control" placeholder="Nama Department">
                        </div>
                    </div>

                    <div class="col-md-12 text-end">
                        <button type="submit" class=" btn btn-sm bg-gradient-primary mb-0">Save</button>
                    </div>

                </div>

            </form>
            <hr class="horizontal dark my-4">

        </div>

    </div>
</div>

@endsection

@push('after-style')
    <style>
        .uploader {
            position:relative;
            overflow:hidden;
            width:300px;
            min-height:350px;
            background:#f3f3f3;

            border-radius: 15px;
            border:2px dashed #e8e8e8;
        }

        .uploader .image-uploader {
            width:300px;
            min-height:350px;
            object-fit: contain;
            object-position: center;
        }

        #filePhoto{
            position:absolute;
            border-radius: 15px;
            width:300px;
            height:400px;
            top:-50px;
            left:0;
            z-index:2;
            opacity:0;
            cursor:pointer;
        }

        .uploader img{
            position:absolute;
            border-radius: 15px;
            object-position: center;
            object-fit: cover;
            width:302px;
            height:302px;
            top:-1px;
            left:-1px;
            z-index:1;
            border:none;
        }
    </style>
@endpush

@push('after-script')

<script>
    var imageLoader = document.getElementById('filePhoto');
    imageLoader.addEventListener('change', handleImage, false);

    function handleImage(e) {
        var reader = new FileReader();
        reader.onload = function (event) {
            $('.uploader img').attr('src',event.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    }

    // Edit for multiple images
    // I didn't try but it should work.
    // Also you need write some CSS code to see all images in container properly.
    function handleImages(e) {
        $('.uploader img').remove();
        for(var i = 0; i < e.target.files.length; i++){
            var reader = new FileReader();
            reader.onload = function (event) {
                var $img = $('<img/>');
                $img.attr('src', event.target.result);
                $('.uploader').append($img);
            }
            reader.readAsDataURL(e.target.files[i]);
        }
    }
</script>

@endpush
