<?php
/*
Email
https://appdividend.com/2018/03/05/send-email-in-laravel-tutorial/   
https://divtable.com/table-styler/ 

Re-captcha
https://appdividend.com/2018/04/07/laravel-google-recaptcha-tutorial/
https://github.com/anhskohbo/no-captcha

*/
?>
<div class="cell-xs-12"><h2 class="text-spacing-60 text-bold">Contact Us</h2>
  <h2 id='contact_send' style="display: none;
  box-shadow: 1px 2px 3px;
  background-color: #589;
  ">Your Message Sent!</h2></div>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div><br />
  @endif
  <form id='contact_form' data-form-output="form-output-global" data-form-type="contact" method="post"
  action="contact" class="rd-mailform">
  {{csrf_field()}}
  <input type="hidden" name="form" value="contact">
  <div class="col-sm-12">
    <input type="text" class="form-control footer-form" placeholder="Enter Name" name="name">
  </div>
  <div class="col-sm-6">
    <input type="email" class="form-control footer-form" placeholder="Enter Email"  name="email">
  </div>
  <div class="col-sm-6">
    <input type="text" class="form-control footer-form" placeholder="Enter Phone" name="phone">
  </div>
  <div class="col-sm-12">
    <textarea class="form-control footer-form" name="message" placeholder="Enter Message"></textarea>
  </div>
  <div class="col-sm-12">
    
              {!! NoCaptcha::renderJs() !!}
              {!! NoCaptcha::display() !!}
  </div>
  <div class="text-left col-sm-12">
    <button type="submit" class="btn btn-primary">Send Message</button>
  </div>
</form>
</div>