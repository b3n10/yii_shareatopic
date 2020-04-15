CREATE TABLE `topic` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(100) NOT NULL,
  `owner` VARCHAR(100) NOT NULL,
  `points` INT NOT NULL DEFAULT '0',
  `created_at` DATETIME NOT NULL DEFAULT NOW(),
  `comments` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `topic` VALUES (NULL, "what's your favorite cartoon?",'gori', 12, NOW(), "{'1':'batmans'}");
