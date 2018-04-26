<?php include_once "header.php"; header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tooted</title>
<meta charset="utf-8">
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
<div class="subslider" id="rollupslide">
    <div class="container-fluid ">
    <div class="row aligner">
        <div class="col-xl-4 col-lg-4 col-md-2 col-sm-0 col-xs-0 col-0"></div>
         <div class="col-xl-4 col-lg-4 col-md-8 col-sm-12 col-xs-12 col-12 aligner-item">
                <h1 class="slogan seb">Roll-up</h1>
                <p class="sloganp">consectetur adipiscing elit. Pellentesque vel finibus elit.</p>
                <a class="scroll" href="#rollupk"><button class="cta">ALUSTA TEGEMIST</button></a>
        </div>
         <div class="col-xl-4 col-lg-4 col-md-2 col-sm-0 col-xs-0 col-0"></div>
        </div>
    </div>
    </div>
<div class="showcase" id="rollupk">
<div class="container-fluid tooted2" style="padding: 0; box-shadow:0 0px 8px 0 rgba(0,0,0,0.1)">
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-xl col-lg col-md col-sm col-xs subtab">
                <a class="active2 sublink" onclick="openCity('rollup470x2000')">(800mm x 2000mm)</a>
            </div>
            <div class="col-4"></div>
        </div>
</div>
    </div>
    <div class="container insp" id="rollup470x2000">
        <h2 class="vaikeh">Roll-up</h2>     
        <div class="row">  
             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-0 col-xs-0">
         <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1236/Product/2193/Roll-up-1" class="huver"><img class="card-img-top" src="/wbx/img/rollup/Rollup_1.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Rollup 1</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1236/Product/2194" class="huver"><img class="card-img-top" src="/wbx/img/rollup/Rollup_2.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Rollup 2</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-0 col-xs-0">
             <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1236/Product/2195" class="huver"><img class="card-img-top" src="/wbx/img/rollup/Rollup_3.jpg" alt="Card image cap"></a>
                 <div class="card-block">
                    <h4 class="card-title">Rollup 3</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-0 col-xs-0">
             <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1236/Product/2196" class="huver"><img class="card-img-top" src="/wbx/img/rollup/Rollup_4.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Rollup 4</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-0 col-xs-0">
             <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1236/Product/2197" class="huver"><img class="card-img-top" src="/wbx/img/Upload.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Lae üles enda rollup</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        
    </div>  <!-- row -->
    </div> <!-- container -->
    </div>
    <!-- Footer -->
<?php if( $_SERVER['REQUEST_URI'] !== "/wbx/tooted.php" ){
    include_once "footer.php";
}
?> 