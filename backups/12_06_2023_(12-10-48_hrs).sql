SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS militares;

USE militares;

DROP TABLE IF EXISTS adi_datos;

CREATE TABLE `adi_datos` (
  `id_a` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_adi` int NOT NULL,
  PRIMARY KEY (`id_a`),
  KEY `id_adi` (`id_adi`),
  CONSTRAINT `adi_datos_ibfk_1` FOREIGN KEY (`id_adi`) REFERENCES `region_tabla` (`id_b`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `descripcion` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO cargos VALUES("1","SUPER USUARIO");
INSERT INTO cargos VALUES("2","ADMINISTRADOR");
INSERT INTO cargos VALUES("3","USUARIO GENERAL");
INSERT INTO cargos VALUES("4","USUARIO DESHABILITADO");



DROP TABLE IF EXISTS cursos;

CREATE TABLE `cursos` (
  `id_cu` int NOT NULL AUTO_INCREMENT,
  `lectura_mapa` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tiro_combate` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zu_23` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `iglas` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sanidad` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `btr_80` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `francotirador` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `guia_aereo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `explosivista` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `paracaidismo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zapador` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mar` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cursos_no_militares` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `otros_cursos_militares` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `otras_habilidades` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_cursos` int NOT NULL,
  PRIMARY KEY (`id_cu`),
  KEY `id_cursos` (`id_cursos`),
  CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_cursos`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO cursos VALUES("9","NO","SI","SI","SI","SI","SI","SI","SI","SI","SI","SI","SI","NINGUNO","0","PROGRAMADOR","21");



DROP TABLE IF EXISTS datos_militar;

CREATE TABLE `datos_militar` (
  `id_m` int NOT NULL AUTO_INCREMENT,
  `adi` int NOT NULL,
  `region` int NOT NULL,
  `zodi` int NOT NULL,
  `jerarquia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instruccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profesion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `oficio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mision` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `condicion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `militar_profesional` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `componente` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `grado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ano_graduacion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ano_retiro` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `causa_retiro` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `servicio_militar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contingente` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ano_licenciamiento` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `talla` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `calzado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gorra` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `unif_caqui` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `unif_zamorano` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tiempo_milicia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tiempo_grado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ano_ultasce` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO datos_militar VALUES("18","4","1","1","MIL","TSU","INFORMATICO","PROGRAMADOR","0","CMDT SEDI","NO","0","0","0","0","0","SI","0","2021","XSS","40","50","SI","SI","1 AÑO","1 AÑO","\n2021","21","1");



DROP TABLE IF EXISTS datos_salud;

CREATE TABLE `datos_salud` (
  `id_s` int NOT NULL AUTO_INCREMENT,
  `dental` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alergico` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tatuaje` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `enfermedad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cantidad_hijos` int NOT NULL,
  `cantidad_hijas` int NOT NULL,
  `cantidad_hermanos` int NOT NULL,
  `cantidad_hermanas` int NOT NULL,
  `vivienda_propia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `condicion2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vehiculo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `botas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cara` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cabello` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `color_cabello` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `peso` int NOT NULL,
  `estatura` int NOT NULL,
  `grupo_sanguineo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `color_ojos` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `labios` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_salud` int NOT NULL,
  PRIMARY KEY (`id_s`),
  KEY `id_salud` (`id_salud`),
  CONSTRAINT `datos_salud_ibfk_1` FOREIGN KEY (`id_salud`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO datos_salud VALUES("9","SI","SI","SI","NINGUNA","0","0","2","0","NO","FAMILIAR","NO","SI","DELGADA","CORTO","NEGRO","53","166","ORH+","MARRON","DELGADOS","21");



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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

INSERT INTO familia VALUES("18","PADRE","11730667","DEIVYS GAMARRA","0","PROFESOR","21");



DROP TABLE IF EXISTS persona;

CREATE TABLE `persona` (
  `id_p` int NOT NULL AUTO_INCREMENT,
  `fecha_registro` date NOT NULL,
  `cedula` int NOT NULL,
  `apellido1` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellido2` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nombre1` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nombre2` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `genero` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int NOT NULL,
  `estado_civil` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `carnet_patria` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `seriall` varchar(21) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `codigo` varchar(21) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `redes_sociales` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `religion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sector` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `direccion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `unidad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `municipio` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `parroquia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apdi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bpdi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cuenta` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `numero_cuenta` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `empresa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `direccion1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefono1` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cargo1` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO persona VALUES("21","2023-06-12","28731970","GAMARRA","NUÑEZ","DEIVYS","FRANCISCO DE JESUS","HOMBRE","04143869692","2000-09-13","22","SOLTERO","NO","0","0","121993650_392883731737876_6072507473190718528_n.jpg","GAMARRAYNUNEZD@GMAIL.COM","FACEBOOK","POLITEISTA","LOS PROCERES","CALLE ANDRES PEREZ ALMANZA","AGUA SALADA","ANGOSTURA DEL ORINOCO","AGUAL SALADA","0","0","0","VENEZUELA","010202002","UPTEB","CASCO HISTORICO","0","SOPORTE ADMINISTRATIVO");



DROP TABLE IF EXISTS preguntas;

CREATE TABLE `preguntas` (
  `id_r` int NOT NULL AUTO_INCREMENT,
  `pregunta1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pregunta2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pregunta3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `respuesta1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `respuesta2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `respuesta3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_r`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO preguntas VALUES("7","NOMBRE DE MI MADRE","NOMBRE DE MI PADRE","COLOR FAVORITO","verouska","deivys","morado","55");
INSERT INTO preguntas VALUES("8","NOMBRE DE MI MADRE","NOMBRE DE MI PADRE","COLOR FAVORITO","maria","daniel","azul","61");



DROP TABLE IF EXISTS region_tabla;

CREATE TABLE `region_tabla` (
  `id_b` int NOT NULL AUTO_INCREMENT,
  `descripcion1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_region` int NOT NULL,
  PRIMARY KEY (`id_b`),
  KEY `id_region` (`id_region`),
  CONSTRAINT `region_tabla_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `zodi_tabla` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO region_tabla VALUES("1","GUAYANA","1");



DROP TABLE IF EXISTS tarea;

CREATE TABLE `tarea` (
  `id_t` int NOT NULL AUTO_INCREMENT,
  `tareas` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_tarea` int NOT NULL,
  PRIMARY KEY (`id_t`),
  KEY `id_tarea` (`id_tarea`),
  CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`id_tarea`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tarea VALUES("11","MILITAR ","21");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usuario` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `clave` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cargo` int NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cargo` (`cargo`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `cargos` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios VALUES("55","DEIVYS GAMARRA","deivys","GAMARRAYNUNEZD@GMAIL.COM","20db23abb79ccb480dab013e517df8eca2c9d8e6ccd5f3a3aaf0ef4542e5d392d210ded1f10158b48e3a72640b13c09442a6af1904f63d375585dd1708d507cd","1","2023-05-11");
INSERT INTO usuarios VALUES("61","DANIEL","daniel","DANIEL@GMAIL.COM","20db23abb79ccb480dab013e517df8eca2c9d8e6ccd5f3a3aaf0ef4542e5d392d210ded1f10158b48e3a72640b13c09442a6af1904f63d375585dd1708d507cd","2","2023-06-11");



DROP TABLE IF EXISTS zodi_tabla;

CREATE TABLE `zodi_tabla` (
  `id_c` int NOT NULL AUTO_INCREMENT,
  `descripcion2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO zodi_tabla VALUES("1","BOLIVAR");



SET FOREIGN_KEY_CHECKS=1;