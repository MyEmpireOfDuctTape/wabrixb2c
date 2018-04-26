<?php session_start(); // place it on the top of the script ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
unset($_SESSION['msg']);
?>
<h4 class="footh" id="vestus"><?php echo $statusMsg; ?></h4>
<form id="alumine" class="fuudis" method="post" action="faction.php">
                    <input type="email" name="femail" id="femail" placeholder="Teie email">
                    <input type="submit" name="submit" value="LIITU" >
                    </form>
