@extends('layouts.master')

@section('content')
<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container">
                    <div class="col-md-3 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png">
                    </div>
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">Add images, or even your logo!</h3>
                        <h4 data-animation="animated bounceInUp">Easily use stunning effects</h4>             
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown"> 50 animation options A beautiful</h3>
                        <h4 data-animation="animated bounceInUp">Create beautiful slideshows </h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png">
                    </div>
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Simple Bootstrap Carousel</h3>
                        <h4 data-animation="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png">
                    </div>     
                </div></div>
            </div>
            <!-- Item 4 -->
            <div class="item slide4">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">We are creative</h3>
                        <h4 data-animation="animated bounceInUp">Get start your next awesome project</h4>
                     </div>
                    <div class="col-md-5 text-right">
                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png">
                    </div>  
                </div></div>
            </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="about-section section-div" id="about-section">
        <h1 class="section-title wow fadeInUp"><span>About Us</span></h1>

        <div class="row about-header">
            <div class="col-md-12 col-sm-12">
                <h1>About Us</h1>
                <h2>Life is either a great adventure or nothing</h2>
                <button type="button" class="btn btn-danger">JOIN US TODAY</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="portlet light">
                    <div class="card-icon">
                        <i class="icon-user-follow font-red-sunglo theme-font"></i>
                    </div>
                    <div class="card-title">
                        <h2> Best User Expierence </h2>
                    </div>
                    <div class="card-desc">
                        <span> The best way to find yourself is
                            <br> to lose yourself in the service of others </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="portlet light">
                    <div class="card-icon">
                        <i class="icon-trophy font-green-haze theme-font"></i>
                    </div>
                    <div class="card-title">
                        <h2> Awards Winner </h2>
                    </div>
                    <div class="card-desc">
                        <span> The best way to find yourself is
                            <br> to lose yourself in the service of others </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="portlet light">
                    <div class="card-icon">
                        <i class="icon-basket font-purple-wisteria theme-font"></i>
                    </div>
                    <div class="card-title">
                        <h2> Join For Free </h2>
                    </div>
                    <div class="card-desc">
                        <span> The best way to find yourself is
                            <br> to lose yourself in the service of others </span>
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div class="training-section section-div" id="training-section">
        <h1 class="section-title wow fadeInUp">Training</h1>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/devops.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Devops</h2>
            <p>Devops is the new automation concept.</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('devops') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/webdev.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Web development</h2>
            <p>Develop and deploy web applications in real time.</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('web_dev') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/tableau.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Tableau</h2>
            <p>Data analytics with tableau and R.</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('tab') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/mulesoft.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Mulesoft</h2>
            <p>Not just an api more than.</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" href="<?= url('mulesoft') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/bitcoin.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Networking</h2>
            <p>Learn the advance networking tools.</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('web_net') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="{{ asset('img/bitcoin.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Cryptocurrency</h2>
            <p>Learn how to mine bitcoins, other coins and trading digital currency. Start making minimum 100$ each day</p>
            <p><a class="btn red-mint btn-outline sbold uppercase btn-sm" target="_blank" href="<?= url('bit') ?>" role="button">View details »</a></p>
          </div><!-- /.col-lg-4 -->
        </div>
      </div><!-- /.row -->

      <div class="plan-section section-div" id="plans-section">
        <h1 class="section-title wow fadeInUp">Plans</h1>
        <div class="row">
          <div class='package bg-grey-gallery bg-font-grey-gallery col-lg-4'>
            <button type="button" class="btn btn-warning btn-lg">Free</button>  
            <hr>
            <ul>
                <li>Free recorded training classes</li>
                <li>Free marketing</li>
                <li>No Job Guarantee</li>
                <li>No H1B until in project</li>
            </ul>
          </div>

          <div class='package bg-grey-gallery bg-font-grey-gallery col-lg-4'>
            <button type="button" class="btn btn-success btn-lg">Gold</button> 
            <hr>
            <ul>
                <li>Live training classes</li>
                <li>Free marketing</li>
                <li>Job Guarantee or Refund **</li>
                <li>Mock Interviews </li>
                <li>No H1B until in project</li>
            </ul>
          </div>

          <div class='package bg-grey-gallery bg-font-grey-gallery col-lg-4'>
            <button type="button" class="btn btn-danger btn-lg">Platinum</button> 
            <hr>
            <ul>
                <li>Live training classes</li>
                <li>Free marketing</li>
                <li>Mock Interviews </li>
                <li>Job Guarantee or Refund **</li>                        
                <li>H1B with internal project**</li>
            </ul>
          </div>

        </div>
      </div>


      <!-- START THE FEATURETTES -->

      <!-- <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzUwMHg1MDAvYXV0bwpDcmVhdGVkIHdpdGggSG9sZGVyLmpzIDIuNi4wLgpMZWFybiBtb3JlIGF0IGh0dHA6Ly9ob2xkZXJqcy5jb20KKGMpIDIwMTItMjAxNSBJdmFuIE1hbG9waW5za3kgLSBodHRwOi8vaW1za3kuY28KLS0+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj48IVtDREFUQVsjaG9sZGVyXzE2MGEyZjIwNzE4IHRleHQgeyBmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjVwdCB9IF1dPjwvc3R5bGU+PC9kZWZzPjxnIGlkPSJob2xkZXJfMTYwYTJmMjA3MTgiPjxyZWN0IHdpZHRoPSI1MDAiIGhlaWdodD0iNTAwIiBmaWxsPSIjRUVFRUVFIi8+PGc+PHRleHQgeD0iMTg1LjEyNSIgeT0iMjYxLjEiPjUwMHg1MDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
        </div>
      </div> -->


      <!-- <hr class="featurette-divider"> -->

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <!-- <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2016 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
 -->
    <div class="contact-section section-div" id="contact-section">
      <div class="row">
          <h1 class="section-title wow fadeInUp">Contact Us</h1>
          <div class="col-md-7">
              <div class="c-contact">
                  <div class="c-content-title-1">
                      <div class="c-line-left bg-dark"></div>
                      <p class="c-font-lowercase">Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.</p>
                  </div>
                  <form action="#">
                      <div class="form-group">
                          <input type="text" placeholder="Your Name" class="form-control input-md"> </div>
                      <div class="form-group">
                          <input type="text" placeholder="Your Email" class="form-control input-md"> </div>
                      <div class="form-group">
                          <input type="text" placeholder="Contact Phone" class="form-control input-md"> </div>
                      <div class="form-group">
                          <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control input-md"></textarea>
                      </div>
                      <button type="submit" class="btn red-mint btn-outline sbold uppercase btn-lg">Submit</button>
                  </form>
              </div>
          </div>
          <div class="col-md-5">
            <div class="c-content-contact-1 c-opt-1">
              <div class="row" data-auto-height=".c-height">
                  <div class="col-lg-12 col-md-12">
                      <div class="c-body">
                          <div class="c-section">
                              <h3>Contact Details</h3>
                          </div>
                          <div class="c-section">
                              <div class="c-content-label uppercase bg-red-mint">Address</div>
                              <p>25, Lorem Lis Street,
                                  <br>Orange C, California,
                                  <br>United States of America</p>
                          </div>
                          <div class="c-section">
                              <div class="c-content-label uppercase bg-red-mint">Contacts</div>
                              <p>
                                  <strong>T</strong> 800 123 0000
                                  <br>
                                  <strong>F</strong> 800 123 8888</p>
                          </div>
                          <div class="c-section">
                              <div class="c-content-label uppercase bg-red-mint">Social</div>
                              <br>
                              <ul class="c-content-iconlist-1 ">
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-twitter"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-facebook"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-youtube-play"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fa fa-linkedin"></i>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="gmapbg" class="c-content-contact-1-gmap" style="height: 615px;"></div>
            </div>
          </div>
      </div>
    </div>


@endsection
@section('page-scripts')

@endsection