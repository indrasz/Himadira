@extends('layouts.frontend')

@section('title')

@section('content')

    <style>
        .title {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 110%;
            /* identical to box height, or 40px */


            /* black Text */

            color: #080920;
        }

        .subtitle {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 160%;
            /* or 38px */

            letter-spacing: 0.05em;

            /* Grey Text */

            color: #495579;
        }

        .card-content {
            box-shadow: 4px 8px 24px rgba(0, 9, 87, 0.15);
            border-radius: 16px !important;
        }

        .img-content {
            border-radius: 16px;
            object-fit: cover;
            object-position: center;
            min-width: 90% !important;
            max-height: 700px !important;
        }

        .img-card-content {
            border-radius: 16px;
            object-fit: cover;
            object-position: center;
            max-width: 350px;
            max-height: 350px;
        }

        .card-title {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 26px;
            line-height: 110%;
            /* identical to box height, or 40px */


            color: #000000;
        }

         .description {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            /* or 26px */

            text-align: justify;
            letter-spacing: 0.05em;
            color: #495579;
        }

        .card-description {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            /* or 26px */

            text-align: justify;
            letter-spacing: 0.05em;
            color: #495579;
            max-width: 350px;
            max-height: 50px !important;
        }

        .btn-custom {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            /* identical to box height */

            /* White */

            color: #FAFAFA;
            background: #000957;
            border-radius: 16px;
        }

        @media (min-width:280px) and (max-width: 576px) {
            .img-content {
                max-height: 300px;
            }

            .description {
                max-width: 300px;
            }

        }
    </style>

    <section class="w-100 h-100 pb-5" style="background: #FAFAFA;">

        <div class="container dira-intern-section p-3 mb-5">

            <div class="d-flex justify-content-center p-2">
                <img src="{{ asset('frontend/images/img-content.png') }}" alt="logo" class="img-content">
            </div>

            <div class="card-content p-4 mt-5">
                <h4 class="title">{{ $info->name }}</h4>
                <h3 class="subtitle">#{{ $info->category }}</h3>
                <p class="description">{!! $info->description !!}</p>
            </div>

        </div>

        <div class="container mt-4">
            <h4 class="title">
                Baca juga artikel lainnya
            </h4>


            <div class="carousel mt-4 py-4 justify-content-center align-items-center"
                style="background: none !important;"
                data-flickity='{"cellAlign" : "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true}'>
                <!-- Card Container 1 -->


                @forelse ($listSmart as $key => $item)
                    <div class="card-content box-border bg-white rounded d-flex flex-column p-3 me-4">

                        @if (isset($item->thumbnail) != null)
                            <img src=" {{ url(Storage::url($item->thumbnail)) }}" alt="content" loading="lazy"
                                class="img-card-content mb-4" width="350" height="350">
                        @else
                            <img alt="content" loading="lazy" class="img-content mb-4"
                                src="{{ url('https://via.placeholder.com/750x500') }}" />
                        @endif
                        <h4 class="card-title text-capitalize">{{ $item->name }}</h4>
                        <span class="d-inline-block text-wrap text-truncate card-description mb-3">{!! $item->description !!}</span>
                       <a href="{{ route('show-smart', $item->slug) }}" class="btn btn-custom py-3 py-md-4"> Baca Selengkapnya</a>
                    </div>
                @empty
                    <div class="col-12 d-flex justify-content-center text-center">
                        Belum ada Info yang diupload
                    </div>
                @endforelse
            </div>
        </div>
    </section>


@endsection
