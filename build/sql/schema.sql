
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- usuario
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(150) NOT NULL,
    `apellidop` VARCHAR(150) NOT NULL,
    `apellidom` VARCHAR(150) NOT NULL,
    `telefono` VARCHAR(10) NOT NULL,
    `correo` VARCHAR(150) NOT NULL,
    `contrasena` VARCHAR(150) NOT NULL,
    `tipo` TINYINT NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- producto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(20) NOT NULL,
    `modelo` VARCHAR(20) NOT NULL,
    `genero` TINYINT NOT NULL,
    `color` VARCHAR(20) NOT NULL,
    `estilo` TINYINT NOT NULL,
    `descripcion` VARCHAR(100) NOT NULL,
    `precio` INTEGER NOT NULL,
    `imagen` VARCHAR(20) NOT NULL,
    `talla` VARCHAR(20) NOT NULL,
    `stock_original` INTEGER NOT NULL,
    `stock_actual` INTEGER,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- direccion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `direccion`;

CREATE TABLE `direccion`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER NOT NULL,
    `callepcn` VARCHAR(200) NOT NULL,
    `cp` VARCHAR(10) NOT NULL,
    `indic` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `direccion_FI_1` (`idusuario`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- favoritos
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `favoritos`;

CREATE TABLE `favoritos`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `clicked` TINYINT(1) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `favoritos_FI_1` (`idusuario`),
    INDEX `favoritos_FI_2` (`idproducto`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- compra
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `compra`;

CREATE TABLE `compra`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `estatus` TINYINT(60) NOT NULL,
    `fecha` DATE NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `compra_FI_1` (`idusuario`),
    INDEX `compra_FI_2` (`idproducto`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- envio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `envio`;

CREATE TABLE `envio`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `idcompra` INTEGER NOT NULL,
    `estatus` TINYINT NOT NULL,
    `idaddr` INTEGER NOT NULL,
    `fechaaprox` DATE NOT NULL,
    `fechaentrega` DATE NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `envio_FI_1` (`idcompra`),
    INDEX `envio_FI_2` (`idaddr`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
