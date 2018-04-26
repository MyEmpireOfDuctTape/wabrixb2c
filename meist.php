<?php include_once "header.php"; header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wabrix</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="/wbx/css/wabrix.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="headerasendus"></div>
<div class="" id="meistslide">
    <div class="container-fluid">
    <div class="row aligner">
        <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0 col-0"></div>
         <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12 aligner-item">
                <h1 class="subslogan">Meist</h1>
                <p class="sloganp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium nulla quam, et feugiat urna auctor ac. Sed ornare consectetur lorem vitae faucibus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium nulla quam, et feugiat urna auctor ac. Sed ornare consectetur lorem vitae faucibus.<br /><br />

+372 600 9082<br />
info@wabrix.ee</p>
                
        </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12" id="loc">
            <?php require_once "src/index.html"; ?>
        </div>
    </div>
    </div> 
    </div>
    <div class="container-fluid" style="padding: 0; box-shadow:0 0px 8px 0 rgba(0,0,0,0.1)">
    <div class="container" style="padding: 5em 2em ">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0 col-0"></div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 col-12">
                <h2 id="kntkt" class="subslogan">Võta ühendust</h2>
                <p class="sloganp" style="text-align: center">Lorem ipsum dolor sit amet</p>
                <?php include_once "meilivorm.php"; ?>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0 col-0"></div>
        </div>
</div>
    </div>
    <div class="uudiskiri">
        <div class="container">
            <div class="row aligner">
                <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-12 aligner-item">
                    <h2>Asukoht</h2>
                    <p>Asume Kalamajas, Telliskivi ja Balti jaama vahel. Kesklinnast saab meie juurde trammidega 
number 1 ja 2.<br /><br />

Vabriku 6, Tallinn<br />
E-R 09:00 - 17:30 
</p>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-12 aligner-item">
                    <img alt="pilt kontorist" src="/wbx/img/asukoht.jpg" class="sideImage">
                </div>
                <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
            </div>
        </div>
    </div>
    <!-- Footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/wbx/js/smooth.js"></script>
<script type="text/javascript" src="/wbx/js/tabs.js"></script>
    <script type="text/javascript">
   /* $(document).ready(() => {
        const headeratstart = $(".headerasendus").eq(0).outerHeight();
        if(window.location.href.includes("#kntkt")){
           $('body, html').animate({
            scrollTop: $("#kntkt").offset().top - headeratstart
            }, 300, ); 
           }
    });*/
    </script>
    </body></html>
    <?php include_once "footer.php"; ?>