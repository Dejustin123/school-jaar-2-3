<?php include "../module-header.php";?>
<?php require "../function.php";?>

<?php
    $data = getlistspec($_GET["id"]);
?>
<div id="container-Delete">
    <form method="post" id="edit-form" action="modules/delete_list_function.php">
        <input class="form-control" type="hidden" name="ID" value="<?php echo $data["id"]?>">
        <input class="form-control" type="text" name="Name" disabled value="<?php echo $data["name"];?>"><i class="fa fa-user"></i>
        <button class="btn btn-light" name="submit">Verwijder deze list?</button>
    </form>
</Div>
<?php include "../footer.php";?>