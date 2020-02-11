<?php include "header.php";?>
<?php require "function.php";?>

<Div class="container">
    <h2>Content</h2>
    <?php
    $result=GetAllCheck();
    foreach($result as $results){      
    ?>
    <div id="container-fluid" style="background-color:#563d7c; padding:10px ;">
    <?php echo $results['ID']; ?>
        <h2 class="title"><?php echo $results['Name']; ?></h2>
        <p class="text"><?php echo $results['Description']; ?></p>
        <button class="button" href="<?php  ?>">Edit</button>
        
    </div>
    <?php 
    }
    ?>
</Div>
<div class="container">
    <p>extra content:</p>


</div>
<?php include "footer.php";?>