<?php
  $id=$_GET['id'];
  $select='SELECT id_post, title, post FROM post WHERE id_post=:id';
    $serch=$pdo->prepare($select);
    $serch->execute(['id'=>$id]);
