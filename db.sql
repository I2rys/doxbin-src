CREATE TABLE `dox` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `views` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dox` longtext NOT NULL,
  `ip` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `dox` ADD PRIMARY KEY (`id`);
ALTER TABLE `dox` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `dox` CHANGE `views` `views` INT(11) NOT NULL DEFAULT '0';