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
    <div class="headerasendus"></div>
<div class="showcase" id="tooted">
<div class="container-fluid" style="padding: 0; box-shadow:0 0px 8px 0 rgba(0,0,0,0.1)" id="tooted">
 <div class="container" >
        <div class="row">
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="active toplink" onclick="inspToggle('visiitkaardid')">Visiitkaardid</a>
            </div>
         <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="toplink" onclick="inspToggle('postkaardid')">Postkaardid</a>
            </div>
             <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="toplink" onclick="inspToggle('ymbrikud')">Ümbrikud</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="toplink" onclick="inspToggle('flaierid')">Flaierid</a>
            </div>
             <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                 <a class="toplink" onclick="inspToggle('brosuur')">Brošüür</a>
            </div>
           <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="toplink" onclick="inspToggle('rollup')">Roll-up</a>
            </div>
           <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="toplink" onclick="inspToggle('tekstiil')">Tekstiil</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="toplink" onclick="inspToggle('blankett')">Blankett</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="toplink" onclick="inspToggle('koolitus')">Koolitus</a>
            </div>
            <div class="col-xl col-lg col-md-2 col-sm-3 col-xs-3  col-3 subtab">
                <a class="toplink" onclick="inspToggle('poster')">Plakatid</a>
            </div>
        </div>
</div>
    </div>
    </div>
    <div class="container-fluid insptoggle" id="visiitkaardid" style="padding:0">
        <?php include_once "visiitkaardid.php"; ?>
</div>
      <div class="container-fluid insptoggle" id="postkaardid" style="padding:0;display:none">
          <?php include_once "postkaardid.php"; ?>
</div>
      <div class="container-fluid insptoggle" id="ymbrikud" style="padding:0;display:none">
        <?php include_once "ymbrikud.php"; ?>
</div>
      <div class="container-fluid insptoggle" id="flaierid" style="padding:0;display:none">
      <?php include_once "flaierid.php"; ?>
</div>
      <div class="container-fluid insptoggle" id="brosuur" style="padding:0;display:none">
        <?php include_once "brosuurid.php"; ?>
</div>
      <div class="container-fluid insptoggle" id="rollup" style="padding:0;display:none">
        <?php include_once "rollup.php"; ?>
</div>
    <div class="container-fluid insptoggle" id="tekstiil" style="padding:0;display:none">
        <?php include_once "tekstiil.php"; ?>
</div>
    <div class="container-fluid insptoggle" id="blankett" style="padding:0;display:none">
       <?php include_once "blankett.php"; ?>
</div>
    <div class="container-fluid insptoggle" id="poster" style="padding:0;display:none">
        <?php include_once "postrid.php"; ?>
</div>
    <div class="container-fluid insptoggle" id="koolitus" style="padding:0;display:none">
        <?php include_once "koolitus.php"; ?>
</div>
    
    
    <div class="uudiskiri" id="tootk">
        <div class="container">
            <div class="row aligner">
                <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-12 aligner-item">
                    <h2>Materjalid</h2>
                    <p>Lai valik jne</p>
                    <a href="https://wabrix.ee/wbx/materjalid.php"><button class="cta" style="margin-top: 0;">VAATA MATERJALE</button></a>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-12 aligner-item">
                    
                </div>
                <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
            </div>
        </div>
    </div>
    <!-- Footer -->
<?php include_once "footer.php"; ?>