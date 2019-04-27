<?php
    $title=$_POST['title'];
    $content=$_POST['content'];

    $sql="INSERT INTO post (title, post) VALUES (:title,:post)";
    $query=$pdo-prepare($sql);
    $query->execute([
      'title'=>$title,
      'post'=>$content
    ]);
 ?>
