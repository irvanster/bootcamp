//query


//posts
SELECT * FROM posts join users ON users.id_user = posts.createdBy; 
//comments 
SELECT * FROM comments WHERE postId=$id;
