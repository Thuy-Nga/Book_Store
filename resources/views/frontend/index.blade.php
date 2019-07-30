{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
BookStore
@endsection

{{-- Thay thế nội dung vào Placeholder `custom-css` của view `frontend.layouts.master` --}}
@section('custom-css')
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `frontend.layouts.master` --}}
@section('main-content')

<!-- Slider -->
@include('frontend.widgets.homepage-slider')
<!-- Banner -->
<!-- @include('frontend.widgets.homepage-banner') -->
<!-- About serve -->
<!-- @include('frontend.widgets.serve') -->
<!-- Product list -->
@include('frontend.widgets.product-list', [$data = $dssp])

<!-- Product deal-->
@include('frontend.widgets.product-deal')

<!-- gallery-img -->
@include('frontend.widgets.product-gallery')

@endsection

{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection