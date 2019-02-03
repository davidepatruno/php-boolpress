<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Boolpress</title>
  </head>
  <body>
    <?php include 'data.php';?>
    <div class="posts wrapper">
      <?php
      foreach ($posts as $post){
        $dataparsed = parsedata($post);
        $num_mese = $dataparsed['month'];
        $meseTesto = mesedata($num_mese);
        $num_giorno = $dataparsed['day'];
        $ora_post = $dataparsed['hour'];
        $min_post = $dataparsed['minute'];
        $testopost = postEcho150($post['content'], 150);
      ?>
      <ul>
        <li>
          <a href="post-detail.php?slug=<?php echo $post['slug'];?>">
            <h2 class="title_post"><?php echo $post['title']; ?></h2>
            <span class="data_post">Pubblicato il <?php echo "$num_giorno $meseTesto";?> alle <?php echo "$ora_post:$min_post";?></span>
            <p class="text_post"><?php echo $testopost; ?></p>
          </a>
        </li>
      </ul>
    <?php }; ?>


    </div>

  </body>
</html>
<?php
