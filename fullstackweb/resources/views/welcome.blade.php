@extends('layouts.app')

@section('content')
<section class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            
                            <h1 class="header">
                                Learning New Skill <br><span class="text-pink">Make a Beautiful Candle</span>
                            </h1>
                            <p class="support">
                                Made with love and arrangements uniquely<br> will make you happy and feel loved
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{asset('images/banner.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row brands">
                <div class="col-lg-10 col-12 text-center">
                </div>
            </div>
        </div>
    </section>

    <section id="product" class="benefits">
        <div class="container">
            <div class="row text-center p-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        OUR BEST PRODUCT
                    </p>
                    <h2 class="primary-header">
                        Elegant & Beautiful
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/item-1.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Dried Soft Flower
                        </h3>
                        <p class="support">
                            Learn from anyone around the <br> world and get a new skills
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/item-2.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Cinnamon Candle
                        </h3>
                        <p class="support">
                            Lara will help you to choose <br> which path that suitable for you
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/item-3.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Colorful Wax Candle
                        </h3>
                        <p class="support">
                            We will ensure that you will get <br> what you really do need
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/item-4.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Pressed Flower Message
                        </h3>
                        <p class="support">
                            Get your dream job in your dream <br> company together with us
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="class" class="pricing">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                        GOOD INVESTMENT
                    </p>
                    <h2 class="primary-header text-white">
                        Start Your Journey
                    </h2>
                    <p class="support">
                        Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                    </p>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-gila">
                                <p class="story text-center">
                                    Hobby Class
                                </p>
                                <h1 class="price text-center">
                                    $280K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Basic Technique
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Combine Color
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        1-1 Mentoring
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Future Job
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Decorate flowers
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Blend Fragrance
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Start Business
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{route('checkout')}}" class="btn btn-master btn-primary w-100 mt-3">
                                        Take This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    Kids Class
                                </p>
                                <h1 class="price text-center">
                                    $140K
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        1-1 Mentoring
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Basic Technique
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Coloring the Candle
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Offline Course Videos
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{route('checkout')}}" class="btn btn-master btn-secondary w-100 mt-3">
                                        Start With This Plan
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        SUCCESS STUDENTS
                    </p>
                    <h2 class="primary-header">
                        We Really Love Candle Art
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Sangat menyenangkan dapat belajar lilin yang sangat lucu
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/img_anya.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Anya Happy
                                        </h4>
                                        <p class="role">
                                        Student
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Pertama kali saya mencoba belajar lilin, saya menyukainya
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/img_jeremiaaxel.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Jeremia Axel
                                        </h4>
                                        <p class="role">
                                            Student
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Kelas lilin yang cukup menarik bagi saya untuk dipelajari
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/img_eluzaivito.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Eluzai Vito
                                        </h4>
                                        <p class="role">
                                        Student
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Sangat baik untuk dijadikan hobby karena menyenangkan
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/img_yohanes.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Yohanes Wijaya
                                        </h4>
                                        <p class="role">
                                        Student
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection