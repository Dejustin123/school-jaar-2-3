<?php include "../module-header.php";?>
<?php require "../function.php";?>

<?php
    $data = Getcheck($_GET["ID"]);
?>
<div id="container-Delete">
    <form method="post" id="edit-form" action="modules/delete_function.php">
        <input class="form-control" type="hidden" name="ID" value="<?php echo $data["ID"]?>">
        <input class="form-control" type="text" name="Name" disabled value="<?php echo $data["Name"];?>"><i class="fa fa-user"></i>
        <input class="form-control" type="text" name="Description" disabled value="<?php echo $data["Description"];?>">
        <select class="form-control" name="Status" id="select" disabled value="<?php echo $data["Status"];?>">
        </select>
        <input class="form-control" type="time" name='Time' disabled value="<?php echo $data["Time"];?>">
        <button class="btn btn-light" name="submit">Verwijder uw bericht</button>
    </form>
</Div>
<?php include "../footer.php";?>