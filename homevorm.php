<?php session_start(); // place it on the top of the script ?>
<?php
    $statusMsg = !empty($_SESSION['msgkesk'])?$_SESSION['msgkesk']:' ';
    unset($_SESSION['msgkesk']);
?>
<h4 class="footh" id="vostus"><?php echo $statusMsg; ?></h4>
<form id="keskmine" class="fuudis" method="post" action="action.php">
                    <input type="email" name="email" id="femail" placeholder="Teie email">
                    <input type="submit" name="submit" value="LIITU" >
                    </form>