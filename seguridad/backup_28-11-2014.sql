

CREATE TABLE `viaje` (
  `idviaje` int(11) NOT NULL AUTO_INCREMENT,
  `idproveedor` int(11) NOT NULL,
  `idventa` bigint(20) NOT NULL,
  `valorm3` int(11) NOT NULL,
  `totalmetros` int(11) NOT NULL,
  `valorviaje` bigint(20) NOT NULL,
  `costoviaje` bigint(20) NOT NULL,
  `idvehiculo` int(11) NOT NULL,
  `idconductor` int(11) NOT NULL,
  PRIMARY KEY (`idviaje`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO viaje VALUES("1","5","157","6000","7","42000","42000","0","0");
INSERT INTO viaje VALUES("2","5","159","7000","7","49000","49000","0","0");
INSERT INTO viaje VALUES("3","5","172","6667","3","20000","20000","0","0");
INSERT INTO viaje VALUES("4","5","175","6000","588","3528000","3528000","0","0");



