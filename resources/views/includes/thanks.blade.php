<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
@include('includes.header')
<body>
  <div class="page">
    <section>
      @include('includes.navbar')        
      <div class="jumbotron">
       <div class="container">
         <div class="col-md-6 col-md-offset-3">
          <p><br><br></p>
          <h2><br>Thank you for contacting us. We will get back to you within 24 hours.</h2>
        </div>
      </div>
    </div>
  </section>
  @include('includes.footer')
</div>
<div id="form-output-global" class="snackbars"></div>
<script src="{{asset('storage/js/core.min.js')}}"></script>
<script src="{{asset('storage/js/script.js')}}"></script>
<!--coded by gel-->
</body>
</html>