<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>@yield('title')</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<meta name="csrf-token" content="{{csrf_token()}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
    @yield('styles')
</head>
<body data-instant-intensity="mousedown">
{{-- include header --}}
@include('includes.header')
{{-- content --}}
@if(Session::has('success'))
        <div class="alert alert-success">
            <p class="mb-0 pb-0">{{session('success')}}</p>
        </div>
        @endif
@yield('content')
{{-- end-content --}}
@include('includes.footer')
 {{--include footer  --}}
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.5.1.3.min.js')}}"></script>
<script src="{{asset('assets/js/instantpages.5.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/lazyload.17.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>
	$.ajaxSetup({
		headers:{
			'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
		}
	})
</script>
@yield('script')
</body>
</html>