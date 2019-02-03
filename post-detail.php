<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Post-detail</title>
  </head>
  <body>
    <?php
    include 'data.php';

    $slug_user = $_GET['slug'];
    foreach ($posts as $post){
      $dataparsed = parsedata($post);
      $num_mese = $dataparsed['month'];
      $meseTesto = mesedata($num_mese);
      $num_giorno = $dataparsed['day'];
      $ora_post = $dataparsed['hour'];
      $min_post = $dataparsed['minute'];
      $slug_post = $post['slug'];
        if ($slug_user == $slug_post){?>
          <div class="post wrapper">
            <div class="image">
              <img src="<?php echo $post['image'] ?>" alt="">
            </div>
            <div class="text">
              <h2 class="post_title"><?php echo $post['title'] ?></h2>
              <span class="data_post big">Pubblicato il <?php echo "$num_giorno $meseTesto";?> alle <?php echo "$ora_post:$min_post";?></span>
              <p class="text_post big"><?php echo $post['content']; ?></p>
            </div>
          </div>
    <?php }; ?>
  <?php }; ?>

  </body>
</html>
