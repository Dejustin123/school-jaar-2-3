<?php include "../module-header.php";?>
<?php require "../function.php";?>
<?php
    $data = Getcheck($_GET["ID"]);
?>
<div id="container-edit">
    <form method="post" id="edit-form" action="modules/edit_function.php">
        <input class="form-control" type="hidden" name="ID" value="<?php echo $data["ID"]?>">
        <input class="form-control" type="text" name="Name" value="<?php echo $data["Name"];?>"><i class="fa fa-user"></i>
        <input class="form-control" type="text" name="Description" value="<?php echo $data["Description"];?>">
        <select class="form-control" name="Status" id="select" value="<?php echo $data["Status"];?>">
            <option <?php if($data['Status'] == 'In afwerking'){ echo('selected'); }?> value="in afwerking">In afwerking</option>
            <option <?php if($data['Status'] == 'Klaar' ){echo('selected');}?> value="klaar">Klaar</option>
            <option <?php if($data['Status'] == 'Bezig' ){echo('selected');}?> value="bezig">Bezig</option>
            <option <?php if($data['Status'] == 'Nog beginnen' ){echo('selected');}?> value="nog beginnen">Nog beginnen</option>
        </select>
        <input class="form-control" type="time" name='Time' value="<?php echo $data["Time"];?>">
        <button class="btn btn-light" name="submit">Verander uw bericht</button>
    </form>
</div>

<?php include "../footer.php";?>