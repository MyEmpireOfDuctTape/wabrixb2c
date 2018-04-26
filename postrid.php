<?php include_once "header.php"; header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Postrid</title>
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
<div class="subslider" id="posterslide">
    <div class="container-fluid ">
    <div class="row aligner">
        <div class="col-xl-4 col-lg-4 col-md-2 col-sm-0 col-xs-0 col-0"></div>
         <div class="col-xl-4 col-lg-4 col-md-8 col-sm-12 col-xs-12 col-12 aligner-item">
                <h1 class="slogan seb">Plakatid</h1>
                <p class="sloganp">consectetur adipiscing elit. Pellentesque vel finibus elit.</p>
                <a class="scroll" href="#postridk"><button class="cta">ALUSTA TEGEMIST</button></a>
        </div>
         <div class="col-xl-4 col-lg-4 col-md-2 col-sm-0 col-xs-0 col-0"></div>
        </div>
    </div>
    </div>
<div class="showcase" id="postridk">
<div class="container-fluid tooted2" style="padding: 0; box-shadow:0 0px 8px 0 rgba(0,0,0,0.1)">
    <div class="container">
        <div class="row">
            <div class="col-1 kid"></div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 subtab">
                <a class="active2 sublink" onclick="openCity('posterA1')">A1</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 subtab">
                <a class="sublink" onclick="openCity('posterA2')">A2</a>
            </div>
           <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 subtab">
                <a class="sublink" onclick="openCity('posterA3')">A3</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 subtab">
                <a class="sublink" onclick="openCity('posterA3pluss')">A3+</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 subtab">
                <a class="sublink" onclick="openCity('posterA4')">A4</a>
            </div>
            <div class="col-1 kid"></div>
        </div>
</div>
    </div>
    <div class="container insp" id="posterA1">
        <h2 class="vaikeh">A1</h2>     
        <div class="row">   
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/232/Product/2109" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_1.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 1</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/232/Product/2110" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_2.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 2</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/232/Product/2111" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_3.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 3</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>   
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/232/Product/2112" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_4.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 4</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/232/Product/2113" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_5.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 5</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/232/Product/2114" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_6.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 6</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>  
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_7.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 7</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/232/Product/2115" class="huver"><img class="card-img-top" src="/wbx/img/Upload.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Lae üles enda plakat</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            

    </div>  <!-- row -->
    </div> <!-- container -->
    <div class="container insp" id="posterA2" style="display:none">
        <h2 class="vaikeh">A2</h2>     
        <div class="row">   
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/233/Product/2116" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_1.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 1</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/233/Product/2117" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_2.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 2</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/233/Product/2118" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_3.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 3</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>   
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/233/Product/2118" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_4.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 4</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_5.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 5</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/233/Product/2120" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_6.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 6</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>  
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/233/Product/2122" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_7.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 7</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/233/Product/2161" class="huver"><img class="card-img-top" src="/wbx/img/Upload.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Lae üles enda plakat</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            
</div><!-- row -->
    </div> <!-- container -->
    <div class="container insp" id="posterA3" style="display:none">
        <h2 class="vaikeh">A3</h2>     
        <div class="row">   
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/234/Product/2123" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_1.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 1</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/234/Product/2124" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_2.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 2</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/234/Product/2125" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_3.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 3</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>   
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/234/Product/2126" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_4.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 4</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/234/Product/2127" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_5.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 5</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/234/Product/2128" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_6.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 6</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>  
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/234/Product/2129" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_7.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 7</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/234/Product/2162" class="huver"><img class="card-img-top" src="/wbx/img/Upload.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Lae üles enda plakat</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            
</div><!-- row -->
    </div> <!-- container -->
       <div class="container insp" id="posterA3pluss" style="display:none">
        <h2 class="vaikeh">A3+</h2>     
        <div class="row">   
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1240/Product/2199/" class="huver"><img class="card-img-top" src="/wbx/img/postrid/A3pluss/Plakat_1.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 1</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1240/Product/2200" class="huver"><img class="card-img-top" src="/wbx/img/postrid/A3pluss/Plakat_2.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 2</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1240/Product/2201" class="huver"><img class="card-img-top" src="/wbx/img/postrid/A3pluss/Plakat_3.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 3</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>   
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1240/Product/2202" class="huver"><img class="card-img-top" src="/wbx/img/postrid/A3pluss/Plakat_4.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 4</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1240/Product/2203/" class="huver"><img class="card-img-top" src="/wbx/img/postrid/A3pluss/Plakat_5.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 5</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1240/Product/2204" class="huver"><img class="card-img-top" src="/wbx/img/postrid/A3pluss/Plakat_6.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 6</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>  
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1240/Product/2205" class="huver"><img class="card-img-top" src="/wbx/img/postrid/A3pluss/Plakat_7.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 7</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/1240/Product/2207" class="huver"><img class="card-img-top" src="/wbx/img/Upload.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Lae üles enda plakat</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            
</div><!-- row -->
    </div> <!-- container -->
    
     <div class="container insp" id="posterA4" style="display:none">
        <h2 class="vaikeh">A4</h2>     
        <div class="row">   
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/235/Product/2130" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_1.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 1</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/235/Product/2131" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_2.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 2</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/235/Product/2132" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_3.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 3</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>   
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/235/Product/2133" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_4.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 4</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/235/Product/2134" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_5.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 5</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/235/Product/2135" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_6.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 6</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>  
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/235/Product/2136" class="huver"><img class="card-img-top" src="/wbx/img/postrid/Plakat_7.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Plakat 7</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="https://wabrix.ee/uStore/35/Category/235/Product/2163" class="huver"><img class="card-img-top" src="/wbx/img/Upload.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Lae üles enda plakat</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            
</div><!-- row -->
    </div> <!-- container -->
    </div>
    <!-- Footer -->
<?php if( $_SERVER['REQUEST_URI'] !== "/wbx/tooted.php" ){
    include_once "footer.php";
}
?> 