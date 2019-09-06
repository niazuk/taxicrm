<footer id="contacts"
class="section-relative section-50 section-sm-top-34 section-sm-bottom-34 page-footer bg-green-base context-dark novi-background bg-cover">
<div class="shell">
  <div class="range range-sm-center text-lg-left range-fix">
    <div class="cell-sm-8 cell-md-12">
      <div class="range range-xs-center range-lg-justify range-fix">
         <div class="cell-xs-12 cell-md-4 cell-lg-4 text-md-left cell-md-push-3"><h6
              class="text-uppercase text-spacing-60 text-bold">Newsletter</h6>
              <p style="font-size: 15px">Keep up with our always upcoming product features and technologies. Enter your
                e-mail and subscribe to our newsletter.</p>
              <div class="offset-top-30">
                <h1 id='message' style="display: none;
               box-shadow: 1px 2px 5px;
               background-color: #589;
               ">Message Sent</h1>
                <form id='newsletter_form' data-form-output="form-output-global" data-form-type="contact" method="post"
               action="api/newsletter" class="rd-mailform">
               {{csrf_field()}}
                  <div class="form-group">
                    <div class="input-group input-group-sm"><span class="input-group-addon"><span
                      class="input-group-icon mdi mdi-email novi-icon"></span></span><input
                      placeholder="Enter your E-Mail" type="email" name="email" data-constraints="@Required @Email"
                      class="form-control"><span class="input-group-btn"><button type="submit"
                                                                                 class="btn btn-sm btn-primary">Subscribe</button></span>
                    </div>
                  </div>
                  <div id="form-subscribe-footer" class="form-output"></div>
                </form>
              </div>
            </div>
      <div class="cell-xs-7 text-xs-left cell-md-4 cell-lg-4 cell-md-push-2 offset-md-top-0 offset-top-40">
        <div class="widget-post-wrap">
          <article class="post widget-post text-left text-primary"><a href="#">
            <div class="unit unit-horizontal unit-spacing-xs unit-middle">
              <div class="unit-body">
                <h6 class="text-uppercase text-spacing-60 text-bold">Address</h6>
                <!--div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                  <time datetime="2016-01-01" class="text-darker"></time>
                </div-->
                <div class="post-title"><h6 class="text-regular" style="font-size: 15px"> {{config('data.meta.address')}}</h6></div>
              </div>
            </div>
          </a></article>
          <article class="post widget-post text-left text-primary"><a href="#">
            <div class="unit unit-horizontal unit-spacing-xs unit-middle">
              <div class="unit-body">
                <!--div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                  <time datetime="2016-01-01" class="text-darker">05/14/2019</time>
                </div-->
                <div class="post-title"><h6 class="text-regular" style="font-size: 15px">Tel: {{config('data.meta.tel')}}</h6></div>
               
              </div>
            </div>
          </a></article>
          <article class="post widget-post text-left text-primary"><a href="#">
            <div class="unit unit-horizontal unit-spacing-xs unit-middle">
              <div class="unit-body">
                <!--div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                  <time datetime="2016-01-01" class="text-darker">05/14/2019</time>
                </div-->
                
                <div class="post-title"><h6 class="text-regular" style="font-size: 15px">Email: {{config('data.meta.email')}}</h6><br></div>
              </div>
            </div>
          </a></article>
        </div>
      </div>
      <div class="cell-xs-12 offset-top-60 cell-md-4 cell-lg-3 cell-md-push-1 offset-md-top-0">
        <div class="footer-brand"><a href="/"><img src="{{asset('storage/images/logo.png')}}" width="85%"
          alt="transportcrm logo" style="margin-top: -10px"
          class="img-responsive reveal-inline-block"></a></div>
          <div class="offset-top-30">
            <ul class="list-inline font-0">
              <li><a href="#"
               class="icon novi-icon fa fa-facebook icon-xxs icon-circle icon-gray-darkest-filled"></a></li>
               <li><a href="#"
                 class="icon novi-icon fa fa-twitter icon-xxs icon-circle icon-gray-darkest-filled"></a></li>
                 <li><a href="#"
                   class="icon novi-icon fa fa-google-plus icon-xxs icon-circle icon-gray-darkest-filled"></a>
                 </li>
                 <li><a href="#"
                   class="icon novi-icon fa fa-linkedin icon-xxs icon-circle icon-gray-darkest-filled"></a></li>
                 </ul>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="shell offset-top-35"><p class="small text-darker">Transport CRM © <span class="copyright-year"></span> .</p></div>
    </footer>