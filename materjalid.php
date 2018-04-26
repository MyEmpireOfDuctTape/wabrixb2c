<?php include_once "header.php"; header('Content-Type: text/html; charset=utf-8');
if($_GET['pg']){
   $leht = (int)($_GET['pg']); 
}
else{
    $leht = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tooted</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<link rel="stylesheet" href="/wbx/css/wabrix.css"/>
<link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
    
    <script type="text/javascript">
$(document).ready(function(){
   $(".toplink").eq(<?php echo $leht ?>).click();
});
</script>
</head>
<body>  
<div class='headerasendus'></div>
<div class="subslider" id="materjalislide">
    <div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 col-lg-3 col-md-2 col-sm-0 col-xs-0 col-0"></div>
         <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 col-xs-12 col-12">
                <h1 class="slogan seb">Materjalid</h1>
                <p class="sloganp">consectetur adipiscing elit. Pellentesque vel finibus elit.</p>
                <a class="scroll" href="#materjalidk"><button class="cta">VAATA MATERJALE</button></a>
        </div>
         <div class="col-xl-4 col-lg-3 col-md-2 col-sm-0 col-xs-0 col-0"></div>
        </div>
    </div>
    </div>
<div class="showcase" id="materjalidk">
<div class="container-fluid" style="padding: 0; box-shadow:0 0px 8px 0 rgba(0,0,0,0.1)" id="tooted">
    <div class="container" >
        <div class="row">
            <div class="col-xl-2 col-lg col-md-2 col-sm-3 col-xs-3 col-3"></div>
           <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                <a class="active toplink" onclick="openCity('katmata')">Katmata paber</a>
            </div>
         <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                <a class="toplink" onclick="openCity('kaetud')">Kaetud paber</a>
            </div>
           <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                <a class="toplink" onclick="openCity('kartong')">Kartong</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                <a class="toplink" onclick="openCity('disain')">Disainipaber</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3 col-3 subtab">
                 <a class="toplink" onclick="openCity('rollup')">Roll-up</a>
            </div>
            <div class="col-xl-2 col-lg col-md-2 col-sm-3 col-xs-3 col-3"></div>
        </div>
</div>
    </div>
        <div class="container insp" id="katmata">
        <h2 class="vaikeh">Katmata paberid</h2>    
        <div class="row">
            <div class="col-12">
                <div class="side-card">
                    <img class="card-img-side" src="/wbx/img/materjalid/serixo.jpg" alt="Card image cap">
                    <div class="card-block-side">
                        <h4 class="card-title">Serixo 100g/140g/190g/250g</h4>
                        <p class="card-text">Serixo is especially recommented for everyday applications. Easy to use and excellent performance, it will optimise all your rint outs and brighten up your ideas. your ideas. With its excellent whitness and smoothness, Serixo is a woodfree offset paper that allows you to print in confidence.
                            <br /><br />

                            - Recommented for everyday applications<br />
                            - Excellent whitness and smoothness, <br /><br />
                            
                            Saab kasutada: <span class="bold">Visiitkaart, postkaart</span>
</p>
                    </div> <!-- card-block-side -->
                </div><!-- side card -->
            </div> <!-- col-12 -->
        </div><!-- row -->  
                <div class="row">
            <div class="col-12">
                <div class="side-card">
                    <img class="card-img-side" src="/wbx/img/materjalid/Munken.jpg" alt="Card image cap">
                    <div class="card-block-side">
                        <h4 class="card-title">Munken Pure 100g/170g</h4>
                        <p class="card-text">Extraordinary printing demands extraordinary design paper. The uncoated smooth surface of Munken Pure and its cream shade convey distinct features to images and gives an exclusive yet very true natural paper feel.
                            <br /><br />

- Cream shade<br />
- Exclusive yet very true natural paper feel <br /><br />
                            
                            Saab kasutada: <span class="bold">Visiitkaart, postkaart</span>
</p>
                    </div> <!-- card-block-side -->
                </div><!-- side card -->
            </div> <!-- col-12 -->
        </div><!-- row -->  
    </div><!-- container -->
       <div class="container insp" id="kaetud" style="display: none">
        <h2 class="vaikeh">Kaetud paber</h2>    
        <div class="row">
            <div class="col-12">
                <div class="side-card">
                    <img class="card-img-side" src="/wbx/img/materjalid/galerie_art_silk.jpg" alt="Card image cap">
                    <div class="card-block-side">
                        <h4 class="card-title">Galerie Art Silk 115g/150g/200g/250g</h4>
                        <p class="card-text">FocusCard® is an ivory board with an even surface and high opacity. With this features, it constitutes the perfect choice for business and other cards. Focus® is a paper brand, offering specialised paper for specialised print applications<br /><br />

- Perfect choice for business and other cards<br />
- Sile katmata pealispind<br /><br />


                            
                            Saab kasutada: <span class="bold">Visiitkaart, postkaart</span>
</p>
                    </div> <!-- card-block-side -->
                </div><!-- side card -->
            </div> <!-- col-12 -->
        </div><!-- row -->  
                <div class="row">
            <div class="col-12">
                <div class="side-card">
                    <img class="card-img-side" src="/wbx/img/materjalid/galerie_art_gloss.jpg" alt="Card image cap">
                    <div class="card-block-side">
                        <h4 class="card-title">Galerie Art Gloss 115g/150g/200g/250g</h4>
                        <p class="card-text">The brilliant high white gloss surface of this paper enhances even the finest print details ensuring stunning results. It is a woodfree paper with two-sided three-layer clay-coated. Galerie Art Gloss has a high quality of producing of multicolor images, especially in that cases, where it is needed a clear representation of details
<br /><br />

- Something<br />
- Something <br /><br />
                            
                            Saab kasutada: <span class="bold">Visiitkaart, postkaart</span>
                    </div> <!-- card-block-side -->
                </div><!-- side card -->
            </div> <!-- col-12 -->
        </div><!-- row -->  
    </div><!-- container -->
        <div class="container insp" id="disain" style="display:none">
        <h2 class="vaikeh">Disainpaber</h2>    
        <div class="row">
            <div class="col-12">
                <div class="side-card">
                    <img class="card-img-side" src="/wbx/img/materjalid/Rives_basane.jpg" alt="Card image cap">
                    <div class="card-block-side">
                        <h4 class="card-title">Rives Basane Natural White 380g</h4>
                        <p class="card-text">Moest ja kangastest inspireeritud ajatu Rives on oma geomeetrilistest mustritest erinevate kangatekstuurideni ulatuvate viimistlustega on ideaalne paberisari kõigiks kujundustöödeks. Rives Basanel on omapärane nahastruktuur.<br /><br />

- Perfect choice for business and other cards<br />
- Sile katmata pealispind<br /><br />
 Saab kasutada: <span class="bold">Visiitkaart, postkaart</span>
</p>
                    </div> <!-- card-block-side -->
                </div><!-- side card -->
            </div> <!-- col-12 -->
        </div><!-- row -->  
                <div class="row">
            <div class="col-12">
                <div class="side-card">
                    <img class="card-img-side" src="/wbx/img/materjalid/Curious_metallics_ice_silver.jpg" alt="Card image cap">
                    <div class="card-block-side">
                        <h4 class="card-title">Curious Collection Metallics Ice Silver 300g</h4>
                        <p class="card-text">Curious Collection laiendab piire igas suunas- nii värvide, tunnetuse kui ka visuaalsete efektide leidmisel. Avab julgeid ja uusi loomingulisi võimalusi trükkimiseks ning pakendi disinimisel. Sari pakub laias valikus moodsaid värvitoone, millel on tugev metallikefekt tänu mineraalpigmentidele.<br /><br />

- Something something<br />
- Something something<br /><br />
                          Saab kasutada: <span class="bold">Visiitkaart, postkaart</span>  
</p>
                    </div> <!-- card-block-side -->
                </div><!-- side card -->
            </div> <!-- col-12 -->
        </div><!-- row -->  
    </div><!-- container -->
            <div class="container insp" id="kartong" style="display:none">
        <h2 class="vaikeh">Kartong</h2>    
        <div class="row">
            <div class="col-12">
                <div class="side-card">
                    <img class="card-img-side" src="/wbx/img/materjalid/Focus_card.jpg" alt="Card image cap">
                    <div class="card-block-side">
                        <h4 class="card-title">FocusCard® 280g</h4>
                        <p class="card-text">FocusCard® is an ivory board with an even surface and high opacity. With this features, it constitutes the perfect choice for business and other cards. Focus® is a paper brand, offering specialised paper for specialised print applications<br /><br />

- Perfect choice for business and other cards<br />
- Sile katmata pealispind<br /><br />
                            Saab kasutada: <span class="bold">Visiitkaart, postkaart</span>
</p>
                    </div> <!-- card-block-side -->
                </div><!-- side card -->
            </div> <!-- col-12 -->
        </div><!-- row -->  
                <div class="row">
            <div class="col-12">
                <div class="side-card">
                    <img class="card-img-side" src="/wbx/img/materjalid/Focus_card.jpg" alt="Card image cap">
                    <div class="card-block-side">
                        <h4 class="card-title">Invercote Creato 280g</h4>
                        <p class="card-text">Invercote Creato on poolmati pealispinnaga kahelt poolt kaetud 3-kihiline keemilisest massist trükikartong. Suurepärane trükitavus mõlemale poolele. Kõrge valgesus tagab suurepärase trükitulemuse ka kõige keerukamatele illustratsioonidele. Sobib hästi väga nõudlike kujunduste trükkimiseks<br /><br />

- Something something<br />
- Something something<br /><br />
                    Saab kasutada: <span class="bold">Visiitkaart, postkaart</span>        
</p>
                    </div> <!-- card-block-side -->
                </div><!-- side card -->
            </div> <!-- col-12 -->
        </div><!-- row -->  
                <div class="row">
            <div class="col-12">
                <div class="side-card">
                    <img class="card-img-side" src="/wbx/img/materjalid/Focus_card.jpg" alt="Card image cap">
                    <div class="card-block-side">
                        <h4 class="card-title">Incada Silk 280g</h4>
                        <p class="card-text">Incada Silk is designed for quality packaging and graphical applications which require outstanding visual impact. The reverse side is single coated and finished to a matt level which gives an aesthetically pleasing appearance and provides improvements compared to an uncoated surface regarding smoothness and uniformity in ink absorption. <br /><br />

- Something<br />
- Something<br /><br />
                   Saab kasutada: <span class="bold">Visiitkaart, postkaart</span>         

</p>
                    </div> <!-- card-block-side -->
                </div><!-- side card -->
            </div> <!-- col-12 -->
        </div><!-- row -->  
    </div><!-- container -->
            <div class="container insp" id="rollup" style="display:none">
        <h2 class="vaikeh">Rollup</h2>    
        <div class="row">
            <div class="col-12">
                <div class="side-card">
                    <img class="card-img-side" src="/wbx/img/tootepilt.jpg" alt="Card image cap">
                    <div class="card-block-side">
                        <h4 class="card-title">Rollfilm</h4>
                        <p class="card-text">Incada Silk is designed for quality packaging and graphical applications which require outstanding visual impact. The reverse side is single coated and finished to a matt level which gives an aesthetically pleasing appearance and provides improvements compared to an uncoated surface regarding smoothness and uniformity in ink absorption. <br /><br />

- Something<br />
- Something<br /><br />
                   Saab kasutada: <span class="bold">Roll-up</span>      </p>
                    </div> <!-- card-block-side -->
                </div><!-- side card -->
            </div> <!-- col-12 -->
        </div><!-- row -->  
    </div><!-- container -->
             
    <div class="uudiskiri" id="matek">
        <div class="container">
            <div class="row aligner">
                <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-12 aligner-item">
                    <h2>Tooted</h2>
                    <p>Lai valik jne</p>
                    <a href="https://wabrix.ee/wbx/tooted.php"><button class="cta" style="margin-top: 0;">VALI TOODE</button></a>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-12 aligner-item">
                </div>
                <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
            </div>
        </div>
    </div>
    <!-- Footer -->
<?php include_once "footer.php"; ?>