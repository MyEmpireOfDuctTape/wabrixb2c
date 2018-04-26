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
<div class="subslider" id="tekstiilslide">
    <div class="container-fluid ">
    <div class="row aligner">
        <div class="col-xl-4 col-lg-4 col-md-2 col-sm-0 col-xs-0 col-0"></div>
         <div class="col-xl-4 col-lg-4 col-md-8 col-sm-12 col-xs-12 col-12 aligner-item">
                <h1 class="slogan seb">Tekstiil</h1>
                <p class="sloganp">Varsti oleme kohal</p>
        </div>
         <div class="col-xl-4 col-lg-4 col-md-2 col-sm-0 col-xs-0 col-0"></div>
        </div>
    </div>
    </div>
    <!-- Footer -->
<?php if($_SERVER['REQUEST_URI'] !== "/wbx/tooted.php"){
    include_once "footer.php";
}
?>    