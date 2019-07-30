{{-- View này sẽ kế thừa giao diện từ `frontend.layouts.master` --}}
@extends('frontend.layouts.master')

{{-- Thay thế nội dung vào Placeholder `title` của view `frontend.layouts.master` --}}
@section('title')
Shop book
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
				<h1 class="mb-0 bread">Shop</h1>
			</div>
		</div>
	</div>
</div>
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-10 order-md-last">
				<div class="row">
					@foreach($dssp as $sp)
					<div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
						<div class="product d-flex flex-column">
							<a href="#" class="img-prod"><img class="img-fluid" src="{{asset('storage/photos/'. $sp->sp_hinh)}}" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3">
								<div class="d-flex">
									<div class="cat">
										<span>{{ $sp->loaiSanPham->l_ten }}</span>
									</div>
									<div class="rating">
										<p class="text-right mb-0">
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										</p>
									</div>
								</div>
								<h3><a href="#">{{ $sp->sp_ten }}</a></h3>
								<div class="pricing">
									<p class="price"><span>{{ $sp->sp_gia }}</span></p>
								</div>
								<p class="bottom-area d-flex px-3">
									<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
									<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
								</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>

				<div class="row mt-5">
					<div class="col text-center">
						<div class="block-27">
							<ul>
								<li><a href="#">&lt;</a></li>
								<li class="active"><span>1</span></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&gt;</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-2">
				<div class="sidebar">
					<div class="sidebar-box-2">
						<h2 class="heading">Loại</h2>
						<div class="fancy-collapse-panel">
							<div class="" id="" aria-multiselectable="">
								<div class="panel panel-default">
									<div>
										<div class="panel-heading">
											<ul>
											@foreach($dsLoai as $l)
											<li class="panel-title"><a href="#">{{ $l->l_ten }}</a></li>
											@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sidebar-box-2">
						<h2 class="heading">Price Range</h2>
						<form method="post" class="colorlib-form-2">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="guests">Price from:</label>
										<div class="form-field">
											<i class="icon icon-arrow-down3"></i>
											<select name="people" id="people" class="form-control">
												<option value="#">1</option>
												<option value="#">200</option>
												<option value="#">300</option>
												<option value="#">400</option>
												<option value="#">1000</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="guests">Price to:</label>
										<div class="form-field">
											<i class="icon icon-arrow-down3"></i>
											<select name="people" id="people" class="form-control">
												<option value="#">2000</option>
												<option value="#">4000</option>
												<option value="#">6000</option>
												<option value="#">8000</option>
												<option value="#">10000</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection