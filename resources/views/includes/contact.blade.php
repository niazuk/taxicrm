<section id="contact" data-type="anchor" class="context-dark bg-gray-base">
  <div style="background: rgba(67,67,69, 0.9);
    overflow: hidden;
    z-index: 1;
    display: block;
    width: 100%;
    position: absolute;
    height: 100%;"></div>
    <div data-parallax-img="{{asset('storage/images/bg-03-1920x546.jpg')}}" class="section parallax-container">
      <div class="parallax-content section-90 section-md-110">
        <div class="shell">
          <div class="range range-xs-center range-fix">
            <div class="cell-sm-8 cell-md-6"><!--h2>About Us</h2>
              <p>Rest assured you are not just dealing with a normal Software provider, our company has a combined Transport Industry Experience of over 50 years. We were once a Transport Operator ourselves, we built up a successful and profitable Transport Business within two years, this is how Transport CRM was born, we conducted our Market Research and with the help our in-house Software Developers we built our Software from scratch. We have rigorously tested it, tweaked it, and then added more and more features. </p>

              <p>Our Software is proven to help increase your number of Customers, Maximise your Efficiency and therefore save your business precious time and money. We know this, because that's exactly what it's done for us.
              </p>
              <div class="offset-top-40">
               <h1 id='message' style="display: none;
               box-shadow: 1px 2px 5px;
               background-color: #589;
               ">Message Sent</h1>
               <form id='newsletter_form' data-form-output="form-output-global" data-form-type="contact" method="post"
               action="api/newsletter" class="rd-mailform">
               {{csrf_field()}}
               <div class="range range-narrow range-fix">
                <div class="cell-xs-7 cell-sm-8">
                  <div class="form-group"><label for="contact-email" class="form-label">Enter Your Email
                  Here</label><input id="contact-email" type="email" name="email"
                  data-constraints="@Required @Email" class="form-control"></div>
                </div>
                <div class="cell-xs-5 cell-sm-4 offset-top-15 offset-xs-top-0">
                  <button type="submit" class="btn btn-primary">Subscribe now</button>
                </div>
                
              </div>
            </form>
          </div-->
          @include('includes.form_contact')
        </div>
      </div>
    </div>
  </div>
</div>
</section>