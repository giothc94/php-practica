<?php
  $id=$_GET['id_post'];
  $sql='DELETE FROM post WHERE id_post=:id';
  $query=$pdo->prepare($sql);
  $query->execute(['id'=>$id]);
  header("Location: ../admin/manage.php");
 ?>
