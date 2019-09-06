<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
@include('includes.header')
<body>
	<div class="page text-center">
		<section>
			@include('includes.navbar')
			@include('includes.video_block01')
		</section>
		@include('includes.contact')
		@include('includes.footer')

	</div>
	<div id="form-output-global" class="snackbars"></div>
	<script src="{{asset('storage/js/core.min.js')}}"></script>
	<script src="{{asset('storage/js/script.js')}}"></script>
	<!--coded by gel-->
</body>
</html>