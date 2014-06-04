{{-- Call the layout --}}
@extend('../layout')

{{-- Create the page--}}
@section('content')
<h2>Trades</h2>
<section class="row">
	<section class="col-md-4">
		<h3><i class="fa fa-bell"></i> New</h3>
	</section>
	<section class="col-md-4">
		<h3><i class="fa fa-heart"></i> Popular</h3>
	</section>
	<section class="col-md-4">
		<h3><i class="fa fa-clock-o"></i> Ending</h3>
	</section>
</section>

<hr/>
<h2>Traders</h2>
<section class="row">
	<section class="col-md-6">
		<h3><i class="fa fa-bell"></i> New</h3>
	</section>
	<section class="col-md-6">
		<h3><i class="fa fa-heart"></i> Popular</h3>
	</section>
</section>
@stop