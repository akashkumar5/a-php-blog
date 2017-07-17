This will be a blog template in codeigniter framework every one is invited to make it better

#run this sql queries for start

CREATE TABLE IF NOT EXISTS basic ( id int(11) NOT NULL, basic int(11) NOT NULL ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS categories ( category_id int(11) NOT NULL AUTO_INCREMENT, category varchar(255) COLLATE utf8_unicode_ci NOT NULL, category_image varchar(255) COLLATE utf8_unicode_ci NOT NULL, created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (category_id) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS comments ( id int(11) NOT NULL AUTO_INCREMENT, post_id int(11) NOT NULL, name varchar(255) COLLATE utf8_unicode_ci NOT NULL, email varchar(255) COLLATE utf8_unicode_ci NOT NULL, comment text COLLATE utf8_unicode_ci NOT NULL, comment_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (id) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS posts ( id int(11) NOT NULL AUTO_INCREMENT, category_id int(11) NOT NULL, title varchar(255) COLLATE utf8_unicode_ci NOT NULL, content text COLLATE utf8_unicode_ci NOT NULL, post_image varchar(255) COLLATE utf8_unicode_ci NOT NULL, slug varchar(255) COLLATE utf8_unicode_ci NOT NULL, date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, PRIMARY KEY (id) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS users ( id int(11) NOT NULL AUTO_INCREMENT, user_id int(11) NOT NULL, name varchar(255) COLLATE utf8_unicode_ci NOT NULL, username varchar(255) COLLATE utf8_unicode_ci NOT NULL, email varchar(255) COLLATE utf8_unicode_ci NOT NULL, password varchar(255) COLLATE utf8_unicode_ci NOT NULL, joined_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (id) ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

set up your localhost in application/config/config.php as your host host name set up you database setting in application/config/database.php

Now you are ready try it thanks
