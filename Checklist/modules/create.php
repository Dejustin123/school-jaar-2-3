<?php include "../module-header.php";?>
<?php require "../function.php";?>

<?php 
    $results = getList();
?>

<Div class="form-create">
    <h1>Maak een taak aan</h1>
    <form method="post" action="modules/create_function.php" name="create_form">
        <input class="form-control" type="text" value="name" name="Name"></input>
        <input class="form-control" value="task" type="text-area" name="Description"></input>
        <select class="form-control" name="Status" id="select">
            <option value="in afwerking">In afwerking</option>
            <option value="klaar">Klaar</option>
            <option value="bezig">Bezig</option>
            <option value="nog beginnen">Nog beginnen</option>
        </select>
        <select class="form-control" name="list_id" id="select">
            <?php 
                foreach($results as $result){
                ?><option value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option> <?php    
                }
//end foreach ?> 
        </select>
        <input class="form-control" type="time" name='Time'>
        <button class="btn btn-light" name="submit" >Maak Check aan</button>
    </form>
</Div>
<?php include "../footer.php";?>