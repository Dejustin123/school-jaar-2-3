<?php include "header.php";?>
<?php require "function.php";?>

<Div class="container">
    <form method="post" action="modules/create_function.php" name="create_form">
        <input type="text" name="Name"></input>
        <input type="text-area" name="Description"></input>
        <select name="Status" id="select">
            <option value="1">In afwerking</option>
            <option value="2">Klaar</option>
            <option value="3">Bezig</option>
            <option value="4">Nog beginnen</option>
        </select>
        <button name="submit" >Maak Check aan</button>
    </form>
</Div>
<div class="container">
    <p>extra content:</p>
</div>
<?php include "footer.php";?>