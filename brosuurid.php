<?php include_once "header.php"; header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tooted</title>
<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link rel="stylesheet" href="/wbx/css/wabrix.css" />
<link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
</head>
<body> 
<?php if( $_SERVER['REQUEST_URI'] !== "/wbx/tooted.php" ) {
    echo "<div class='headerasendus'></div>" ;
} ?>
<div class="subslider" id="brosuurslide">
    <div class="container-fluid ">
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-2 col-sm-0 col-xs-0 col-0"></div>
         <div class="col-xl-4 col-lg-4 col-md-8 col-sm-12 col-xs-12 col-12 aligner-item">
                <h1 class="slogan seb">Brosüürid</h1>
                <p class="sloganp">consectetur adipiscing elit. Pellentesque vel finibus elit.</p>
                <a class="scroll" href="#brosuurk"><button class="cta">ALUSTA TEGEMIST</button></a>
        </div>
         <div class="col-xl-4 col-lg-4 col-md-2 col-sm-0 col-xs-0 col-0"></div>
        </div>
    </div>
    </div>
<div class="showcase" id="brosuurk">
<div class="container-fluid tooted2" style="padding: 0; box-shadow:0 0px 8px 0 rgba(0,0,0,0.1)">
    <div class="container" >
        <div class="row">
            <div class="col-4 kid"></div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 subtab">
                <a class="active2 sublink" onclick="openCity('brosuurA4')">A4</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 subtab">
                <a class="sublink" onclick="openCity('brosuurA5')">A5</a>
            </div>
            <div class="col-4 kid"></div>
        </div>
</div>
    </div>
    <div class="container insp" id="brosuurA4">
        <h2 class="vaikeh">A4</h2>     
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12"></div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1241/Product/2217/A4-Bros-r-leslaadimine" class="huver"><img class="card-img-top" src="/wbx/img/Upload.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">A4 brosüür üleslaadimine</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12"></div>
    </div>  <!-- row -->
    </div> <!-- container -->
    <div class="container insp" id="brosuurA5" style="display:none">
        <h2 class="vaikeh">A5</h2>     
        <div class="row">   
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12"></div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1242/Product/2218/A5-Bros-ri-les-laadmine" class="huver"><img class="card-img-top" src="/wbx/img/Upload.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Brosüür A5 Üleslaadimine</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12"></div>
</div><!-- row -->
    </div> <!-- container -->
    </div>

    <!-- Footer -->
<?php if( $_SERVER['REQUEST_URI'] !== "/wbx/tooted.php" ){
    include_once "footer.php";
}
?>   