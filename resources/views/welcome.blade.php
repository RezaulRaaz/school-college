@extends('layouts.Frontend.master')
@section('tite', 'school-college')
    @push('css')
    @endpush
@section('content')
    <!-- slider area start -->
    <section>
        <div class="slider" style="background-image: url({{ asset('Frontend/images/slider-bg.jpg') }});">
            <div class="sldier-overlay">
                <div class="container slider-inner d-flex flex-wrap align-content-around ">
                    <div class="slider-name text-center  text-white">
                        <div class="school-name d-inline-block">
                            <h3 class="text-uppercase">Shool-college.com</h3>
                            <p id="emailHelp" class="form-text text-white text-right">Find Your Once</p>
                        </div>
                    </div>
                    <div class="institue-search">
                        <div class="form-group">
                            <input type="text" class="form-control" id="intitute-search"
                                placeholder="Search your Institue.....">
                        </div>
                    </div>
                    <div class="city-search">
                        <div class="row text-white text-uppercase text-center font-weight-bold">
                            <div class="col-lg-3 col-md-6 col-sm-4 mb-5">
                                <p>Dhaka</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-4 mb-5">Chittagong</div>
                            <div class="col-lg-3 col-md-6 col-sm-4 mb-5">Rajshahi</div>
                            <div class="col-lg-3 col-md-6 col-sm-4 mb-5">Barishal</div>
                            <div class="col-lg-3 col-md-6 col-sm-4 mb-5">Shylet</div>
                            <div class="col-lg-3 col-md-6 col-sm-4 mb-5">Rangpur</div>
                            <div class="col-lg-3 col-md-6 col-sm-4 mb-5">moymoshing</div>
                            <div class="col-lg-3 col-md-6 col-sm-4 mb-5">KHulna</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- Most Popular School And College  start  -->
    <section>
        <div class="p-school">
            <div class="container">
                <div class="p-school-title text-center py-5">
                    <marquee behavior="" direction="">
                        @foreach($notices as $notice)
                            <a href="#">{{$notice->post_title}}</a> |
                        @endforeach
                    </marquee>
                </div>
                <div class="p-school-content">
                    <h3 class="text-center pb-5">Most Popular School And College</h3>
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="images/s1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Stride International School</h6>
                                    <p class="card-text">Uttara sector 7, Road 27, house 16</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="images/s2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Adroit International School</h6>
                                    <p class="card-text">2/7, Block-F, Lalmatia, Dhaka 1207</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="images/s3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">British International Kids School</h6>
                                    <p class="card-text">13/b Tikatuly, Dhaka-1203</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="images/s4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Chittagong Model School & College</h6>
                                    <p class="card-text">Muradpur,Chittagong</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="images/s5.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Cantonment English School & College</h6>
                                    <p class="card-text">Chawk bazar,Chittagong</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="images/s6.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Chittagong Model School & College</h6>
                                    <p class="card-text">Muradpur,Chittagong</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Most Popular School And College  end  -->
    <!-- ads slider start  -->
    <section>
        <div class="container">
            <div class="ads-slider">
                <img src="images/banneradd.png" class="card-img-top" alt="...">
            </div>
        </div>
    </section>
    <!-- ads slider end  -->
    <!-- New School And College start -->
    <section>
        <div class="n-school">
            <div class="container">
                <div class="p-school-title text-center py-5">
                    <h3>Recent Added</h3>
                </div>
                <div class="p-school-content">
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="images/s1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Stride International School</h6>
                                    <p class="card-text">Uttara sector 7, Road 27, house 16</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="images/s2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Adroit International School</h6>
                                    <p class="card-text">2/7, Block-F, Lalmatia, Dhaka 1207</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="images/s3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">British International Kids School</h6>
                                    <p class="card-text">13/b Tikatuly, Dhaka-1203</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- New School And College end -->

@endsection
@push('js')
@endpush
