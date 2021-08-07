@extends('main')
@section('insertdata')
<form method="POST" action="/insertdata/post" class="container-fluid">
			@csrf
			<input type="hidden" name="username" value="{{Session::get('username')}}">
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12">
							<label>Input Hanzi</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
						<input type="text" name="hanzi" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12">
							<label>Input Pinyin</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
						<input type="text" name="pinyin" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12">
							<label>Input Arti</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
						<input type="text" name="arti" class="form-control">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<button type="submit" class="form-control my-3" style="background-color: #28df99; color: white;">submit</button>
				</div>
			</div>
		</form>
@endsection