<?php
  include_once("templates/header.php");
?>
  <main>
    <div id="title-container2">
      <h1>Categorias</h1>
    </div>
    <div id="posts-container2">
      <?php foreach($posts2 as $post): ?>
        <div class="post-box2">
          
          <h2 class="post-title2">
            <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
            <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>"></a>
          </h2>
          
        </div>
      <?php endforeach; ?>
    </div>
  </main>
<?php
  include_once("templates/footer.php")
?>