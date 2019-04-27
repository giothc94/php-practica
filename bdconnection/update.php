<?php
  if(isset($_POST)){
    $newtitle=$_POST['title'];
    $newpost=$_POST['content'];
    $id=$_POST['id'];

    $sql='UPDATE post SET title=:newtitle, post=:newpost WHERE id_post=:id';

    $update=$pdo->prepare($sql);
    $update->execute(['newtitle'=>$newtitle,'newpost'=>$newpost,'id'=>$id]);
    header("Location: ../admin/manage.php");
  }
