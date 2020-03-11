<?php include "header.php";?>
<?php require "function.php";?>
<?php
    $data = getListspec($_GET["id"]);
?>
<div id="container-edit">
    <form method="post" id="edit-form" action="modules/edit_list_function.php">
        <input class="form-control" type="hidden" name="id" value="<?php echo $data["id"]?>">
        <input class="form-control" type="text" name="name" value="<?php echo $data["name"];?>"><i class="fa fa-user"></i>
        <button class="btn btn-light" name="submit">Verander uw list?</button>
    </form>
</div>

<?php include "footer.php";?>