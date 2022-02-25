
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;
