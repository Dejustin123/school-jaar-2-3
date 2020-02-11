<?php include "header.php";?>
<?php require "function.php";?>
<?php
    $data = array ([NULL,"","",""]);
    $_REQUEST["ID"];
?>
 <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" <?php ?>><?php $_REQUEST["naam"];?></input>
    <input type="text" <?php ?>><?php $_REQUEST["descriptie"];?></input>
    <input type="text" <?php ?>><?php $_REQUEST["status"];?></input>
</form>
<button href="<?php echo $_POST ?>">Verander uw bericht</button>
<?php include "footer.php";?>