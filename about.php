<!-- navbar -->
<?php
include "navbar.php";
?>

<!-- php of APPOINTMENT -->

<?php
if (($_SERVER['REQUEST_METHOD'] == "POST") && isset($_POST['submit'])) {
  if (empty($_POST['name']) || empty($_POST['type']) || empty($_POST['time']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    http_response_code(500);
    exit();
    // headers("Location: index.php");
  }
  $name = strip_tags(htmlspecialchars($_POST['name']));
  $email = strip_tags(htmlspecialchars($_POST['email']));
  $subject = strip_tags(htmlspecialchars($_POST['type']));
  $message = strip_tags(htmlspecialchars($_POST['time']));

  $headers = "From: glalita663@gmail.com";
  $headers .= "MIME-VERSION: Beauty_Care" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "Cc: glalita663@gmail.com";
  $body = "Hey $name " . "\r\n\r\n" . " This is to appointment mail that you have made from our Beauty Care Website for .\r\n" . " .$subject \r\n\r\n .at :$message \n\n \n\n Thank you for your paitence and time";
  //alert($email);

  if (mail($email, "Appointment Mail", $body, $headers)) {
    //   echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    //   <strong>Thank you!</strong> for making an appointment with us!
    //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    // </div>';
    header("Location: appointment.html");
    // header("Location: index.php");

    // RedirectWithMessage('We will contact you', "index.php");
  } else {
    echo $email . $headers;
    echo "fail";
    // alert("email sending failed please check your email id");
    http_response_code(500);
  }
}
?>
<!-- main section -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/intro.css">
    <title>Beauty | About</title>
</head>
<body> 
    <!-- 2ns section page of Home of About us-->
     
    <section class="hero-wrap hero-wrap-2 about_page_head"  style="background-image:url(https://preview.colorlib.com/theme/kayelux/images/xbg_2.jpg.pagespeed.ic.k2FHEGn_FG.webp); height: 739px;">
        <div  style="background-color: rgba(243, 213, 213, 0.397); height: 100vh;"> 
<div class="container">
<div class="row no-gutters slider-text align-items-end">
<div class="col-md-9 mt-5">
<p class="breadcrumbs mt-123"><span class="me-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
<h1 class="mb-5 bread">About Us</h1>
</div>
</div>
</div>
</div>
</section>

<!-- 2ns section page of  About Beauty -->
 
<section class="about">
    <div class="container-fluid">
      <h1 class="text-center py-5">About Beauty</h1>
      <div class="row">
        <div class="col-md-6 px-5" data-aos="fade-right" data-aos-duration="3000">
          <img src="http://st.depositphotos.com/1031062/2490/i/450/depositphotos_24906151-Pink-spa.jpg" alt=""
            srcset=" " class="img-fluid ">
        </div>
        <div class="col-md-6" class="content" data-aos="fade-up" data-aos-duration="3000">
          <h4 class="text-muted">Kayelux Beauty Salon</h4>
          <h1>Beauty Anywhere Anytime</h1>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
            ocean.
            <br>
            A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly into your mouth.
          </p>
          <button class="btn btn-outline-primary my-2"><a href="services.php">OUR SERVICES</a></button>
          <button class="btn btn-outline-danger"> <a href="#appointment">MAKE AN APPOINTMENT</a></button>
        </div>
      </div>
    </div>
  </section>

    <!-- 3rd section page of Our Beauty & Spa Services-->
    
  <section class="services">
    <div class="container " style="width: 100%;">
      <h6 style="text-align: center;">Browse Our Categories</h6>
      <h1 style="text-align: center;">Our Beauty & Spa Services</h1><br><br><br>
      <div class="row" style="text-align: center;">
        <div class="col-md-3" data-aos="fade-up" data-aos-duration="3000">
          <img src="./images/design-removebg-preview.png" alt="image" height="100px">
          <h4> Beauty Massage</h4>
          <p>facial massage can increase circulation for the face.</p>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-duration="3000">
          <img src="./images/design-removebg-preview.png" height="100px" alt="image">
          <h4>Facial Therapy</h4>
          <p>A facial is a family of skin care treatments for the face.</p>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-duration="3000">
          <img src="./images/design-removebg-preview.png" height="100px" alt="image">
          <h4>Skin Care</h4>
          <p>Skin care is the range of practices that support skin integrity.</p>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-duration="3000">
          <img src="./images/design-removebg-preview.png" height="100px" alt="image">
          <h4>Parlor & Beauty</h4>
          <p>it is an establishment dealing with cosmetic treatments for men and women.</p>
        </div>
      </div><br><br><br>

      <div class="row" style="text-align: center;">
        <div class="col-md-3" data-aos="fade-up" data-aos-duration="3000">
          <img src="./images/design-removebg-preview.png" height="100px" alt="image">
          <h4>Eye Shadow</h4>
          <p>Eye shadow is a cosmetic applied primarily to the eyelids or look more attractive.</p>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-duration="3000">
          <img src="./images/design-removebg-preview.png" height="100px" alt="image">
          <h4>Relaxation Room</h4>
          <p>A relaxation room is the calm frame of mind before a wonderful treatment.</p>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-duration="3000">
          <img src="./images/design-removebg-preview.png" height="100px" alt="Image">
          <h4>MakeUp</h4>
          <p>any of various cosmetics materials used in changing a performer's appearance.</p>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-duration="3000">
          <img src="./images/design-removebg-preview.png" height="100px" alt="image">
          <h4>Aroma Therapy</h4>
          <p>Aromatherapy may promote relaxation and help relieve stress.</p>
        </div>
      </div>
      <br><br>
      <div style="text-align: center;" data-aos="fade-up" data-aos-duration="3000">
        <h4>Discover the Best Beauty Salon Center</h4><br>
        <p>A beauty salon is an establishment that offers a variety of cosmetic treatments and cosmetic services for men
          and women. Beauty salons may offer a variety of services including professional hair cutting and styling,
          manicures and pedicures, and often cosmetics, makeup and makeovers.</p>
          <a href="#appointment" class="btn btn-outline-danger" >Appointment</a>
      </div><br><br>
    </div>
  </section>

  <!-- 4th section page -->

  <section class="future_service">
    <div style="text-align: center;">
      <h6 style="text-align: center;" class="pt-5">Kayelux Beauty Salon</h6>
      <h1 style="text-align: center;" class="pb-5">Featured Services</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-4 featured">
            <h3>Massage</h3>
            <img src="./images/design.jpeg" alt="image" class="img-fluid rounded-circle" width="150px">
            <p>The purpose of massage is generally for the treatment of body stress or pain.</p>
          </div>
          <div class="col-md-4 featured">
            <h3>Tea Therapy</h3>
            <img src="./images/design.jpeg" alt="image" class="img-fluid rounded-circle" width="150px">
            <p>Tea Therapy is Natural Remedies Using Traditional Chinese Medicine.</p>
          </div>
          <div class="col-md-4 featured">
            <h3>Hand & Foot Spa</h3>
            <img src="./images/design.jpeg" alt="image" class="img-fluid rounded-circle" width="150px">
            <p>Hand and foot massage is a way of helping someone to relax and feel better.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 featured">
            <h3>Body Treatments</h3>
            <img src="./images/design.jpeg" alt="image" class="img-fluid rounded-circle" width="150px">
            <p>Body treatmentsis stimulate the skin to feel fresh and smooth.</p>
          </div>
          <div class="col-md-4 featured">
            <h3>Facials</h3>
            <img src="./images/design.jpeg" alt="image" class="img-fluid rounded-circle" width="150px">
            <p>facial is a set of skin care treatments for your face with the goal of removing impurities, and dead
              skin.</p>
          </div>
          <div class="col-md-4 featured">
            <h3>Waxing</h3>
            <img src="./images/design.jpeg" alt="image" class="img-fluid rounded-circle" width="150px">
            <p>Waxing is the process of hair removal by using a covering of a sticky substance.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5th section page of  Our Expert Makeup & Beautician Artist-->

  <SECTion>
  <div class="py-5 team4">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-md-7 text-center">
          <h3 class="mb-3">Experienced & Professional Team</h3>
          <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great
            experience for you without doubt and in no-time</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="row">
            <div class="col-md-12" data-aos="zoom-in" data-aos-duration="3000">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" alt="wrapkit"
                class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-12 text-center">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
                <h6 class="subtitle mb-3">BEAUTICIAN</h6>
                <p>You can relay on our amazing features list and also our customer services will be great experience.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="row">
            <div class="col-md-12" data-aos="zoom-in" data-aos-duration="3000">
              <img src="./images/nisha.jpeg" height="345px" width="360px"alt="wrapkit"
                class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-12 text-center">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Nisha Gupta</h5>
                <h6 class="subtitle mb-3">BEAUTICIAN</h6>
                <p>Specialize in understanding various skin types, makeup applications, hair styling, and hair
                  colouring.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="row">
            <div class="col-md-12" data-aos="zoom-in" data-aos-duration="3000">
              <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" alt="wrapkit"
                class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-12 text-center">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Michael Doe</h5>
                <h6 class="subtitle mb-3">BEAUTICIAN</h6>
                <p>The Beautyblender is a versatile makeup sponge that can be used for practically anything in your
                  makeup bag.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="row">
            <div class="col-md-12" data-aos="zoom-in" data-aos-duration="3000">
              <img src="./images/pooja.jpeg" height="345px" width="360px"alt="wrapkit"
                class="img-fluid rounded-circle" />
            </div>
            <div class="col-md-12 text-center">
              <div class="pt-2">
                <h5 class="mt-4 font-weight-medium mb-0">Pooja Epili</h5>
                <h6 class="subtitle mb-3">BEAUTICIAN</h6>
                <p>Expertise in recommending different beauty treatments such as therapies for skin and hair care</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</SECTion>

  <!-- 6th section page of Make An Appointment -->

<section class="appointment_section " id="appointment">
    <div class="container">
      <h1 class="text-center py-5" style="margin-top: 80px;">Make An Appointment</h1>
      <div class="row">
        <div class="col-md-6">
          <form method="post" action="index.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Your Full Name</label>
                <input type="text" class="form-control" id="inputyourfullname" name="name"
                  placeholder="Your Full Name...">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email Address</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputState"> Select Service</label>
              <select id="inputSelectSubject" class="form-control" name="type">
                <option selected>Service Type</option>
                <option>Makeup & Massage</option>
                <option>Spa Package</option>
                <option>Manicure</option>
                <option>Pedicure</option>
                <option>Couple Massage</option>
                <option>Facial</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputMessage">Select Timing</label>
              <select id="inputSelectSubject" class="form-control" name="time">
                <option selected>Timing Slot</option>
                <option>10am</option>
                <option>11am</option>
                <option>12pm</option>
                <option>1pm</option>
                <option>2pm</option>
                <option>3pm</option>
              </select>
            </div>
            <a href="https://rzp.io/l/Aebvjfo"> <button type="submit" class="btn btn-outline-danger" name="submit">Make
                An Appointment</button></a>
          </form>
        </div>
        <div class="col-md-6">
          <img src="https://preview.colorlib.com/theme/kayelux/images/image_8.jpg" style="width:100%" alt="" srcset=""
            class="img-fluid">
        </div>
      </div>
    </div>
  </section>
</body>
</html>

<!-- footer -->

<?php
include "footer.php";
?>
