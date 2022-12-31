@extends('layouts.app')

@section('title', ' Creation')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                 <div class="d-flex card-header justify-content-between pb-0 p-3">
                    <h6 class="mb-1">Creation</h6>
                    <a href="{{ route('dashboard.creation.create') }}" class="btn btn-sm px-2 bg-gradient-primary ">
                        add new creation
                    </a>
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
                                        Category</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Url</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Created at</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>


                                @forelse ($creation as $key => $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>

                                                    @if ($item->thumbnail != null)
                                                        <img class="avatar avatar-sm me-3"
                                                            src="{{ url(Storage::url($item->thumbnail)) }}"
                                                            alt="logo department" loading="lazy"
                                                            style="-o-object-fit: cover; object-fit: cover;">
                                                    @else
                                                        <img src="{{ url('https://via.placeholder.com/750x500') }}"
                                                            class="avatar avatar-sm me-3" alt="user1">
                                                    @endif
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $item->category }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $item->url }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{ $item->created_at }}</span>
                                        </td>
                                        <td class="align-middle text-center">

                                            <div class="d-flex gap-2">
                                                <a class="btn btn-link text-dark px-3 mb-0"
                                                    href="{{ route('dashboard.creation.edit', $item->id) }}"><i
                                                        class="fas fa-pencil-alt text-dark me-2"
                                                        aria-hidden="true"></i>Edit</a>

                                                <form action="{{ route('dashboard.creation.destroy', $item->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf

                                                    <button type="submit"
                                                        class="btn btn-link text-danger text-gradient px-3 mb-0">
                                                        <i class="far fa-trash-alt me-2"></i>
                                                        Delete
                                                    </button>
                                                </form>

                                            </div>
                                        </td>

                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
