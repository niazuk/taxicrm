<section id="about" data-type="anchor" class="context-dark bg-gray-base">
    <div data-parallax-img="{{asset('storage/images/about_us.jpg')}}" class="section parallax-container">
      <div class="parallax-content section-90 section-md-110">
        <div class="shell">
          <div class="range range-xs-center range-fix">
            <div class="cell-sm-8 cell-md-6"><h2>About Us</h2>
              <p>Rest assured you are not just dealing with a normal software provider, our company has a combined transport industry experience of over 50 years. We were once a transport operators ourselves, we built up a successful and profitable transport business within two years, this is how Transport CRM was born, we conducted our market research and with the help our in-house software developers we built our software from scratch. We have rigorously tested it, tweaked it, and then added more and more features. </p>

              <p>Our software is proven to help increase your number of customers, maximise your efficiency and therefore save your business precious time and money. We know this, because that's exactly what it's done for us.
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>