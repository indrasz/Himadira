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

            text-align: center;
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
            width: 100%;
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
            min-height: 50px !important;
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


    <section class="w-100 h-100 pb-5" style="background: #FAFAFA">

        <div class="container dira-news-section p-md-4 p-2">

            <h1 class="title text-center mt-3 mt-sm-4">
               SELAMAT DATANG DI Himadira Karya.
            </h1>
            <p class="subtitle text-center pt-3">
                Temukan karya-karya hebat dari anak D3 RPLA di Himadira KARYA.
            </p>

            <div class="row mt-5">
                <!-- Card Container 1 -->


                @forelse ($creation as $key => $item)
                    <div class="col-12 col-md-4 mb-4 ">
                        <div class="card-content box-border bg-white rounded d-flex flex-column p-3 mx-1">
                            @if (isset($item->thumbnail) != null)
                                <img src=" {{ url(Storage::url($item->thumbnail)) }}" alt="content" loading="lazy"
                                    class="img-content mb-4" width="350" height="350">
                            @else
                                <img alt="content" loading="lazy" class="img-content mb-4"
                                    src="{{ url('https://via.placeholder.com/750x500') }}" />
                            @endif
                            <h4 class="card-title text-capitalize">{{ $item->name }}</h4>
                            <span
                                class="d-inline-block text-wrap text-truncate description mb-3">{!! $item->description !!}</span>
                            <button class="btn btn-custom py-3 py-md-4">Lihat Selengkapnya</button>
                        </div>
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
