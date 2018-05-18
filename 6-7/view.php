<?php
include_once 'config.php';
include_once 'partials/header.php';

$id = $_GET['id'];
 
$show = mysqli_query($conn, "SELECT * FROM posts join users ON users.id_user = posts.createdBy where posts.id=$id");
$comments = mysqli_query($conn, "SELECT * FROM comments WHERE postId=$id");
?>
<div class="row">
    <div class="posts col-lg-8 col-md-10 mx-auto">
    <?php foreach($show as $item): ?>
        <div class="item">
            <a href="view.php?id=<?php echo $item['id'] ?>"><h4><?php echo $item['title'] ?></h4></a>
            <span>Oleh : <b><?php echo $item['username'] ?></b> </span>
            <p><?php echo $item['content'] ?></p>
        <hr>
        </div>
    <?php endforeach; ?>
    <h3>Comments :</h3>
    <?php foreach($comments as $item): ?>
    <div class="col col-s-12">
        <?php echo $item['comment']; ?>
    </div>
    <?php endforeach; ?>
    </div>
</div>

<?php include_once 'partials/footer.php'; ?>
