//query

SELECT `posts`.`id`, `posts`.`title`, `posts`.`content`, `posts`.`createdBy`, `users`.`id`, `users`.`username` FROM `posts` LEFT JOIN `users` ON `posts`.`createdBy`=`users`.`id`;