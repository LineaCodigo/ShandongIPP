

DROP TABLE IF EXISTS `categorias`;


CREATE TABLE `categorias` (
  `idCategorias` int(11) NOT NULL AUTO_INCREMENT,
  `NomCategoria` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`idCategorias`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'COUNTER'),(2,'RULETAS');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupoproducto`
--

DROP TABLE IF EXISTS `grupoproducto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupoproducto` (
  `idGrupoProducto` int(11) NOT NULL AUTO_INCREMENT,
  `idProductos` int(11) NOT NULL,
  PRIMARY KEY (`idGrupoProducto`),
  KEY `fk_GrupoProducto_Productos_idx` (`idProductos`),
  CONSTRAINT `fk_GrupoProducto_Productos` FOREIGN KEY (`idProductos`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupoproducto`
--

LOCK TABLES `grupoproducto` WRITE;
/*!40000 ALTER TABLE `grupoproducto` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupoproducto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL AUTO_INCREMENT,
  `NomProducto` varchar(60) DEFAULT NULL,
  `PrecioTienda` decimal(10,2) DEFAULT NULL,
  `PrecioXMayor` decimal(10,2) DEFAULT NULL,
  `PrecioOnline` decimal(10,2) DEFAULT NULL,
  `UnidadMedida` varchar(6) DEFAULT NULL,
  `idCategorias` int(11) NOT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Descuento` int(11) DEFAULT NULL,
  `CodigoSIGOP` varchar(45) DEFAULT NULL,
  `nomurl` varchar(100) DEFAULT NULL,
  `CarpetaPrincipal` varchar(45) DEFAULT NULL,
  `NombreArchivo` varchar(45) DEFAULT NULL,
  `ArchivosSecun` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idProductos`),
  KEY `fk_Productos_Categorias1_idx` (`idCategorias`),
  CONSTRAINT `fk_Productos_Categorias1` FOREIGN KEY (`idCategorias`) REFERENCES `categorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Counter tipo uno',85.00,0.00,0.00,'UNIDAD',1,'BLANCO','250 watts de potencia y Deshidrata',0,NULL,'Counter-tipo-uno','COUNTER','1_1.JPG','1_2.JPG,1_3.JPG,1_4.JPG'),(2,'Counter tipo dos',150.50,0.00,0.00,'UNIDAD',1,'BLANCO',NULL,0,NULL,'Counter-tipo-dos','COUNTER','2_1.JPG',NULL),(3,'Ruleta grande',90.00,0.00,0.00,'UNIDAD',2,'BLANCO',NULL,0,NULL,'Ruleta-grande','RULETA','Ruletagrande_1.jpg','Ruletagrande_2.JPG,Ruletagrande_3.JPG'),(4,'Ruleta pequeña',80.00,0.00,0.00,'UNIDAD',2,'BLANCO',NULL,0,NULL,'Ruleta-pequeña','RULETA','Ruletapequeña_1.jpg','ruletapeque2.JPG,ruletapeque3.JPG');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productosrelacionados`
--

DROP TABLE IF EXISTS `productosrelacionados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productosrelacionados` (
  `idProductosRelacionados` int(11) NOT NULL AUTO_INCREMENT,
  `idGrupoProducto` int(11) NOT NULL,
  `idProductosVincu` int(11) NOT NULL,
  PRIMARY KEY (`idProductosRelacionados`,`idGrupoProducto`),
  KEY `fk_ProductosRelacionados_GrupoProducto1_idx` (`idGrupoProducto`),
  KEY `fk_ProductosRelacionados_Productos1_idx` (`idProductosVincu`),
  CONSTRAINT `fk_ProductosRelacionados_GrupoProducto1` FOREIGN KEY (`idGrupoProducto`) REFERENCES `grupoproducto` (`idGrupoProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ProductosRelacionados_Productos1` FOREIGN KEY (`idProductosVincu`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productosrelacionados`
--

LOCK TABLES `productosrelacionados` WRITE;

UNLOCK TABLES;
