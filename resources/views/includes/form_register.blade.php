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
          <h2><br>Get in touch with us today!</h2>
        </div>
        <form action="formregister" method="post">
          {{csrf_field()}}
          <input type="hidden" name="form" value="register">
          <div class="col-md-6 col-md-offset-3">
            <h6><br>Fields marked with a <span style="color: red">*</span> are required <br><br></h6>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <label>Name:<span style="color: red">*</span></label>
            <input type="text" class="form-control" id="name" name="name">
            <br>
          </div>          
          <div class="col-md-6 col-md-offset-3">        
            <label>Email:<span style="color: red">*</span></label>
            <input type="email" class="form-control" id="email" name="email">
            <br>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <label>Mobile/Phone:<span style="color: red">*</span></label>
            <input type="number" class="form-control" id="phone" name="phone">
            <br>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <label>Company Name:</label>
            <input type="text" class="form-control" id="companyname" name="companyname">
            <br>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <label>Number of Drivers:</label>
            <input type="number" class="form-control" id="drivers" name="drivers">
          </div>
          <div class="col-md-6 col-md-offset-3">
            <label>Number of Vehicles:</label>
            <input type="number" class="form-control" id="vehicles" name="vehicles">
          </div>
          <div class="col-md-6 col-md-offset-3">
            <label>Message:</label>
            <textarea class="form-control" name="message"></textarea><br>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>          
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