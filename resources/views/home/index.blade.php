@extends('main')
@section('home')
<div class="container-fluid my-2">
	<div class="row">
		<div class=" col-lg-2 text-center my-4">
			<a href="/insertdata">
				<div class="row">
					<div class="col-lg-12">
						<img src="/assets/image/literature.png" style="width: 50%;">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						Input
					</div>
				</div>
			</a>
		</div>
		<div class=" col-lg-2 text-center my-4">
			<a href="/data">
				<div class="row">
					<div class="col-lg-12">
						<img src="/assets/image/folder.png" style="width: 50%;">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						Data
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
@endsection