{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
Giới thiệu 
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
@section('main-content')
    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('themes/images/bg_6.jpg')}}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Giới thiệu</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('themes/images/gioithieu.jpg')}});">
                        <a href="https://www.youtube.com/watch?v=VJ6QuKvQkpg" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="icon-play"></span>
                        </a>
                    </div>
                    <div class="col-md-7 py-md-5 wrap-about pb-md-5 ftco-animate">
              <div class="heading-section-bold mb-4 mt-md-5">
                <div class="ml-md-0">
                    <h2 class="mb-4">BOOKSTORE MEKONG</h2>
                </div>
              </div>
              <div class="pb-md-5 pb-4">
                            <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                            <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her.</p>
                            <p><a href="{{route('frontend.shop')}}" class="btn btn-primary">Shop now</a></p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection