DROP TABLE IF EXISTS `#__cuota`;

CREATE TABLE `#__cuota` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11),
  `data` TEXT NOT NULL,
  `fecha` TIMESTAMP,
  `meses` int(8), 
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


