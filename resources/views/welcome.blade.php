<!DOCTYPE html>
@extends('layouts.app')

<body id="body">
@section('content')
<br/>
<br/> 
<br/>
<br/> 
<div class="container">
	<div class="banner_content text-center">
	    <h6>Welcome to</h6>
		<h2>Paradise with a view</h2>
		<p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as $.17 each.</p>
		<a href="#accomodation" class="btn theme_btn button_hover">Get Started</a>
	</div>
</div>


<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
</body>
</html>