<?php

  $query=$pdo->prepare('SELECT * FROM `POST` ORDER BY id_post DESC');
  $query->execute();
  // $posts=Blogpost::query()->orderBy('id','desc')->get();
  $posts=$query->fetchAll(PDO::FETCH_ASSOC);

 ?>
