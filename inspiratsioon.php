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
<div class="subslider" id="tooteslide">
    <div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 col-lg-3 col-md-2 col-sm-0 col-xs-0 col-0"></div>
         <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 col-xs-12 col-12">
                <h1 class="slogan">Inspiratsioon</h1>
                <p class="sloganp">consectetur adipiscing elit. Pellentesque vel finibus elit.</p>
                <a class="scroll" href="#visiit"><button class="cta">ALUSTA TEGEMIST</button></a>
        </div>
         <div class="col-xl-4 col-lg-3 col-md-2 col-sm-0 col-xs-0 col-0"></div>
        </div>
    </div>
    </div>
<div class="showcase" id="visiit">
<div class="container-fluid" style="padding: 0; box-shadow:0 0px 8px 0 rgba(0,0,0,0.1)" id="tooted">
    <div class="container" >
        <div class="row">
           <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                <a class="active2 sublink scroll" href="#visiit"onclick="openCity('visiitkaardid')">Visiitkaardid</a>
            </div>
         <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                <a class="sublink" onclick="openCity('postkaardid')">Postkaardid</a>
            </div>
           <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                <a class="sublink" onclick="openCity('ymbrikud')">Ümbrikud</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                <a class="sublink" onclick="openCity('flaierid')">Flaierid</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                 <a class="sublink" onclick="openCity('brosuur')">Brošüür</a>
            </div>
           <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                <a class="sublink" onclick="openCity('rollup')">Roll-up</a>
            </div>
           <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="sublink" onclick="openCity('tekstiil')">Tekstiil</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="sublink" onclick="openCity('blankett')">Blankett</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="sublink" onclick="openCity('koolitus')">Koolitus</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="sublink" onclick="openCity('poster')">Poster</a>
            </div>
        </div>
</div>
    </div>
    <div class="container insp" id="visiitkaardid">
        <h2 class="vaikeh">Visiitkaardid</h2>
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                <a class="sublink2" onclick="inspToggle('vismat')">Materjalid</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                 <a class="sublink2" onclick="inspToggle('visex')">Näidised</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
        </div>
                <div class="insptoggle" id="vismat" style="display:none">      
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">vismat</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>  
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div> 
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="insptoggle" id="visex">      
        <div class="row">   
       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Visex</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>  
       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
</div>
    <div class="container insp" id="postkaardid" style="display:none">
        <h2 class="vaikeh">Postkaardid</h2> 
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                <a class="sublink2" onclick="inspToggle('postmat')">Materjalid</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                 <a class="sublink2" onclick="inspToggle('postex')">Näidised</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
        </div>
                   <div class="insptoggle" id="postex">
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
  
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>  
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
          </div>
          <div class="insptoggle" id="postmat" style="display:none">
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
          </div>
</div>
    <div class="container insp" id="ymbrikud" style="display:none">
        <h2 class="vaikeh">Ümbrikud</h2> 
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                <a class="sublink2" onclick="inspToggle('ymbmat')">Materjalid</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                 <a class="sublink2" onclick="inspToggle('ymbex')">Näidised</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
        </div>
                   <div class="insptoggle" id="ymbex">   
        <div class="row">   
       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            
        </div>
          </div>
         <div class="insptoggle" id="ymbmat" style="display:none">   
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            
        </div>
          </div>
</div>
    <div class="container insp" id="flaierid" style="display:none">
        <h2 class="vaikeh">Flaierid</h2> 
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                <a class="sublink2" onclick="inspToggle('flamat')">Materjalid</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                 <a class="sublink2" onclick="inspToggle('flaex')">Näidised</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
        </div> 
        <div class="insptoggle" id="flaex"> 
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
          </div>  
        <div class="insptoggle" id="flamat" style="display: none"> 
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
          </div>
</div>
    <div class="container insp" id="brosuur" style="display:none">
        <h2 class="vaikeh">Brošüür</h2>
                <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                <a class="sublink2" onclick="inspToggle('bromat')">Materjalid</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                 <a class="sublink2" onclick="inspToggle('broex')">Näidised</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
        </div> 
                  <div class="insptoggle" id="broex">   
        <div class="row">   
       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
          </div>
        <div class="insptoggle" id="bromat" style="display:none">   
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
        <div class="row">   
       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">  
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
          </div>
</div>
    <div class="container insp" id="rollup" style="display:none">
        <h2 class="vaikeh">Roll-upi</h2>
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                <a class="sublink2" onclick="inspToggle('rolmat')">Materjalid</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                 <a class="sublink2" onclick="inspToggle('rolex')">Näidised</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
        </div> 
                            <div class="insptoggle" id="rolex">   
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
          </div>
                  <div class="insptoggle" id="rolmat" style="display:none">   
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
          </div>
</div>
    <div class="container insp" id="tekstiil" style="display:none">
        <h2 class="vaikeh">Tekstiil</h2> 
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                <a class="sublink2" onclick="inspToggle('texmat')">Materjalid</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                 <a class="sublink2" onclick="inspToggle('texex')">Näidised</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
        </div> 
                            <div class="insptoggle" id="texex">   
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-0 col-lg-0 col-md-0 col-sm-3 col-xs-0 lil"></div>
        </div>
        <div class="row">   
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
                            <div class="insptoggle" id="texmat" style="display:none">   
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
</div>
    <div class="container insp" id="blankett" style="display:none">
        <h2 class="vaikeh">Blankett</h2>
         <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                <a class="sublink2" onclick="inspToggle('blamat')">Materjalid</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                 <a class="sublink2" onclick="inspToggle('blaex')">Näidised</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
        </div> 
                                    <div class="insptoggle" id="blaex">   
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
                            <div class="insptoggle" id="blamat" style="display:none">   
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
</div>
    <div class="container insp" id="koolitus" style="display:none">
        <h2 class="vaikeh">Koolitusmaterjalid</h2> 
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                <a class="sublink2" onclick="inspToggle('kolmat')">Materjalid</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                 <a class="sublink2" onclick="inspToggle('kolex')">Näidised</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
        </div> 
        <div class="insptoggle" id="kolex"> 
        <div class="row">   
       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
                                    <div class="insptoggle" id="kolmat" style="display:none"> 
        <div class="row">   
       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
        </div>
</div>
    <div class="container insp" id="poster" style="display:none">
        <h2 class="vaikeh">Poster</h2>
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                <a class="sublink2" onclick="inspToggle('posmat')">Materjalid</a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 tk">
                 <a class="sublink2" onclick="inspToggle('posex')">Näidised</a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
        </div> 
                <div class="insptoggle" id="posex"> 
        <div class="row">   
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
</div>
        <div class="insptoggle" id="posmat" style="display:none"> 
        <div class="row">   
       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="#" target="_blank" class="huver"><img class="card-img-top" src="/wbx/img/tootepilt.jpg" alt="Card image cap"></a>
                <div class="card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
        </div>
</div>
    </div>
    <!-- Footer -->
<?php include_once "footer.php"; ?>