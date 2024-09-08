@extends('layouts.app')

@section('title', 'Our Blog')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Our Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Section -->
    <div class="container-fluid blog py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Blog</h5>
                <h1>Latest Blog & News</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-xl-4">
                    <div class="blog-item bg-light rounded">
                        <img src="{{ asset('img/blog-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                        <div class="blog-content text-center">
                            <h5>By Daniel Martin</h5>
                            <p>24 March 2023</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="blog-item bg-light rounded">
                        <img src="{{ asset('img/blog-2.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                        <div class="blog-content text-center">
                            <h5>By Daniel Martin</h5>
                            <p>23 April 2023</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="blog-item bg-light rounded">
                        <img src="{{ asset('img/blog-3.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                        <div class="blog-content text-center">
                            <h5>By Daniel Martin</h5>
                            <p>30 Jan 2023</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
