@extends('layouts.app')

@section('title', ' Creation')

@section('content')

<div class="row">
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="d-flex card-header justify-content-between pb-0 p-3">
                <h6 class="mb-1">Creation</h6>
                <a href="{{ route('dashboard.creation.create') }}" class="btn btn-sm px-2 bg-gradient-primary ">
                    add new creation
                </a>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-12">
                        <div class="carousel " style="background: #ffffff !important;"
                            data-flickity='{ "cellAlign": "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true }'>

                            <div class="col-xl-3 col-md-6 bg-none mb-xl-0 mb-4 mx-3">
                                <div class="card card-blog card-plain bg-none">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img alt="img-blur-shadow" loading="lazy"
                                                class="img-fluid shadow border-radius-xl"
                                                src="{{ url('https://via.placeholder.com/750x500') }}"
                                                style="min-height: 200px; -o-object-fit: cover; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <h5 class="text-center">
                                            Text
                                        </h5>
                                        </a>
                                        <span class="d-inline-block text-truncate" style="max-width: 250px;">
                                        </span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Creation table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Creation Name</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Created at</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>


                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>

                                                    <img src="{{ url('https://via.placeholder.com/750x500') }}"
                                                        class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">bla bla</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Active</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-bold">bla bla bla</span>
                                    </td>
                                    <td class="align-middle text-center">

                                        <div class="d-flex gap-2">
                                            <a class="btn btn-link text-dark px-3 mb-0"
                                                href="#"><i
                                                    class="fas fa-pencil-alt text-dark me-2"
                                                    aria-hidden="true"></i>Edit</a>

                                                <button type="submit"
                                                    class="btn btn-link text-danger text-gradient px-3 mb-0">
                                                    <i class="far fa-trash-alt me-2"></i>
                                                    Delete
                                                </button>
                                        </div>
                                    </td>

                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
