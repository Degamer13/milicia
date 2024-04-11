SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS militares;

USE militares;

DROP TABLE IF EXISTS adi_datos;

CREATE TABLE `adi_datos` (
  `id_a` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `id_adi` int NOT NULL,
  PRIMARY KEY (`id_a`),
  KEY `id_adi` (`id_adi`),
  CONSTRAINT `adi_datos_ibfk_1` FOREIGN KEY (`id_adi`) REFERENCES `region_tabla` (`id_b`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO adi_datos VALUES("1","611 CACIQUE PREPOCUNATE","1");
INSERT INTO adi_datos VALUES("2","612 CUYUBINI","1");
INSERT INTO adi_datos VALUES("3","621 NASICAGUA","1");
INSERT INTO adi_datos VALUES("4","622 MAKERAN","1");
INSERT INTO adi_datos VALUES("5","623 MANAURE","1");
INSERT INTO adi_datos VALUES("6","624 TARABAY","1");
INSERT INTO adi_datos VALUES("7","625 CARONI","1");
INSERT INTO adi_datos VALUES("8","631 ATURES","1");
INSERT INTO adi_datos VALUES("9","632 ATABAPO","1");
INSERT INTO adi_datos VALUES("10","633 RIO NEGRO","1");
INSERT INTO adi_datos VALUES("11","634 ALTO ORINOCO","1");
INSERT INTO adi_datos VALUES("12","635 MANAPIARE","1");



DROP TABLE IF EXISTS cargos;

CREATE TABLE `cargos` (
  `id_c` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO cargos VALUES("1","SUPER USUARIO");
INSERT INTO cargos VALUES("2","ADMINISTRADOR");
INSERT INTO cargos VALUES("3","USUARIO GENERAL");
INSERT INTO cargos VALUES("4","CARGO EN ESPERA");



DROP TABLE IF EXISTS cursos;

CREATE TABLE `cursos` (
  `id_s` int NOT NULL AUTO_INCREMENT,
  `lectura_mapa` varchar(15) NOT NULL,
  `tiro_combate` varchar(15) NOT NULL,
  `zu_23` varchar(15) NOT NULL,
  `iglas` varchar(15) NOT NULL,
  `sanidad` varchar(15) NOT NULL,
  `btr_80` varchar(15) NOT NULL,
  `francotirador` varchar(15) NOT NULL,
  `guia_aereo` varchar(15) NOT NULL,
  `explosivista` varchar(15) NOT NULL,
  `paracaidismo` varchar(15) NOT NULL,
  `zapador` varchar(15) NOT NULL,
  `mar` varchar(15) NOT NULL,
  `cursos_no_militares` varchar(200) NOT NULL,
  `otros_cursos_militares` varchar(200) NOT NULL,
  `otras_habilidades` varchar(200) NOT NULL,
  `id_cursos` int NOT NULL,
  PRIMARY KEY (`id_s`),
  KEY `id_cursos` (`id_cursos`),
  CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_cursos`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;




DROP TABLE IF EXISTS datos_militar;

CREATE TABLE `datos_militar` (
  `id_m` int NOT NULL AUTO_INCREMENT,
  `adi` int NOT NULL,
  `region` int NOT NULL,
  `zodi` int NOT NULL,
  `jerarquia` varchar(100) NOT NULL,
  `instruccion` varchar(100) NOT NULL,
  `profesion` varchar(100) NOT NULL,
  `oficio` varchar(100) NOT NULL,
  `mision` varchar(100) NOT NULL,
  `condicion` varchar(100) NOT NULL,
  `militar_profesional` varchar(100) NOT NULL,
  `componente` varchar(100) NOT NULL,
  `grado` varchar(100) NOT NULL,
  `ano_graduacion` varchar(100) NOT NULL,
  `ano_retiro` varchar(100) NOT NULL,
  `causa_retiro` varchar(100) NOT NULL,
  `servicio_militar` varchar(100) NOT NULL,
  `contingente` varchar(100) NOT NULL,
  `ano_licenciamiento` varchar(100) NOT NULL,
  `talla` varchar(100) NOT NULL,
  `calzado` varchar(100) NOT NULL,
  `gorra` varchar(100) NOT NULL,
  `unif_caqui` varchar(100) NOT NULL,
  `unif_zamorano` varchar(100) NOT NULL,
  `tiempo_milicia` varchar(100) NOT NULL,
  `tiempo_grado` varchar(100) NOT NULL,
  `ano_ultasce` varchar(100) NOT NULL,
  `id_mili` int NOT NULL,
  `count` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_m`),
  KEY `id_mili` (`id_mili`),
  KEY `zodi` (`zodi`),
  KEY `adi` (`adi`),
  KEY `region` (`region`),
  CONSTRAINT `datos_militar_ibfk_1` FOREIGN KEY (`id_mili`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `datos_militar_ibfk_2` FOREIGN KEY (`zodi`) REFERENCES `zodi_tabla` (`id_c`),
  CONSTRAINT `datos_militar_ibfk_3` FOREIGN KEY (`adi`) REFERENCES `adi_datos` (`id_a`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `datos_militar_ibfk_4` FOREIGN KEY (`region`) REFERENCES `region_tabla` (`id_b`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO datos_militar VALUES("10","5","1","1","S/2RO","TSU","INFORMATICA","PROGRAMADOR","SFD","CMDT SEDI","NO","0","0","0","0","0","SI","FSA","32","XSS","40","55","SI","SI","2","2","\n20018","10","1");



DROP TABLE IF EXISTS datos_salud;

CREATE TABLE `datos_salud` (
  `id_s` int NOT NULL AUTO_INCREMENT,
  `dental` varchar(100) NOT NULL,
  `alergico` varchar(100) NOT NULL,
  `tatuaje` varchar(100) NOT NULL,
  `enfermedad` varchar(100) NOT NULL,
  `cantidad_hijos` int NOT NULL,
  `cantidad_hijas` int NOT NULL,
  `cantidad_hermanos` int NOT NULL,
  `cantidad_hermanas` int NOT NULL,
  `vivienda_propia` varchar(100) NOT NULL,
  `condicion2` varchar(100) NOT NULL,
  `vehiculo` varchar(100) NOT NULL,
  `botas` varchar(100) NOT NULL,
  `cara` varchar(100) NOT NULL,
  `cabello` varchar(100) NOT NULL,
  `color_cabello` varchar(100) NOT NULL,
  `peso` int NOT NULL,
  `estatura` int NOT NULL,
  `grupo_sanguineo` varchar(100) NOT NULL,
  `color_ojos` varchar(100) NOT NULL,
  `labios` varchar(100) NOT NULL,
  `id_salud` int NOT NULL,
  PRIMARY KEY (`id_s`),
  KEY `id_salud` (`id_salud`),
  CONSTRAINT `datos_salud_ibfk_1` FOREIGN KEY (`id_salud`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;




DROP TABLE IF EXISTS familia;

CREATE TABLE `familia` (
  `id_f` int NOT NULL AUTO_INCREMENT,
  `parentesco` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `cedula1` int NOT NULL,
  `nombref` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `telefono2` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `ocupacion` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `id_familia` int NOT NULL,
  PRIMARY KEY (`id_f`),
  KEY `id_familia` (`id_familia`),
  CONSTRAINT `familia_ibfk_1` FOREIGN KEY (`id_familia`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO familia VALUES("2","PADRE","11730667","FDS","324","432","10");



DROP TABLE IF EXISTS persona;

CREATE TABLE `persona` (
  `id_p` int NOT NULL AUTO_INCREMENT,
  `fecha_registro` date NOT NULL,
  `cedula` int NOT NULL,
  `apellido1` varchar(80) NOT NULL,
  `apellido2` varchar(80) NOT NULL,
  `nombre1` varchar(80) NOT NULL,
  `nombre2` varchar(80) NOT NULL,
  `genero` varchar(80) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `estado_civil` varchar(80) NOT NULL,
  `carnet_patria` varchar(30) NOT NULL,
  `seriall` varchar(21) NOT NULL,
  `codigo` varchar(21) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `redes_sociales` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `direccion` text NOT NULL,
  `unidad` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `parroquia` varchar(100) NOT NULL,
  `apdi` varchar(100) NOT NULL,
  `bpdi` varchar(100) NOT NULL,
  `updi` varchar(100) NOT NULL,
  `cuenta` varchar(100) NOT NULL,
  `numero_cuenta` varchar(30) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `direccion1` varchar(100) NOT NULL,
  `telefono1` varchar(11) NOT NULL,
  `cargo1` varchar(80) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO persona VALUES("10","2023-02-11","28731970","GAMARRA","NUÑEZ","DEIVYS","FRANCISCO","HOMBRE","0414386962","2000-09-13","SOLTERO","SI","23","23","WIN_20230208_07_54_03_Pro.jpg","GAMARRAYNUNEZ@GMAIL.COM","SI","NPSE","SF","FSD","SDF","AFDS","ADSF","SDF","DFS","ASF","VENEZUELA","0102","FVA","FADS","4223","234F");



DROP TABLE IF EXISTS preguntas;

CREATE TABLE `preguntas` (
  `id_r` int NOT NULL AUTO_INCREMENT,
  `pregunta1` varchar(100) NOT NULL,
  `pregunta2` varchar(100) NOT NULL,
  `pregunta3` varchar(100) NOT NULL,
  `respuesta1` varchar(100) NOT NULL,
  `respuesta2` varchar(100) NOT NULL,
  `respuesta3` varchar(100) NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_r`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO preguntas VALUES("3","NOMBRE DE MI MASCOTA","COMIDA FAVORITA","NOMBRE DE MI PADRE","boby","pizza","rafael","38");



DROP TABLE IF EXISTS region_tabla;

CREATE TABLE `region_tabla` (
  `id_b` int NOT NULL AUTO_INCREMENT,
  `descripcion1` varchar(100) NOT NULL,
  `id_region` int NOT NULL,
  PRIMARY KEY (`id_b`),
  KEY `id_region` (`id_region`),
  CONSTRAINT `region_tabla_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `zodi_tabla` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO region_tabla VALUES("1","GUAYANA","1");



DROP TABLE IF EXISTS tarea;

CREATE TABLE `tarea` (
  `id_t` int NOT NULL AUTO_INCREMENT,
  `tarea` text NOT NULL,
  `id_tarea` int NOT NULL,
  PRIMARY KEY (`id_t`),
  KEY `id_tarea` (`id_tarea`),
  CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`id_tarea`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;




DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `cargo` int NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cargo` (`cargo`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `cargos` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO usuarios VALUES("34","MANU","manu123?","MANU@GMAIL.COM","fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe","4","2023-02-15");
INSERT INTO usuarios VALUES("38","DEIVYS GAMARRA","deivys","GAMARRAYNUNEZ@GMAIL.COM","20db23abb79ccb480dab013e517df8eca2c9d8e6ccd5f3a3aaf0ef4542e5d392d210ded1f10158b48e3a72640b13c09442a6af1904f63d375585dd1708d507cd","1","2023-02-16");
INSERT INTO usuarios VALUES("39","ANDRES GAMARRA","Andres21?","ANDRES@GMAIL.COM","fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe","1","2023-02-15");
INSERT INTO usuarios VALUES("40","YOMELI PEREZ","yomeli15?","YOMELI@GMAIL.COM","fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe","1","2023-02-15");
INSERT INTO usuarios VALUES("42","RAFAEL GAMARRA","Rafael45?","RAFAEL@GMAIL.COM","fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe","1","2023-02-15");
INSERT INTO usuarios VALUES("43","JOSE GAMARRA","jose134?","MAR@GMAILCOM","fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe","1","2023-02-15");
INSERT INTO usuarios VALUES("44","DANIELA GAMARRA","daniela14?","DANIELA@GMAIL.COM","fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe","1","2023-02-15");
INSERT INTO usuarios VALUES("45","VICTORIAL AREVALO","Victoria13?","VICTORIA@GMAIL.COM","fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe","1","2023-02-15");
INSERT INTO usuarios VALUES("46","ADMIN","admin123","ADMIN@GMAIL.COM","fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe","1","2023-02-15");
INSERT INTO usuarios VALUES("47","DANIEL TORREZ","daniel132?","DANIEL@GMAIL.COM","fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe","1","2023-02-15");
INSERT INTO usuarios VALUES("48","ANGGELA CASTILLO","Akatsuki24","AKATSUKI@GMAIL.COM","fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe","1","2023-02-19");



DROP TABLE IF EXISTS zodi_tabla;

CREATE TABLE `zodi_tabla` (
  `id_c` int NOT NULL AUTO_INCREMENT,
  `descripcion2` varchar(100) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO zodi_tabla VALUES("1","BOLIVAR");



SET FOREIGN_KEY_CHECKS=1;