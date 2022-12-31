@extends('layouts.frontend')

@section('title')

@section('content')

    <style>
        .title {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 26px;
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
                max-width: 300px;
                max-height: 300px;
            }

            .description {
                max-width: 300px;
            }

        }
    </style>

    <section class="w-100 h-100">
        <style>
            .header-section .image-aksara {
                width: 300px;
                height: 300px;
            }

            .header-section .header-title {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 600;
                font-size: 64px;
            }

            .header-section .header-subtitle {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                color: #7F8487;
            }

            @media (min-width:280px) and (max-width: 576px) {
                .header-section .header-title {
                    font-size: 35px;
                }

                .header-section .header-subtitle {
                    font-size: 15px;
                    color: #7F8487;
                }

                .header-section .image-aksara {
                    width: 289px;
                }


            }
        </style>
        <div class="container header-section p-3">
            <div class="row">
                <div class="col-md-6 d-grid align-content-center p-3">
                    <h5 class="header-title text-center text-md-start">
                        HIMADIRA FIT Telkom University
                    </h5>
                    <p class="header-subtitle mt-4">
                        HIMADIRA adalah Himpunan Mahasiswa D3 Rekayasa Perangkat Lunak Aplikasi. HIMADIRA merupakan sebuah
                        wadah organisasi mahasiswa yang berada di lingkungan Fakultas Ilmu Terapan Telkom University.<br>
                        #ThinkingOutOfTheBox <br>
                        #TakeItOutFromTheBox <br>
                        #CitaMuliaCitraMuliaKaryaMulia
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-center p-3">
                    <img src="{{ asset('frontend/images/main-logo.png') }}" alt="logo" class="image-aksara">
                </div>
            </div>
        </div>
    </section>

    <section class="w-100 h-100 pb-5" style="background: #FAFAFA">

        <div class="container dira-news-section p-md-4 p-2">

            <h5 class="title text-center mt-3 mt-sm-4">
                Berita dira
            </h5>
            <p class="subtitle text-center pt-3">
                Berita seputar D3 Rekayasa Perangkat Lunak Aplikasi
            </p>

            <div class="carousel mt-4 py-4 justify-content-center align-items-center"
                style="background: #fafafa !important;"
                data-flickity='{"cellAlign" : "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true}'>
                <!-- Card Container 1 -->

                @forelse ($info as $key => $item)
                    <div class="card-content box-border bg-white rounded d-flex flex-column p-3 me-4">

                        @if (isset($item->thumbnail) != null)
                            <img src=" {{ url(Storage::url($item->thumbnail)) }}" alt="content" loading="lazy"
                                class="img-content mb-4" width="350" height="350">
                        @else
                            <img alt="content" loading="lazy" class="img-content mb-4"
                                src="{{ url('https://via.placeholder.com/750x500') }}" />
                        @endif
                        <h4 class="card-title text-capitalize">{{ $item->name }}</h4>
                        <span class="d-inline-block text-wrap text-truncate description mb-3">{!! $item->description !!}</span>
                        <button class="btn btn-custom py-3 py-md-4"> Baca Selengkapnya</button>
                    </div>
                @empty
                    <div class="col-12 d-flex justify-content-center text-center">
                        Belum ada Info yang diupload
                    </div>
                @endforelse

            </div>

        </div>
    </section>

    <section class="w-100 h-100 pb-5" style="background: #E7EAEA;">
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

            }
        </style>
        <div class="container dira-intern-section p-3">
            <h5 class="title text-center mt-4">
                Magang
            </h5>
            <p class="subtitle text-center pt-3">
                Informasi Magang Seputar D3RPLA
            </p>
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
                    <img src="{{ asset('frontend/images/bg-intern.png') }}" alt="logo" class="image-aksara">
                </div>
            </div>

            <div class="mt-4 intern-mitra">
                Mitra Magang
            </div>


            <div class="carousel mt-4 py-4 justify-content-center align-items-center"
                style="background: #E7EAEA !important;"
                data-flickity='{"cellAlign" : "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true}'>
                <!-- Card Container 1 -->


                @forelse ($intern as $key => $item)
                    <div class="card-content box-border bg-white rounded d-flex flex-column p-3 me-4">

                        @if (isset($item->thumbnail) != null)
                            <img src=" {{ url(Storage::url($item->thumbnail)) }}" alt="content" loading="lazy"
                                class="img-content mb-4" width="350" height="350">
                        @else
                            <img alt="content" loading="lazy" class="img-content mb-4"
                                src="{{ url('https://via.placeholder.com/750x500') }}" />
                        @endif
                        <h4 class="card-title text-capitalize">{{ $item->name }}</h4>
                        <span class="d-inline-block text-wrap text-truncate description mb-3">{!! $item->description !!}</span>
                        <button class="btn btn-custom py-3 py-md-4"> Baca Selengkapnya</button>
                    </div>
                @empty
                    <div class="col-12 d-flex justify-content-center text-center">
                        Belum ada Info yang diupload
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="w-100 h-100 pb-5" style="background: #FAFAFA">
        <style>
            .bg-content {
                border-radius: 16px;
            }
        </style>

        <div class="container dira-news-section p-md-4 p-2">

            <h5 class="title text-center mt-3 mt-sm-4">
                Himadira Pintar
            </h5>
            <p class="subtitle text-center pt-3">
                Berita seputar D3 Rekayasa Perangkat Lunak Aplikasi
            </p>

            <div class="row">

                <div class="col-12 col-sm-3">
                    @if (isset($smart1))
                        <a href="#" class="bg-content d-flex flex-column text-decoration-none mb-3 mb-sm-0"
                            style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('{{ url(Storage::url($smart1->thumbnail)) }}'); min-height:500px; width:100%; background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="mt-auto p-3 p-md-4">
                                <h5 class="intern-title text-white mb-3">
                                    {{ $smart1->name }}
                                </h5>
                            </div>
                        </a>
                    @else
                        <a href="#" class="bg-content d-flex flex-column text-decoration-none mb-3 mb-sm-0"
                            style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('{{ url('https://via.placeholder.com/750x500') }}'); min-height:500px; width:100%; background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="mt-auto p-3 p-md-4">
                                <h5 class="intern-title text-white mb-3">
                                    Info Himadira
                                </h5>
                            </div>
                        </a>
                    @endif
                </div>


                <div class="col-12 col-sm-6">

                    @if (isset($smart2))
                        <a href="#" class="bg-content d-flex flex-column text-decoration-none mb-3 mb-sm-0"
                            style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('{{ url(Storage::url($smart2->thumbnail)) }}'); min-height:243px; width:100%; background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="mt-auto p-3 p-md-4">
                                <h5 class="intern-title text-white mb-3">
                                    {{ $smart2->name }}
                                </h5>
                            </div>
                        </a>
                    @else
                        <a href="#" class="bg-content d-flex flex-column text-decoration-none mb-3 mb-sm-0"
                            style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('{{ url('https://via.placeholder.com/750x500') }}'); min-height:243px; width:100%; background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="mt-auto p-3 p-md-4">
                                <h5 class="intern-title text-white mb-3">
                                    Info Himadira
                                </h5>
                            </div>
                        </a>
                    @endif

                    @if (isset($smart3))
                        <a href="#" class="bg-content d-flex flex-column text-decoration-none mt-3 mb-3 mb-sm-0"
                            style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('{{ url(Storage::url($smart3->thumbnail)) }}'); min-height:243px; width:100%; background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="mt-auto p-3 p-md-4">
                                <h5 class="intern-title text-white mb-3">
                                    {{ $smart3->name }}
                                </h5>

                            </div>
                        </a>
                    @else
                        <a href="#" class="bg-content d-flex flex-column text-decoration-none mb-3 mb-sm-0"
                            style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('{{ url('https://via.placeholder.com/750x500') }}'); min-height:243px; width:100%; background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="mt-auto p-3 p-md-4">
                                <h5 class="intern-title text-white mb-3">
                                    Info Himadira
                                </h5>
                            </div>
                        </a>
                    @endif


                </div>
                <div class="col-12 col-sm-3">

                    @if (isset($smart4))
                        <a href="#" class="bg-content d-flex flex-column text-decoration-none mb-3 mb-sm-0"
                            style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('{{ url(Storage::url($smart4->thumbnail)) }}'); min-height:500px; width:100%; background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="mt-auto p-3 p-md-4">
                                <h5 class="intern-title text-white mb-3">
                                    {{ $smart4->name }}
                                </h5>
                            </div>
                        </a>
                    @else
                        <a href="#" class="bg-content d-flex flex-column text-decoration-none mb-3 mb-sm-0"
                            style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('{{ url('https://via.placeholder.com/750x500') }}'); min-height:500px; width:100%; background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <div class="mt-auto p-3 p-md-4">
                                <h5 class="intern-title text-white mb-3">
                                    Info Himadira
                                </h5>
                            </div>
                        </a>
                    @endif

                </div>
            </div>

        </div>
    </section>

    <section class="w-100 h-100 pb-5">
        <style>
            .dira-goals-section .card-goals {
                filter: drop-shadow(16px 14px 33px rgba(42, 56, 176, 0.15));
                background: #FFFFFF;
                border-radius: 15px;
                min-height: 364px;
            }

            .dira-goals-section .title {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 600;
                font-size: 38px;
                line-height: 110%;
                /* identical to box height, or 42px */

                text-align: center;

                color: #000000;
            }

            .dira-goals-section .subtitle {
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

            .dira-goals-section .goals-text {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 160%;
                /* or 32px */

                text-align: center;
                letter-spacing: 0.05em;
                width: 50%;

                /* Grey */

                color: #7F8487;
            }

            .dira-goals-section .card-goals h3 {
                font-family: 'Raleway';
                font-style: normal;
                font-weight: 600;
                font-size: 64px;
                line-height: 110%;
                /* or 70px */

                text-align: center;

                /* primary */

                color: #000957;
            }

            .dira-goals-section .card-goals .card-goals-text {
                font-family: 'Poppins';
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 160%;
                /* or 29px */

                text-align: center;
                letter-spacing: 0.05em;

                color: #000000;
            }

            @media (min-width:280px) and (max-width: 576px) {


                .dira-goals-section .card-goals {
                    min-height: 100px;
                }

                .dira-goals-section .title {
                    font-size: 24px;
                    line-height: 110%;

                    color: #000000;
                }

                .dira-goals-section .subtitle {
                    font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 12px;
                }

                .dira-goals-section .goals-text {
                    font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 12px;
                    width: 100%;
                }

                .dira-goals-section .card-goals h3 {
                    font-family: 'Raleway';
                    font-style: normal;
                    font-weight: 600;
                    font-size: 40px;
                    line-height: 110%;
                }

                .dira-goals-section .card-goals .card-goals-text {
                    font-family: 'Poppins';
                    font-style: normal;
                    font-weight: 400;
                    font-size: 12px;
                    line-height: 160%;
                    /* or 29px */

                    text-align: center;
                    letter-spacing: 0.05em;

                    color: #000000;
                }


            }
        </style>
        <div class="container dira-goals-section p-3">
            <h5 class="title text-center">
                Visi & Misi
            </h5>
            <p class="subtitle text-center pt-3">
                Visi & misi Kabinet <span style="color:#CF0000">Aksara</span>
            </p>

            <div class=" d-flex justify-content-center ">
                <p class="goals-text text-center pt-3 ">
                    Bertujuan untuk mewujudkan HIMADIRA sebagai himpunan mahasiswa yang dapat berperan aktif dalam
                    mengabdi pada masyarakat serta terciptanya mahasiswa yang memiliki jiwa sosial yang tinggi,hubungan
                    yang akrab, berinovasi kreatif dan profesional dalam bekerja
                </p>
            </div>
            <div class="row justify-content-center d-none d-sm-flex">
                <div class="col-12 col-md-4 p-3">
                    <div class="card-goals text-center p-5">
                        <h3>#1</h3>
                        <p class="card-goals-text mt-3">
                            Memperkuat keakraban serta menjaga hubungan antar angkatan maupun alumi agar terciptanya
                            mahasiswa yang solid dan harmonis.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 p-3">
                    <div class="card-goals text-center p-5">
                        <h3>#2</h3>
                        <p class="card-goals-text mt-3">
                            Mendukung dan membantu mahasiswa untuk berprestasi dibidang akademik ataupun non-akademik.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 p-3">
                    <div class="card-goals text-center p-5">
                        <h3>#3</h3>
                        <p class="card-goals-text mt-3">
                            Mewadahi dan memberikan solusi atas mahasiswa yang sedang mengalami masalah
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 p-3">
                    <div class="card-goals text-center p-5">
                        <h3>#4</h3>
                        <p class="card-goals-text mt-3">
                            Memperluas relasi antar himpunan ataupun industri agar terciptanya kerjasama yang baik
                            dengan kedua belah pihak. </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 p-3">
                    <div class="card-goals text-center p-5">
                        <h3>#5</h3>
                        <p class="card-goals-text mt-3">
                            Menumbuhkan kepedulian mahasiswa terhadap isu-isu yang berada didalam kampus maupun di luar
                            kampus. </p>
                    </div>
                </div>
            </div>
            <div class="carousel py-3 d-sm-none" style="background: #ffffff !important;"
                data-flickity='{"cellAlign" : "center", "contain": false, "groupCells": false, "wrapAround": true, "pageDots": true, "prevNextButtons": false, "draggable": true}'>
                <!-- Card Container 1 -->
                <div class="col-12 col-md-4 p-3">
                    <div class="card-goals text-center p-md-4 p-2">
                        <h3>#1</h3>
                        <p class="card-goals-text mt-3">
                            Memperkuat keakraban serta menjaga hubungan antar angkatan maupun alumi agar terciptanya
                            mahasiswa yang solid dan harmonis.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 p-3">
                    <div class="card-goals text-center p-md-4 p-3">
                        <h3>#2</h3>
                        <p class="card-goals-text mt-3">
                            Mendukung dan membantu mahasiswa untuk berprestasi dibidang akademik ataupun non-akademik.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-3">
                    <div class="card-goals text-center p-md-4 p-3">
                        <h3>#3</h3>
                        <p class="card-goals-text mt-3">
                            Mewadahi dan memberikan solusi atas mahasiswa yang sedang mengalami masalah
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 p-3">
                    <div class="card-goals text-center p-md-4 p-3">
                        <h3>#4</h3>
                        <p class="card-goals-text mt-3">
                            Memperluas relasi antar himpunan ataupun industri agar terciptanya kerjasama yang baik
                            dengan kedua belah pihak. </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 p-3">
                    <div class="card-goals text-center p-md-4 p-3">
                        <h3>#5</h3>
                        <p class="card-goals-text mt-3">
                            Menumbuhkan kepedulian mahasiswa terhadap isu-isu yang berada didalam kampus maupun di luar
                            kampus. </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('includes.frontend.footer')

@endsection
