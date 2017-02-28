-- phpMyAdmin SQL Dump
-- version 3.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Fev 28, 2017 as 06:58 AM
-- Versão do Servidor: 5.0.51
-- Versão do PHP: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `ldi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_agents`
--

CREATE TABLE IF NOT EXISTS `twatch_agents` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `browser` tinyint(3) unsigned NOT NULL,
  `agent` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `browser` (`browser`,`agent`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `twatch_agents`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_agentsc`
--

CREATE TABLE IF NOT EXISTS `twatch_agentsc` (
  `dt` date NOT NULL,
  `agent` smallint(5) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `dt` (`dt`,`agent`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_agentsc`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_agentsc_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_agentsc_mon` (
  `mon` char(4) NOT NULL,
  `agent` smallint(5) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `mon` (`mon`,`agent`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_agentsc_mon`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_allreadt`
--

CREATE TABLE IF NOT EXISTS `twatch_allreadt` (
  `page` int(10) unsigned NOT NULL,
  `avgtime` float unsigned NOT NULL,
  `avgc` int(10) unsigned NOT NULL,
  UNIQUE KEY `page` (`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_allreadt`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_browsersc`
--

CREATE TABLE IF NOT EXISTS `twatch_browsersc` (
  `dt` date NOT NULL,
  `browser` tinyint(3) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `dt` (`dt`,`browser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_browsersc`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_browsersc_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_browsersc_mon` (
  `mon` char(4) NOT NULL,
  `browser` tinyint(3) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `mon` (`mon`,`browser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_browsersc_mon`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_cousc`
--

CREATE TABLE IF NOT EXISTS `twatch_cousc` (
  `dt` date NOT NULL,
  `country` char(2) NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `dt` (`dt`,`country`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_cousc`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_cousc_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_cousc_mon` (
  `mon` char(4) NOT NULL,
  `country` char(2) NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `mon` (`mon`,`country`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_cousc_mon`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_errors`
--

CREATE TABLE IF NOT EXISTS `twatch_errors` (
  `dt` int(11) NOT NULL,
  `txt` text NOT NULL,
  KEY `dt` (`dt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_errors`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_general`
--

CREATE TABLE IF NOT EXISTS `twatch_general` (
  `field` char(40) NOT NULL,
  `value` char(40) NOT NULL,
  PRIMARY KEY  (`field`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_general`
--

INSERT INTO `twatch_general` (`field`, `value`) VALUES
('version', '0.234'),
('tdif', '0'),
('tzname', 'New York Time'),
('first', '1488210802'),
('davail', '1485914400'),
('dclear', '3'),
('mtrim', '1'),
('mtrimc', '20'),
('dtrim', '3'),
('dtrimc', '20'),
('uclear', '2'),
('pathold', '6'),
('pubrep', '0'),
('autorep', '1'),
('stop', '0'),
('relogin_default', '783330d887f0c73bcd48c134b0533b01'),
('relogin_default_tm', '1488210818');

-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_hits`
--

CREATE TABLE IF NOT EXISTS `twatch_hits` (
  `dt` date NOT NULL,
  `count` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`dt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_hits`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_hits_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_hits_mon` (
  `mon` char(4) NOT NULL,
  `count` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`mon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_hits_mon`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_hourly`
--

CREATE TABLE IF NOT EXISTS `twatch_hourly` (
  `dt` date NOT NULL,
  `hr` tinyint(3) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `dt` (`dt`,`hr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_hourly`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_hourly_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_hourly_mon` (
  `mon` char(4) NOT NULL,
  `hr` tinyint(3) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `mon` (`mon`,`hr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_hourly_mon`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_ipcou`
--

CREATE TABLE IF NOT EXISTS `twatch_ipcou` (
  `ipfrom` int(10) unsigned NOT NULL,
  `ipto` int(10) unsigned NOT NULL,
  `code` char(2) NOT NULL,
  UNIQUE KEY `ipto` (`ipto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_ipcou`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_ippages`
--

CREATE TABLE IF NOT EXISTS `twatch_ippages` (
  `dt` int(11) NOT NULL,
  `ip` char(15) NOT NULL,
  `ord` smallint(5) unsigned NOT NULL auto_increment,
  `page` int(10) unsigned NOT NULL,
  `pagedt` int(10) unsigned NOT NULL,
  UNIQUE KEY `dt` (`dt`,`ip`,`ord`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `twatch_ippages`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_ipreadt`
--

CREATE TABLE IF NOT EXISTS `twatch_ipreadt` (
  `dt` date NOT NULL,
  `ip` char(15) NOT NULL,
  `page` int(10) unsigned NOT NULL,
  `time` smallint(5) unsigned NOT NULL,
  UNIQUE KEY `dt` (`dt`,`ip`,`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_ipreadt`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_ips`
--

CREATE TABLE IF NOT EXISTS `twatch_ips` (
  `dt` int(11) NOT NULL,
  `ip` char(15) NOT NULL,
  `last` int(11) NOT NULL,
  `proxy` char(15) NOT NULL,
  `proxyresolved` char(60) NOT NULL,
  `proxycou` char(2) NOT NULL,
  `agent` smallint(5) unsigned NOT NULL,
  `robot` smallint(5) unsigned NOT NULL,
  `resolved` char(60) NOT NULL,
  `country` char(2) NOT NULL,
  PRIMARY KEY  (`ip`,`dt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_ips`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_miles`
--

CREATE TABLE IF NOT EXISTS `twatch_miles` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `dt` date NOT NULL,
  `txt` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 PACK_KEYS=1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `twatch_miles`
--

INSERT INTO `twatch_miles` (`id`, `dt`, `txt`) VALUES
(1, '2017-02-27', 'TraceWatch Started logging');

-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_monreadt`
--

CREATE TABLE IF NOT EXISTS `twatch_monreadt` (
  `mon` char(4) NOT NULL,
  `page` int(10) unsigned NOT NULL,
  `avgtime` float unsigned NOT NULL,
  `avgc` int(10) unsigned NOT NULL,
  UNIQUE KEY `mon` (`mon`,`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_monreadt`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_pages`
--

CREATE TABLE IF NOT EXISTS `twatch_pages` (
  `id` int(11) NOT NULL auto_increment,
  `page` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `page` (`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `twatch_pages`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_pagesc`
--

CREATE TABLE IF NOT EXISTS `twatch_pagesc` (
  `dt` date NOT NULL,
  `page` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `dt` (`dt`,`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_pagesc`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_pagesc_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_pagesc_mon` (
  `mon` char(4) NOT NULL,
  `page` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `mon` (`mon`,`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_pagesc_mon`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_paths`
--

CREATE TABLE IF NOT EXISTS `twatch_paths` (
  `yweak` char(4) NOT NULL,
  `p1` int(10) unsigned NOT NULL,
  `p2` int(10) unsigned NOT NULL,
  `p3` int(10) unsigned NOT NULL,
  `p4` int(10) unsigned NOT NULL,
  `p5` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `yweak` (`yweak`,`p1`,`p2`,`p3`,`p4`,`p5`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_paths`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_refdoms`
--

CREATE TABLE IF NOT EXISTS `twatch_refdoms` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `domain` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `domain` (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `twatch_refdoms`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_refgroupsc`
--

CREATE TABLE IF NOT EXISTS `twatch_refgroupsc` (
  `dt` date NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `domain` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `dt` (`dt`,`type`,`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_refgroupsc`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_refgroupsc_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_refgroupsc_mon` (
  `mon` char(4) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `domain` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `mon` (`mon`,`type`,`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_refgroupsc_mon`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_refs`
--

CREATE TABLE IF NOT EXISTS `twatch_refs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `type` tinyint(3) unsigned NOT NULL,
  `domain` int(10) unsigned NOT NULL,
  `ref` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `type` (`type`,`domain`,`ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `twatch_refs`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_refsc`
--

CREATE TABLE IF NOT EXISTS `twatch_refsc` (
  `dt` date NOT NULL,
  `ref` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `dt` (`dt`,`ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_refsc`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_refsc_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_refsc_mon` (
  `mon` char(4) NOT NULL,
  `ref` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `mon` (`mon`,`ref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_refsc_mon`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_robotsc`
--

CREATE TABLE IF NOT EXISTS `twatch_robotsc` (
  `dt` date NOT NULL,
  `robot` smallint(5) unsigned NOT NULL,
  `page` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `dt` (`dt`,`robot`,`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_robotsc`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_robotsc_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_robotsc_mon` (
  `mon` char(4) NOT NULL,
  `robot` smallint(5) unsigned NOT NULL,
  `page` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `mon` (`mon`,`robot`,`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_robotsc_mon`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_sessions`
--

CREATE TABLE IF NOT EXISTS `twatch_sessions` (
  `dt` date NOT NULL,
  `count` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`dt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_sessions`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_sessions_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_sessions_mon` (
  `mon` char(4) NOT NULL,
  `count` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`mon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_sessions_mon`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `twatch_weekday_mon`
--

CREATE TABLE IF NOT EXISTS `twatch_weekday_mon` (
  `mon` char(4) NOT NULL,
  `wd` tinyint(3) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL,
  UNIQUE KEY `mon` (`mon`,`wd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=1;

--
-- Extraindo dados da tabela `twatch_weekday_mon`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
