<?php include 'header-assets.php'; ?>
<body>
<!---------------------------------------- topbar -------------------------->

<?php include 'header.php'; ?>
<!------------------ end ------------------> 

<!---------------------------------------- banner-------------------------->

<div class="banner">
  <div class="container-fluid">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100" src="assets/image/banner.jpg" alt="First slide"> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="assets/image/banner.jpg" alt="Second slide"> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="assets/image/banner.jpg" alt="Third slide"> </div>
        </div>
        <div class="banner-signup">
          <div class="banner-bg">
            <h2>Create an account</h2>
            <div class="b-radio">
              <form action="">
                <label>
                <div class="col">
                  <input type="radio" name="gender" value="Donors" style="margin-right: 6px;">
                  Donors</div>
                </label>
                <label>
                <div class="col">
                  <input type="radio" name="gender" value="Doctors" style="margin-right: 6px;">
                  Doctors</div>
                </label>
              </form>
            </div>
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress" placeholder="Full Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Email Address">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Phone Number">
                </div>
                <div class="form-group col-md-6">
                  <select id="inputState" class="form-control">
                    <option selected>Blood Group</option>
                    <option>A+</option>
                    <option>AB+</option>
                    <option>B+</option>
                    <option>O+</option>
                    <option>A-</option>
                    <option>AB-</option>
                    <option>B-</option>
                    <option>O-</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Retype-Password">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success">Sign Up</button>
              </div>
              <br>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <button type="submit" class="btn btn-primary btn-block"><i class="fab fa-facebook-f" style="margin-right: 5px;"></i> Facebook login</button>
                </div>
                <div class="form-group col-md-6">
                  <button type="submit" class="btn btn-danger btn-block"><i class="fab fa-google-plus-g" style="margin-right: 5px;"></i> Google+ login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    </div>
  </div>
</div>

<!---------------------------------------- About us-------------------------->

<div class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="heading">
          <h2>Who We Are?</h2>
        </div>
        <div class="heading-line"></div>
        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <ul>
          <li><i class="far fa-circle" style="color:#EF3D32; margin-right: 5px;"></i> Specialist blood donors and clinical supervision.</li>
          <li><i class="far fa-circle" style="color:#EF3D32; margin-right: 5px;"></i> Increasing communication with our members.</li>
          <li><i class="far fa-circle" style="color:#EF3D32; margin-right: 5px;"></i> High quality assessment, diagnosis and treatment.</li>
          <li><i class="far fa-circle" style="color:#EF3D32; margin-right: 5px;"></i> Examine critically to ensure alignment.</li>
          <li><i class="far fa-circle" style="color:#EF3D32; margin-right: 5px;"></i> The extra care of a multi-disciplinary team.</li>
        </ul>
      </div>
      <div class="col-md-6">
        <div class="battery"><img src="assets/image/about-donor.jpg"></div>
      </div>
    </div>
  </div>
</div>

<!---------------------------------------- Countdown -------------------------->

<div class="countdown">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="heading">
          <h2>Find Donors by Group</h2>
        </div>
        <div class="heading-line"></div>
        <div class="row">
          <div class="col-md-6 col-6">
            <div class="coun-grup-blood"><samp>A+</samp>3256</div>
          </div>
          <div class="col-md-6 col-6">
            <div class="coun-grup-blood"><samp>AB+</samp>3256</div>
          </div>
          <div class="col-md-6 col-6">
            <div class="coun-grup-blood"><samp>B+</samp>3256</div>
          </div>
          <div class="col-md-6 col-6">
            <div class="coun-grup-blood"><samp>O+</samp>3256</div>
          </div>
          <div class="col-md-6 col-6">
            <div class="coun-grup-blood"><samp>A-</samp>3256</div>
          </div>
          <div class="col-md-6 col-6">
            <div class="coun-grup-blood"><samp>AB-</samp>3256</div>
          </div>
          <div class="col-md-6 col-6">
            <div class="coun-grup-blood"><samp>B-</samp>3256</div>
          </div>
          <div class="col-md-6 col-6">
            <div class="coun-grup-blood"><samp>O-</samp>3256</div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="heading">
          <h2>Find Donors by Group</h2>
        </div>
        <div class="heading-line"></div>
        <div class="row">
          <div class="col-md-6 col-6">
            <div class="countdown-bg">
              <div class="cou-bg-img"><i class="fas fa-mobile-alt icon"></i></div>
              <div class="cou-bg-count">2646</div>
              <div class="cou-bg-text">Apps Installed</div>
            </div>
          </div>
          <div class="col-md-6 col-6">
            <div class="countdown-bg">
              <div class="cou-bg-img"><i class="fas fa-users icon"></i></div>
              <div class="cou-bg-count">658</div>
              <div class="cou-bg-text">Registered Member</div>
            </div>
          </div>
          <div class="col-md-6 col-6">
            <div class="countdown-bg">
              <div class="cou-bg-img"><i class="far fa-check-square icon"></i></div>
              <div class="cou-bg-count">3366</div>
              <div class="cou-bg-text">Successfully  Donated</div>
            </div>
          </div>
          <div class="col-md-6 col-6">
            <div class="countdown-bg">
              <div class="cou-bg-img"><i class="fas fa-stethoscope icon"></i></div>
              <div class="cou-bg-count">858</div>
              <div class="cou-bg-text">Registered  Doctor</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!----------------------------------------News & events-------------------------->

<div class="news">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="heading">
          <h2>News & Events</h2>
        </div>
        <div class="heading-line"></div>
        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <div class="news-button"> <a href="#" type="button" class="btn btn-successess btn-lg">All New & Events</a> </div>
      </div>
      <div class="col-md-7">
        <div class="newsEvents owl-carousel owl-theme">
          <div class="item">
            <div class="news-bg">
              <div class="row">
                <div class="col-md-5"><img src="assets/image/news.jpg"></div>
                <div class="col-md-7">
                  <div class="events">
                    <div class="event-calender"><i class="far fa-calendar-alt" style="margin-right: 10px; color: #EF3D32; margin-bottom: 20px;"></i> 11 Martch, 2019</div>
                    <div class="event-head">
                      <h3>News & Events</h3>
                    </div>
                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                    <div class="event-time"> <a href="#"><i class="far fa-clock" style="margin-right: 10px; color: #EF3D32;"></i> 10.00 - 3.00</a> <a href="#"> <i class="fas fa-map-marker-alt" style="margin-right: 10px; color: #EF3D32; margin-left: 20px;"></i> California, USA</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="news-bg">
              <div class="row">
                <div class="col-md-5"><img src="assets/image/news.jpg"></div>
                <div class="col-md-7">
                  <div class="events">
                    <div class="event-calender"><i class="far fa-calendar-alt" style="margin-right: 10px; color: #EF3D32; margin-bottom: 20px;"></i> 11 Martch, 2019</div>
                    <div class="event-head">
                      <h3>News & Events</h3>
                    </div>
                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                    <div class="event-time"> <a href="#"><i class="far fa-clock" style="margin-right: 10px; color: #EF3D32;"></i> 10.00 - 3.00</a> <a href="#"> <i class="fas fa-map-marker-alt" style="margin-right: 10px; color: #EF3D32; margin-left: 20px;"></i> California, USA</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="news-bg">
              <div class="row">
                <div class="col-md-5"><img src="assets/image/news.jpg"></div>
                <div class="col-md-7">
                  <div class="events">
                    <div class="event-calender"><i class="far fa-calendar-alt" style="margin-right: 10px; color: #EF3D32; margin-bottom: 20px;"></i> 11 Martch, 2019</div>
                    <div class="event-head">
                      <h3>News & Events</h3>
                    </div>
                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                    <div class="event-time"> <a href="#"><i class="far fa-clock" style="margin-right: 10px; color: #EF3D32;"></i> 10.00 - 3.00</a> <a href="#"> <i class="fas fa-map-marker-alt" style="margin-right: 10px; color: #EF3D32; margin-left: 20px;"></i> California, USA</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!---------------------------------------- Recent Dortoc -------------------------->

<div class="recent-doctor">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-2">
          <h2>recent donors</h2>
        </div>
        <div class="heading-line-2"></div>
        <div class="row">
          <div class="col-md-3 col-6"> <a href="#">
            <div class="recent-doctor-bg">
              <div class="recent-doctor-img">
                <div class="recent-border">B+</div>
                <img src="assets/image/register-01.png"></div>
              <div class="recent-doctor-sm">DANIEL MILLER</div>
              <div class="recent-doctor-text">Founder</div>
              <div class="recent-doctor-text-to">Dhaka, Bangladesh</div>
            </div>
            </a> </div>
          <div class="col-md-3 col-6"> <a href="#">
            <div class="recent-doctor-bg">
              <div class="recent-doctor-img">
                <div class="recent-border">B+</div>
                <img src="assets/image/register-01.png"></div>
              <div class="recent-doctor-sm">DANIEL MILLER</div>
              <div class="recent-doctor-text">Founder</div>
              <div class="recent-doctor-text-to">Dhaka, Bangladesh</div>
            </div>
            </a> </div>
          <div class="col-md-3 col-6"> <a href="#">
            <div class="recent-doctor-bg">
              <div class="recent-doctor-img">
                <div class="recent-border">B+</div>
                <img src="assets/image/register-01.png"></div>
              <div class="recent-doctor-sm">DANIEL MILLER</div>
              <div class="recent-doctor-text">Founder</div>
              <div class="recent-doctor-text-to">Dhaka, Bangladesh</div>
            </div>
            </a> </div>
          <div class="col-md-3 col-6"> <a href="#">
            <div class="recent-doctor-bg">
              <div class="recent-doctor-img">
                <div class="recent-border">B+</div>
                <img src="assets/image/register-01.png"></div>
              <div class="recent-doctor-sm">DANIEL MILLER</div>
              <div class="recent-doctor-text">Founder</div>
              <div class="recent-doctor-text-to">Dhaka, Bangladesh</div>
            </div>
            </a> </div>
        </div>
      </div>
    </div>
    <div class="news-button"> <a href="#" type="button" class="btn btn-successess btn-lg">All Donors</a> </div>
  </div>
</div>

<!---------------------------------------- Testimonials-------------------------->

<div class="testimonial" style="background:url(assets/image/parallax-imge.png);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading">
          <h2>JOIN WITH US AND SAVE LIFE</h2>
        </div>
        <div class="heading-line"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="test-bg">
          <div class="row">
            <div class="col-md-6">
              <div class="testti owl-carousel owl-theme">
                <div class="item">
                  <div class="tes-bg">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="test-slider-bg">
                          <div class="event-head">
                            <h3>donor feedback</h3>
                          </div>
                          <div class="test-text">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley</div>
                          <div class="test-profile"><img src="assets/image/register-01.png"></div>
                          <div class="test-desig">
                            <h6>Munson Brandon</h6>
                            CTO, Fulcrum Design, USA</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="tes-bg">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="test-slider-bg">
                          <div class="event-head">
                            <h3>donor feedback</h3>
                          </div>
                          <div class="test-text">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley</div>
                          <div class="test-profile"><img src="assets/image/register-01.png"></div>
                          <div class="test-desig">
                            <h6>Munson Brandon</h6>
                            CTO, Fulcrum Design, USA</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="tes-bg">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="test-slider-bg">
                          <div class="event-head">
                            <h3>donor feedback</h3>
                          </div>
                          <div class="test-text">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley</div>
                          <div class="test-profile"><img src="assets/image/register-01.png"></div>
                          <div class="test-desig">
                            <h6>Munson Brandon</h6>
                            CTO, Fulcrum Design, USA</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="test-img"><img class="img-responsive" src="assets/image/testimonial.jpg"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!---------------------------------------- donation Process-------------------------->

<div class="donation-process">
  <div class="container">
  <div class="row">
            <div class="col-md-12">
              <div class="donor owl-carousel owl-theme">
                <div class="item">
                   <div class="row">
      <div class="col-md-12">
        <div class="heading-2">
          <h2>donation Process</h2>
        </div>
        <div class="heading-line-2"></div>
      </div>
    </div>
    <div class="row">
      <div class="process"><img class="img-responsive" src="assets/image/process.jpg"></div>
    </div>
                </div>
                <div class="item">
                   <div class="row">
      <div class="col-md-12">
        <div class="heading-2">
          <h2>Doctor Search Process</h2>
        </div>
        <div class="heading-line-2"></div>
      </div>
    </div>
    <div class="row">
      <div class="process"><img class="img-responsive" src="assets/image/process-2.jpg"></div>
    </div>
                </div>
                
                
              </div>
            </div>
            
          </div>
  
  
  
    
    
  </div>
</div>

<!---------------------------------------- Gallery-------------------------->

<div class="gallery">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-2">
          <h2>photo & Video Gallery</h2>
        </div>
        <div class="heading-line-2"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-6 col-lg-4 thumb"> <a class="thumbnail" href="#" class="image" data-image-id="" data-toggle="modal" data-title=""
                   data-image="assets/image/photo-03.jpg"
                   data-target="#image-gallery"> <img class="img-thumbnail"
                         src="assets/image/photo-03.jpg"
                         alt="Another alt text"></a> </div>


                         <div class="col-md-4 col-6 col-lg-4 thumb"> <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="assets/image/photo-01.jpg"
                   data-target="#image-gallery"> <img class="img-thumbnail"
                         src="assets/image/photo-01.jpg"
                         alt="Another alt text"> </a> </div>
                         <div class="col-md-4 col-6 col-lg-4 thumb"> <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="assets/image/photo-02.jpg"
                   data-target="#image-gallery"> <img class="img-thumbnail"
                         src="assets/image/photo-02.jpg"
                         alt="Another alt text"> </a> </div>
                         <div class="col-md-4 col-6 col-lg-4 thumb"> <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="assets/image/photo-01.jpg"
                   data-target="#image-gallery"> <img class="img-thumbnail"
                         src="assets/image/photo-01.jpg"
                         alt="Another alt text"> </a> </div>
                         <div class="col-md-4 col-6 col-lg-4 thumb"> <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="assets/image/photo-02.jpg"
                   data-target="#image-gallery"> <img class="img-thumbnail"
                         src="assets/image/photo-02.jpg"
                         alt="Another alt text"> </a> </div>
                         <div class="col-md-4 col-6 col-lg-4 thumb"> <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="assets/image/photo-03.jpg"
                   data-target="#image-gallery"> <img class="img-thumbnail"
                         src="assets/image/photo-03.jpg"
                         alt="Another alt text"> </a> </div>
    </div>
    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="image-gallery-title"></h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span> </button>
          </div>
          <div class="modal-body"> <img id="image-gallery-image" class="img-responsive col-md-12" src=""> </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i> </button>
            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i> </button>
          </div>
        </div>
      </div>
    </div>
     <div class="news-button"> <a href="#" type="button" class="btn btn-successess btn-lg">All Photo & Video</a> </div>
  </div>
</div>

<!---------------------------------------- services--------------------------> 

<!----------------------------------------testimonial --------------------------> 

<!---------------------------------------- footer -------------------------->
<?php include 'footer.php'; ?>
