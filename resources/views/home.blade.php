<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
@include('includes.header')
<body>
  <div class="page text-center">
    <section>
      @include('includes.navbar')
      @include('includes.home_block01')
    </section>
    @include('includes.features_block01')
  <!--section class="bg-gray-lighter section-50 novi-background bg-cover">
    <div class="shell">
      <div class="range range-30">
        <div class="cell-sm-6 cell-md-4 cell-lg-2"><img src="{{asset('storage/images/client-01-144x63.png')}}" width="144" height="63" alt=""
                                                        class="img-responsive reveal-inline-block"></div>
        <div class="cell-sm-6 cell-md-4 cell-lg-2"><img src="{{asset('storage/images/client-02-144x63.png')}}" width="144" height="63" alt=""
                                                        class="img-responsive reveal-inline-block"></div>
        <div class="cell-sm-6 cell-md-4 cell-lg-2"><img src="{{asset('storage/images/client-03-144x63.png')}}" width="144" height="63" alt=""
                                                        class="img-responsive reveal-inline-block"></div>
        <div class="cell-sm-6 cell-md-4 cell-lg-2"><img src="{{asset('storage/images/client-04-144x63.png')}}" width="144" height="63" alt=""
                                                        class="img-responsive reveal-inline-block"></div>
        <div class="cell-sm-6 cell-md-4 cell-lg-2"><img src="{{asset('storage/images/client-05-144x63.png')}}" width="144" height="63" alt=""
                                                        class="img-responsive reveal-inline-block"></div>
        <div class="cell-sm-6 cell-md-4 cell-lg-2"><img src="{{asset('storage/images/client-06-144x63.png')}}" width="144" height="63" alt=""
                                                        class="img-responsive reveal-inline-block"></div>
      </div>
    </div>
  </section-->
  @include('includes.features_block02')
  @include('includes.features_block011')
  @include('includes.features_block03')
  @include('includes.features_block04')
  @include('includes.about')
  @include('includes.prices')
  @include('includes.contact')
  @include('includes.footer')

  </div>
  <div id="form-output-global" class="snackbars"></div>
  <script src="{{asset('storage/js/core.min.js')}}"></script>
  <script src="{{asset('storage/js/script.js')}}"></script>
  <!--coded by gel-->
</body>
</html>