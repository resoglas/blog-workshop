CREATE DATABASE IF NOT EXISTS `strapi` COLLATE 'utf8mb4_unicode_520_ci' ;
CREATE USER 'strapi'@'%' IDENTIFIED BY 'strapi' ;
GRANT ALL ON `strapi`.* TO 'strapi'@'%' ;

CREATE DATABASE IF NOT EXISTS `wordpress` COLLATE 'utf8mb4_unicode_520_ci' ;
CREATE USER 'wordpress'@'%' IDENTIFIED BY 'wordpress' ;
GRANT ALL ON `wordpress`.* TO 'wordpress'@'%' ;

FLUSH PRIVILEGES ;