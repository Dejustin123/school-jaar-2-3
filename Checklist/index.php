<?php include "header.php";?>
<?php require "function.php";?>

<Div class="container">
    <?php
    $result = GetAllCheck();
    $lists = getList();
foreach($lists as $list){

    ?><div class="list">
        <p><?php echo $list['name']?></p>
        <a href="delete_list.php?id=<?php echo $list['id'];?>" class="btn btn-danger" style="margin-bottom:5px ;"><p>Delete list?</p></a>
        <a href="edit_list.php?id=<?php echo $list['id'];?>" class="btn btn-success" style="margin-bottom:5px ;"><p>Edit list?</p></a>
    <?php
    foreach($result as $results){    
    ?>
    <?php
        if($results['list_id']===$list["id"]){
        ?>
    <div id="container-fluid" class="homepage-container" style="background-color:crimson; padding:50px ;">
        <div class="left">
            <h2 class="title"><?php echo $results['Name']; ?></h2><i class="fas fa-user"></i>
            <p class="text"><?php echo $results['Description']; ?></p>
            <p class="status" ><?php echo $results['Status']?></p>
        </div>
        <div class="right">
            <p class="time"><?php echo $results['Time'];?></p>
            <a class="button-index" href="edit.php?ID=<?php echo $results['ID'];?>">Edit<i class="fas fa-pencil-alt"></i></a>
            <a class="button-index-del" href="delete.php?ID=<?php echo $results['ID'];?>">Delete<i class="fas fa-trash-alt"></i></a>
        </div>
    </div>
    <?php 
        }//end of if 
    }
    ?> 
    </div>
    <?php
}
    ?>
</Div>
<?php include "footer.php";?>