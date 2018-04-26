<?php header('Content-Type: text/html; charset=utf-8'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wabrix</title>
  <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="/wbx/css/wabrix.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
<div id="top"></div>
<div class="pais mid">
<div class="container-fluid" style="padding: 0">  
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2">
                        <a href="https://wabrix.ee/wbx/home.php"><img src="/wbx/img/wabrix.png" class="logo mid nav-link"></a>
                    </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="container">
                        <div class="row">
                                                <div class="dropdown col-xl col-lg col-md col-sm-12 col-xs-12 col-12">
                        <a class="nav-link" href="https://wabrix.ee/wbx/tooted.php">Tooted</a>
						<div class="dropdown-content" id="tooteddd">
							<div class="container-fluid">
                                <div class="row aligner">
                                    <div class="col-4" id="ddlinks">
                                        <a class="ddhead" href="https://wabrix.ee/wbx/tooted.php"><span>Kõik tooted</span></a>
                                        <a href="https://wabrix.ee/wbx/visiitkaardid.php"><span>Visiitkaardid</a>   
                                        <a href="https://wabrix.ee/wbx/postkaardid.php"><span>Postkaardid</span></a>
                                        <a href="https://wabrix.ee/wbx/ymbrikud.php"><span>Ümbrikud</span></a>
                                        <a href="https://wabrix.ee/wbx/postrid.php"><span>Plakatid</span></a>
                                        <a href="https://wabrix.ee/wbx/flaierid.php"><span>Flaierid</span></a>
                                        <a href="https://wabrix.ee/wbx/brosuurid.php"><span>Brosüür</span></a>
                                        <a href="https://wabrix.ee/wbx/blankett.php"><span>Blankett</span></a>
                                        <a href="https://wabrix.ee/wbx/rollup.php"><span>Roll-up</span></a>
                                        <a href="https://wabrix.ee/wbx/tekstiil.php"><span>Tekstiil</span></a>
                                        <a href="https://wabrix.ee/wbx/koolitus.php"><span>Koolitusmaterjalid</span></a>
                                    </div>
                                    <div class="col-8 aligner-item" id="ddtooltip">
                                        <div class="card" style="width: 80%">
                                            <a href="#" class="pilt">
                                            <img class="card-img-top" src="/wbx/img/esileht/4_visiit.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Kõik tooted</h4>
                                                <p class="card-text">Kõike meie trükisd</p>
                                            </div>
                                        </div>
                                        <div class="card" style="display:none; width: 80%">
                                            <a href="https://wabrix.ee/wbx/visiitkaardid.php"  class="pilt">
                                            <img class="card-img-top" src="/wbx/img/esileht/4_visiit.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Visiitkaardid</h4>
                                                <p class="card-text">Organisatsiooni või eraisiku kontaktandmete klassikaline kandja. Äri-, firma- või isiklik visiitkaart.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="display:none; width: 80%">
                                            <a href="https://wabrix.ee/wbx/postkaardid.php"  class="pilt">
                                            <img class="card-img-top" src="/wbx/img/esileht/5_post.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Postkaardid</h4>
                                                <p class="card-text">Sõnumi edastamiseks: kutse, teavitus, tervitus, õnnesoov. Erinevaks otstarbeks, erinevates mõõtudes.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="display:none; width: 80%">
                                            <a href="https://wabrix.ee/wbx/ymbrikud.php" class="pilt">
                                            <img class="card-img-top" src="/wbx/img/esileht/6_envelope.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Ümbrikud</h4>
                                                <p class="card-text">Privaatne sõnum personaalsesse ümbrikusse. Trükk esi- või tagaküljele.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="display:none; width: 80%">
                                            <a href="https://wabrix.ee/wbx/postrid.php" class="pilt">
                                            <img class="card-img-top" src="/wbx/img/esileht/10_plakat.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Plakatid</h4>
                                                <p class="card-text">Disainitud sõnumi edastaja. Erinevaks otstarbeks, erinevate mõõtudega. <br /><span style="color: #eba900 ">UUS 350x650!</span></p>
                                            </div>
                                        </div>
                                        <div class="card" style="display:none; width: 80%">
                                            <a href="https://wabrix.ee/wbx/flaierid.php" class="pilt">
                                            <img class="card-img-top" src="/wbx/img/esileht/9_flaier.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Flaierid</h4>
                                                <p class="card-text">Flaier ehk reklaamleht - lihtsaim ja efektiivseim turundusviis. Reklaamsõnumi edastamiseks kiireim moodus.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="display:none; width: 80%">
                                            <a href="https://wabrix.ee/wbx/brosuurid.php" class="pilt">
                                           <img class="card-img-top" src="/wbx/img/esileht/7_brochure.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Brošüür</h4>
                                                <p class="card-text">Ettevõtte  toodete/teenuste reklaamimiseks. Paber- või kartongkaantega väljaanne, mahuga 5–48 lehekülge.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="display:none; width: 80%">
                                            <a href="https://wabrix.ee/wbx/blankett.php" class="pilt">
                                            <img class="card-img-top" src="/wbx/img/esileht/8_blankett.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Blankett</h4>
                                                <p class="card-text">Ettevõtte logo, sümboolika ning muu vajaliku infoga täiendatud lehed. Lahtiselt või liimblokina.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="display:none; width: 80%">
                                            <a href="https://wabrix.ee/wbx/rollup.php" class="pilt">
                                            <img class="card-img-top" src="/wbx/img/esileht/11_rollup.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Rollupid</h4>
                                                <p class="card-text">Reklaamstend PP materjalil, jalgadel metallkonstruktsioon.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="display:none; width: 80%">
                                            <a href="https://wabrix.ee/wbx/tekstiil.php" class="pilt">
                                            <img class="card-img-top" src="/wbx/img/esileht/12_tekstiil.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Tekstiil</h4>
                                                <p class="card-text">Firma- ja reklaamtooted dekoreeritud logode, piltide või sõnumitega.</p>
                                            </div>
                                        </div>
                                        <div class="card" style="display:none; width: 80%">
                                            <a href="https://wabrix.ee/wbx/koolitus.php" class="pilt">
                                            <img class="card-img-top" src="/wbx/img/esileht/13_koolitusmaterjal.jpg" alt="Card image cap">
                                            </a>
                                            <div class="card-block">
                                                <h4 class="card-title">Koolitusmaterjalid</h4>
                                                <p class="card-text">Koolitusel õppimist toetavad trükised, õpitu edasi andmiseks ning õpiprotsessi toetamiseks.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
                        </div>
                    </div>
                    <div class="col-xl col-lg col-md">
                        <a class="nav-link" href="https://wabrix.ee/wbx/materjalid.php">Materjalid</a>
                    </div>
                     <div class="col-xl col-lg col-md col-sm-12 col-xs-12 col-12">
                        <a class="nav-link" href="https://wabrix.ee/wbx/meist.php">Meist</a>
                    </div>
                     <div class="col-xl col-lg col-md col-sm-12 col-xs-12 col-12">
                        <a class="nav-link" href="https://wabrix.ee" target="_blank">Wabrix B2B</a>
                    </div>
                        </div> <!-- row -->
                    </div><!-- container-->
                </div>
                <div class="dropdown col-xl-1 col-lg-1 col-md-1">
                    <a id="korv" href="/uStore/Cart?StoreID=35"><i class="fas fa-shopping-basket"></i></a>
                </div>
                    <div class="dropdown col-xl-2 col-lg-2 col-md-2" style="text-align: right">
                        <a id="headerinupp" href="/uStore/MyAccount"><span>Minu kasutaja</span></a>
                        <div class="dropdown-content2">
                            <a href="/uStore/OrderHistory?StoreID=35"><span>Tellimuste ajalugu</span></a>
                            <a href="/uStore/PersonalInformation?StoreID=35"><span>Minu andmed</span></a>
                            <a href="/uStore/Adresses?StoreID=35"><span>Aadressid</span></a>
                            <a href="/uStore/MyRecipientLists?StoreID=35"><span>Üleslaetud infotabelid</span></a>
                            <a href="/uStore/Logout.aspx?StoreID=35" style="padding-top: 20px"><span>LOGI VÄLJA</span></a>
                        </div>
                    </div>
            </div>
       </div>
    </div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light flix lil" style="margin: 0 auto" id="mobhead">
        <button class="navbar-toggler" type="button" onclick="toggleNav()">
        <span class="navbar-toggler-icon"></span>
        </button>
    <a href="https://wabrix.ee/wbx/home.php"><img src="/wbx/img/wabrix.png" class="lil"></a>
    </nav>
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">&times;</a>
  <a href="https://wabrix.ee/wbx/tooted.php">Tooted</a>
  <a href="https://wabrix.ee/wbx/inspiratsioon.php">Inspiratsioon</a>
  <a href="https://wabrix.ee/wbx/meist.php">Meist</a>
  <a href="https://wabrix.ee/wbx/meist.php#kntkt">Contact</a>
</div>
<div id="up">
    <a href="#top" class="scroll">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
</div> 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/wbx/js/smooth.js"></script>
<script type="text/javascript" src="/wbx/js/tabs.js"></script>
    <script type="text/javascript" src="/wbx/js/esitlus.js"></script>
    

</body></html>