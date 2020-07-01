<?php include "../module-header.php";?>
<?php require "../function.php";?>

<?php
$results = getList();
?>


<Div class="form-create">
    <h1>Maak een list aan</h1>
    <form method="post" action="modules/create_list_function.php" name="create_list_form">
        <input class="form-control" type="text" value="name" name="Name"></input>
        <button class="btn btn-light" name="submit" >Maak een list aan</button>
    </form>
</Div>
<?php include "../footer.php";?>