//query


//posts
SELECT * FROM posts join users ON users.id_user = posts.createdBy; <br>
//comments <br>
SELECT * FROM comments WHERE postId=$id;
