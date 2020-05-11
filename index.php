<?php
    $msg = "";
  use PHPMailer\PHPMailer\PHPMailer;
  include_once "PHPMailer/PHPMailer.php";
  include_once "PHPMailer/Exception.php";
  include_once "PHPMailer/SMTP.php";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
      $file = "attachment/" . basename($_FILES['attachment']['name']);
      move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
    } else
      $file = "";

    $mail = new PHPMailer();

    //if we want to send via SMTP
    $mail->Host = "smtp.gmail.com";
    //$mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "senaidbacinovic@gmail.com";
    $mail->Password = "5C1bcnPkDI4Wd%#";
    $mail->SMTPSecure = "ssl"; //TLS
    $mail->Port = 465; //587

    $mail->addAddress('smhula@sinfomz.com');
    $mail->name = $name;
    $mail->setFrom($email, $name);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;
    $mail->addAttachment($file);

    if ($mail->send())
        $msg = "Your email has been sent, thank you!";
    else
        $msg = "Please try again!";

    unlink($file);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="google-site-verification" content="vAXOM-C5EUGGIwrxTNowJclsNz2vX4n1x9oochtq--s" />
  <title>Sinfo Moz - Making IT Easy
  </title>
  <meta name="description" content="Garry Hamer consultancy prides itself in providing the best possible services and establishing long term and mutually beneficial relations with all its clients.
We believe that The Client is the most important person in our business, he is not an interruption of our work , he is the Purpose Of Our Work.">
  <meta name="keywords"
    content="Specialized Cleaning Mozambique, Facilities Management Mozambique, General Procurement Mozambique">
  <meta name="twitter:description"
    content="Driving Facilities Management &amp; Procurement Excellence across multiple sectors">
  <meta name="twitter:title" content="Driving Facilities Management &amp; Procurement Excellence across multiple sectors">
  <meta name="twitter:description"
    content="Driving Facilities Management &amp; Procurement Excellence across multiple sectors">
  <link rel="canonical" href="http://garryhamerconsulting.com/index.php">
  <meta property="og:title" content="Garry Hamer consultancy - Driving Facilities Management &amp; Procurement Excellence across multiple sectors">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://garryhamerconsulting.com/index.php">
  <meta property="og:site_name" content="Garry Hamer consultancy">

  <link rel="shortcut icon" type="image/png" href="img/fav_icon.jpg" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://kit.fontawesome.com/b0d58c42f6.js" crossorigin="anonymous"></script>

</head>

<body id="home">
  <!--
  <div class="spinner-ctn">
    <div class="spinner">
      <div class="rectagle1"></div>
      <div class="rectagle2"></div>
      <div class="rectagle3"></div>
      <div class="rectagle4"></div>
      <div class="rectagle5"></div>
    </div>
  </div>
-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container"><a class="navbar-brand" href="index.php"><img src="img/sinfo_logo.png"
          alt=" logo"></a><button class="navbar-toggler compressed" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="index.php">Home <span
                class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item dropdown dropbtn"><a class="nav-link servi_icon" href="#">About</a></li>
           <li class="nav-item dropdown dropbtn"><a class="nav-link servi_icon" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link get_touch" href="#">contacts</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hero_caption">
           <h1 class="hero_title">it consultancy services</h1>
          <h5 class="hero_text">Our experienced IT Consulting team will provide you with the highly secure, highly available technology platform that you need to support your business operations and provide you with a competitive edge.</h5>
           <a href="#" class="btn btn_hero">contact us</a>
            <a href="#" class="btn btn_white">request quote</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about_us section_space justify-content-content">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="about_img">
            <img src="img/silvio_mhula.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="about_content">
            <span class="top_title">welcome to sinfo</span>
            <h2 class="subtitle">about us</h2>
            <p>We offer tailored and innovative IT Solution for all types of business. We provide services in the area of computer technologies, which aims to be recognized for its solidity and competence. We have sought to establish the best partnerships with relevant brands and interconnect them with each other.</p>
            <p>Over that time we have developed a business model and created strategicpartnershipsthathelpedusonplanning,designing, implementing and managing new and more dynamic technologies that helps our customers and partners to grow continuously without disrupting their business operations.</p>
            <p class="s_mhula">S. Mhula</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="services section_space justify-content-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="subtitle text-center">our services</h2>
          <p class="below_subtitle_text">We pride ourselves on meeting the SLA's that we define for our customers and if we miss them, we don't take it lightly, we always pull out all of the stops to do everything for every one of our customers.</p>
        </div>
      </div>
      <div class="services_content_box">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="service_img_left">
               <img src="img/security_sytem.jpg" alt="Security Systems">
            </div>
          </div>
         <div class="col-md-6">
            <div class="services_content_text_right">
              <h4 class="service_title">network systems</h4>
              <Network class="service_text">Network Systems We provide, install and manage fiber and copper wired networks as well as radio signals (wireless) to support any communication equipment, making it possible to interconnect low voltage systems that conduct data voice and image.</p>
          </div>
         </div>
        </div>
      </div>

      <div class="services_content_box">
        <div class="row align-items-center">
          <div class="col-md-6">
             <div class="services_content_text_right">
              <h4 class="service_title">Security Systems</h4>
              <Network class="service_text">We provide, install and monitor electronic protection systems that serve from residential, corporate and industrial installations, offering total comfort and peace of mind to our customers.</p>
          </div>
           
          </div>
         <div class="col-md-6">
            <div class="service_img_left">
              <img src="img/security_sytem.jpg" alt="Security Systems">
            </div>
         </div>
        </div>
      </div>

      <div class="services_content_box">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="service_img_left">
               <img src="img/security_sytem.jpg" alt="Security Systems">
            </div>
          </div>
         <div class="col-md-6">
            <div class="services_content_text_right">
              <h4 class="service_title">IT Equipment Sales & Rental</h4>
              <Network class="service_text">Considering that technological solutions are a critical fact for managing, developing and security of your business, on the other hand they represent a considerable aditional cost. In this context we bring alternative solutions.</p>
          </div>
         </div>
        </div>
      </div>

      <div class="services_content_box">
        <div class="row align-items-center">
          <div class="col-md-6">
             <div class="services_content_text_right">
              <h4 class="service_title">Technical Assistance</h4>
              <Network class="service_text">As consumers of other services, we seek to bring to our services the requirements we make to our service providers, thus cultivating a professional, fast, personalized, transparent and quality service to serve our consumer.</p>
          </div>
           
          </div>
         <div class="col-md-6">
            <div class="service_img_left">
               <img src="img/security_sytem.jpg" alt="Security Systems">
            </div>
         </div>
        </div>
      </div>
    </div>
  </section>
  <section class="call_to_action section_space text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="service_title">CURRENT STATE OF IT DOES NOT ALIGN WITH YOUR BUSINESS STRATEGY? REQUEST OUR IT CONSULTING SERVICES NOW.</h2>
          <p class="call_text_p">For more than 10 years now Intellectsoft has been helping organizations of different scale and structure to improve and modernise their IT strategies. Some of our IT experts have worked in the industry for over fifteen years. This has allowed us to craft an effective approach to IT consulting that enables us to deliver maximum benefit in the shortest time.</p>
          <a href="#"class="btn btn_call_action">contact us</a>
        </div>
      </div>
    </div>
  </section>
  <section class="form_contacts section_space">
    <div class="container">
       <div class="row">
        <div class="col-md-12">
          <h2 class="subtitle text-center">Let us have an informal chat</h2>
          <p class="below_subtitle_text">Take our advice, whether it comes to IT infrastructure, license management or something else.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="contact_details">
             <h2 class="service_title">contacts</h2>
             <div class="contact_content">
               <p><i class="fas fa-map-marker-alt"></i> Bairro da Malhangalene "B", Rua Reinata Sadimba, <br>Número 96, 2o Andar, Quarteirão 42 Maputo, Moçambique  </p>
               <p><i class="fas fa-mobile-alt"></i> +258 84 56 88 123</p>
               <p><i class="far fa-envelope"></i> tecnica@sinfomz.com</p>
               <p><i class="far fa-clock"></i> working hours: 8AM to 5PM from Monday to Friday</p>
             </div>
             <div class="social_media">
               <ul class="list_unstyled">
                 <li><i class="fab fa-linkedin"></i></li>
                   <li><i class="fab fa-facebook"></i></li>
                     <li><i class="fab fa-instagram-square"></i></li>
               </ul>
             </div>
          </div>
        </div>
        <div class="col-md-6">
           <!--contact form-->
    <section class="contactForm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="about_content">

                        <h3 class="title_h2"> Send us an email for any clarification</h3>
                        
                    </div>
                    <?php if ($msg != "") echo "$msg<br><br>"; ?>

                    <div class="contact_form">
                        <form method="post" action="sendemail.php" enctype="multipart/form-data">
                            <input class="form-control" name="name" placeholder="Full Name..."><br>
                            <input class="form-control" name="subject" placeholder="Subject..."><br>
                            <input class="form-control" name="email" type="email" placeholder="Email..."><br>
                            <textarea placeholder="Message..." class="form-control" name="message"></textarea><br>
                            <input id="sendBtn" class="btn btn_send" name="submit" type="submit" value="send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </div>
      </div>
    </div>
  </section>
  <section class="sb text-center">
     <div class="copyright">
    Copyright &copy; 2020 <span class="copyright-name">SINFO, Lda.</span> All rights Reserved.
    Designed by <a href="https://www.sbmozmedia.com/" target="_blank" class="sb">Sbmozmedia &amp; Serviços</a>
  </div>
  </section>




     
   
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="js/main.js"></script>
</body>

</html>
