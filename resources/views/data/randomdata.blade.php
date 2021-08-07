@foreach($randomdata as $d)
<div class="text-center">
	<div class="row my-2">
	<div class="col-lg-12">
		<h1>{{$d->hanzi}}</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h3>{{$d->pinyin}}</h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h3 class="text-primary">{{$d->arti}}</h3>
	</div>
</div>
</div>
@endforeach