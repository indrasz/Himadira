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

   <section class="w-100 h-100 pb-5" style="background: #FAFAFA;">
        <style>
            .dira-intern-section .title {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 600;
                font-size: 38px;
                line-height: 110%;
                /* identical to box height, or 42px */

                text-align: center;

                color: #000000;
            }

            .dira-intern-section .subtitle {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 160%;
                /* identical to box height, or 26px */

                letter-spacing: 0.05em;

                /* Grey */

                color: #7F8487;
            }

            .dira-intern-section .image-aksara {
                width: 80%;
            }

            .dira-intern-section .intern-mitra {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 600;
                font-size: 38px;
                line-height: 110%;
                /* identical to box height, or 42px */

                text-align: justify;

                color: #000000;
            }

            .dira-intern-section .dira-intern-title {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 600;
                font-size: 64px;
            }

            .dira-intern-section .dira-intern-subtitle {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                color: #7F8487;
            }

            @media (min-width:280px) and (max-width: 576px) {
                .dira-intern-section .dira-intern-title {
                    font-size: 35px;
                }

                .dira-intern-section .dira-intern-subtitle {
                    font-size: 15px;
                    color: #7F8487;
                }

                .dira-intern-section .image-aksara {
                    width: 289px;
                }


            }
        </style>
        <div class="container dira-intern-section p-3">

            <div class="row">
                <div class="col-md-6 d-grid align-content-center p-3">
                    <h5 class="dira-intern-title text-center text-md-start">
                        Program Magang <br> D3 RPLA
                    </h5>
                    <p class="dira-intern-subtitle mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl hac quis proin odio ut lobortis et
                        egestas gravida. Quis duis nec mi bibendum. Sit tincidunt morbi quam felis tincidunt nunc,
                        varius. Vestibulum, lorem nisi venenatis cursus lacus odio diam.

                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-center p-3">
                    <img src="{{ asset('frontend/images/banner-intern.png') }}" alt="logo" class="image-aksara">
                </div>
            </div>

            <div class="mt-4 intern-mitra">
                Mitra Magang
            </div>


            <div class="row mt-5">
                <!-- Card Container 1 -->


                @forelse ($intern as $key => $item)
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
                           <a href="{{ route('show-intern', $item->slug) }}" class="btn btn-custom py-3 py-md-4"> Lihat Selengkapnya</a>
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
