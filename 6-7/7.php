<?php
include_once 'config.php';
include_once 'partials/header.php';
$posts = mysqli_query($conn, "SELECT * FROM posts join users ON users.id_user = posts.createdBy");
?>
<div class="row">
    <div class="posts col-lg-8 col-md-10 mx-auto">
    <?php foreach($posts as $item): ?>
        <div class="item">
            <a href="view.php?id=<?php echo $item['id'] ?>"><h4><?php echo $item['title'] ?></h4></a>
            <p><?php echo substr($item['content'],0, 150); ?></p>
            <span>Oleh : <b><?php echo $item['username'] ?></b> </span>
        <hr>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<?php include_once 'partials/footer.php'; ?>
