@extends('layouts.frontend')

@section('title', 'About |')

@section('content')

<section class="w-100 h-100">
    <style>
        .header-section .image-aksara {
            width: 500px;
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
                    Himadira Kabinet Aksara
                </h5>
                <p class="header-subtitle mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl hac quis proin odio ut lobortis et
                    egestas gravida. Quis duis nec mi bibendum. Sit tincidunt morbi quam felis tincidunt nunc,
                    varius. Vestibulum, lorem nisi venenatis cursus lacus odio diam.

                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-center p-3">
                <img src="{{ asset('frontend/images/bg-aksara.png') }}" alt="logo" class="image-aksara">
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
        <div class="carousel py-3 d-sm-none" style="background: #ffffff !important;" data-flickity='{"cellAlign" : "center", "contain": false, "groupCells": false, "wrapAround": true, "pageDots": true, "prevNextButtons": false, "draggable": true}'>
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

<section class="w-100 h-100 pb-5">
    <style>
        .dira-news-section .title {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 600;
            font-size: 38px;
            line-height: 110%;
            /* identical to box height, or 42px */

            text-align: center;

            color: #000000;
        }

        .dira-news-section .subtitle {
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

        .padding-custom {
            width: 367px;
            padding: 30px;
            margin: 10px;

        }

        .padding-custom .card-preview p {
            display: none;
            transition-delay: 1s;
        }

        .padding-custom.is-selected .card-preview p {
            display: inline;
            transition-delay: 1s;

        }

        .padding-custom.is-selected {
            padding: 0px;
            margin: -10px;
            transition: 0.7s;
        }

        .padding-custom {
            width: 367px;
            padding: 30px;
            margin: 10px;

        }

        .padding-custom .card-preview {
            max-width: 367px;
            min-height: 400px;
            border-radius: 15px;


        }

        .padding-custom.is-selected .card-preview {
            min-width: 377px;
            min-height: 480px;
            border-radius: 15px;


        }

        /* .card-preview {
                    max-width: 367px;
                    min-height: 450px;
                    border-radius: 15px;
                } */

        @media (min-width:280px) and (max-width: 576px) {
            .padding-custom.is-selected {
                padding: 0px;
                margin: 0px;
                transition: 0s;
            }

            .padding-custom {
                padding: 0px;
                margin: 0px;
            }

            .padding-custom .card-preview {
                min-width: 250px;
                min-height: 350px;
                border-radius: 15px;
                padding: 20px;
            }

            .padding-custom.is-selected .card-preview {
                max-width: 250px;
                min-height: 350px;
                border-radius: 15px;
            }
        }

    </style>
    <div class="container dira-news-section p-md-4 p-2">

        <h5 class="title text-center">
            Berita dira
        </h5>
        <p class="subtitle text-center pt-3">
            Berita seputar D3 Rekayasa Perangkat Lunak Aplikasi
        </p>

        <div class="carousel mt-4 py-4 justify-content-center align-items-center" style="background: #ffffff !important;" data-flickity='{"cellAlign" : "center", "contain": false, "groupCells": false, "wrapAround": true, "pageDots": false, "prevNextButtons": false, "draggable": true, "percentPosition": false}'>
            <!-- Card Container 1 -->


            <div class="padding-custom  mx-md-4 mx-3">
                <div class="box-border bg-white rounded d-flex flex-column card-preview" style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('images/dummy-image2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="mt-auto p-4">
                        <h5 class="text-white">
                            Bullying
                        </h5>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien congue condimentum augue
                            nunc, sed ornare. Facilisi a mattis velit mattis convallis.
                        </p>
                    </div>
                </div>
            </div>

            <div class="padding-custom  mx-md-4 mx-3">
                <div class="box-border bg-white rounded d-flex flex-column card-preview" style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('images/dummy-image2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="mt-auto p-4">
                        <h5 class="text-white">
                            Bullying
                        </h5>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien congue condimentum augue
                            nunc, sed ornare. Facilisi a mattis velit mattis convallis.
                        </p>
                    </div>
                </div>
            </div>

            <div class="padding-custom  mx-md-4 mx-3">
                <div class="box-border bg-white rounded d-flex flex-column card-preview" style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('images/dummy-image2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="mt-auto p-4">
                        <h5 class="text-white">
                            Bullying
                        </h5>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien congue condimentum augue
                            nunc, sed ornare. Facilisi a mattis velit mattis convallis.
                        </p>
                    </div>
                </div>
            </div>

            <div class="padding-custom  mx-md-4 mx-3">
                <div class="box-border bg-white rounded d-flex flex-column card-preview" style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('images/dummy-image2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <div class="mt-auto p-4">
                        <h5 class="text-white">
                            Bullying
                        </h5>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien congue condimentum augue
                            nunc, sed ornare. Facilisi a mattis velit mattis convallis.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="w-100 h-100 pb-5">
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

        .card-intern-preview {
            min-width: 340px;
            min-height: 400px;
            border-radius: 15px;
        }

        .card-intern-preview .intern-title {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 600;
            font-size: 28px;
            line-height: 110%;
            /* or 42px */


            color: #FFFFFF;

        }

        .card-intern-preview .intern-requirement {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 50%;
            /* or 26px */

            letter-spacing: 0.05em;

            color: #FFFFFF;

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

            .card-intern-preview {
                min-width: 200px;
                min-height: 250px;
            }

            .card-intern-preview .intern-requirement {

                font-size: 12px;
                line-height: 0%;
            }

            .card-intern-preview .intern-title {

                font-size: 18px;
                line-height: 110%;
                /* or 42px */


                color: #FFFFFF;

            }

        }

    </style>
    <div class="container dira-intern-section p-3">
        <h5 class="title text-center">
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

        <div class="carousel mt-4 py-4 justify-content-center align-items-center" style="background: #ffffff !important;" data-flickity='{"cellAlign" : "left", "contain": true, "groupCells": true, "wrapAround": false, "pageDots": false, "prevNextButtons": false, "draggable": true}'>
            <!-- Card Container 1 -->

            <div class="box-border bg-white rounded d-flex flex-column card-intern-preview mx-md-4 mx-0" style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('images/dummy-image2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="mt-auto p-3 p-md-4">
                    <h5 class="intern-title text-white mb-3">
                        Nama Perusahaan
                    </h5>
                    <div class="d-block">
                        <p class="intern-requirement text-white">
                            UX designer
                        </p>
                        <p class="intern-requirement text-white">
                            Front-end Developer
                        </p>
                        <p class="intern-requirement text-white">
                            back-end developer
                        </p>
                    </div>
                </div>
            </div>

            <div class="box-border bg-white rounded d-flex flex-column card-intern-preview mx-md-4 mx-0" style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('images/dummy-image2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="mt-auto p-3 p-md-4">
                    <h5 class="intern-title text-white mb-3">
                        Nama Perusahaan
                    </h5>
                    <div class="d-block">
                        <p class="intern-requirement text-white">
                            UX designer
                        </p>
                        <p class="intern-requirement text-white">
                            Front-end Developer
                        </p>
                        <p class="intern-requirement text-white">
                            back-end developer
                        </p>
                    </div>
                </div>
            </div>

            <div class="box-border bg-white rounded d-flex flex-column card-intern-preview mx-md-4 mx-0" style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('images/dummy-image2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="mt-auto p-3 p-md-4">
                    <h5 class="intern-title text-white mb-3">
                        Nama Perusahaan
                    </h5>
                    <div class="d-block">
                        <p class="intern-requirement text-white">
                            UX designer
                        </p>
                        <p class="intern-requirement text-white">
                            Front-end Developer
                        </p>
                        <p class="intern-requirement text-white">
                            back-end developer
                        </p>
                    </div>
                </div>
            </div>

            <div class="box-border bg-white rounded d-flex flex-column card-intern-preview mx-md-4 mx-0" style="background-image: linear-gradient(180deg, rgba(54, 54, 54, 0) 7.29%, rgba(0, 0, 0, 0.8) 119.2%), url('images/dummy-image2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="mt-auto p-3 p-md-4">
                    <h5 class="intern-title text-white mb-3">
                        Nama Perusahaan
                    </h5>
                    <div class="d-block">
                        <p class="intern-requirement text-white">
                            UX designer
                        </p>
                        <p class="intern-requirement text-white">
                            Front-end Developer
                        </p>
                        <p class="intern-requirement text-white">
                            back-end developer
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
