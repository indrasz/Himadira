@extends('layouts.app')

@section('title', ' Creation')

@section('content')

<div class="row">
    <div class="card mb-4">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                <h6>Info Creation</h6>
                <form action="{{ route('dashboard.creation.store') }}">

    <div class="form-group">
        <h6>Name</h6>
        <input type="text" class="form-control form-control-alternative" placeholder="Enter your Name">
    </div>

    <div class="form-group">
        <h6>Category</h6>
        <input type="text" class="form-control form-control-alternative" placeholder="Enter your Category">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <p >Pict of Creation</p>
    <div class=""\>
        <img class="image-uploader" src="{{ url('https://via.placeholder.com/750x500') }}"/>
        <input type="file" name="thumbnail"  id="filePhoto" />
    </div>

    <div class="form-group">
        <label for="example-url-input" class="form-control-label">URL</label>
        <input class="form-control" type="url" value="https://www.creative-tim.com" id="example-url-input">
    </div>

    <div class="form-group">
        <button type="submit" class=" btn btn-sm bg-gradient-primary mb-0">Save</button>
    </div>
</form>

@endsection

@push('after-style')
    <style>
        
    </style>
@endpush