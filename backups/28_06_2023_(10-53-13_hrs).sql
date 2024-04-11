SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS militares;

USE militares;

DROP TABLE IF EXISTS adi_datos;

CREATE TABLE `adi_datos` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `id_adi` int(11) NOT NULL,
  PRIMARY KEY (`id_a`),
  KEY `id_adi` (`id_adi`),
  CONSTRAINT `adi_datos_ibfk_1` FOREIGN KEY (`id_adi`) REFERENCES `region_tabla` (`id_b`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

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
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO cargos VALUES("1","SUPER USUARIO");
INSERT INTO cargos VALUES("2","ADMINISTRADOR");
INSERT INTO cargos VALUES("3","USUARIO GENERAL");
INSERT INTO cargos VALUES("4","USUARIO DESHABILITADO");



DROP TABLE IF EXISTS cursos;

CREATE TABLE `cursos` (
  `id_cu` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_cursos` int(11) NOT NULL,
  PRIMARY KEY (`id_cu`),
  KEY `id_cursos` (`id_cursos`),
  CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_cursos`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO cursos VALUES("10","NO","SI","SI","SI","SI","NO","SI","SI","SI","SI","SI","SI","HDFG","FGH","FGHD","22");
INSERT INTO cursos VALUES("11","NO","NO","NO","NO","NO","NO","NO","NO","NO","NO","NO","NO","0","0","0","25");
INSERT INTO cursos VALUES("12","NO","NO","NO","NO","NO","NO","NO","NO","NO","NO","NO","NO","0","0","0","26");



DROP TABLE IF EXISTS datos_militar;

CREATE TABLE `datos_militar` (
  `id_m` int(11) NOT NULL AUTO_INCREMENT,
  `adi` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `zodi` int(11) NOT NULL,
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
  `id_mili` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_m`),
  KEY `id_mili` (`id_mili`),
  KEY `zodi` (`zodi`),
  KEY `adi` (`adi`),
  KEY `region` (`region`),
  CONSTRAINT `datos_militar_ibfk_1` FOREIGN KEY (`id_mili`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `datos_militar_ibfk_2` FOREIGN KEY (`zodi`) REFERENCES `zodi_tabla` (`id_c`),
  CONSTRAINT `datos_militar_ibfk_3` FOREIGN KEY (`adi`) REFERENCES `adi_datos` (`id_a`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `datos_militar_ibfk_4` FOREIGN KEY (`region`) REFERENCES `region_tabla` (`id_b`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO datos_militar VALUES("19","4","1","1","S/1RO","UNIVERSITARIO","ANALISTA DE SISTEMAS","ANALISTA DE SISTEMAS","JEFE DE DESARROLLO NACIONAL","PIE DE LUCHA","NO","0","0","0","0","0","NO","0","0","ML","45","57","SI","SI","8 AÑO","1 Y 3 MESES","2022","22","1");
INSERT INTO datos_militar VALUES("20","3","1","1","MAY","UNIVERSITARIO","ABOGADO","LOCUTOR","JEFE DE COMUNICACIONES","PIE DE LUCHA","NO","0","0","0","0","0","NO","0","0","MR","42","57","SI","SI","15","1 Y 3 MESES","2022","23","1");
INSERT INTO datos_militar VALUES("21","3","1","1","MIL","TSU","TECNICO SUPERIOR EN ADMINISTRACION","TECNICO SUPERIOR EN ADMINISTRACION","0","CMDT SEDI","NO","0","0","0","0","0","NO","0","0","SS","41","54","SI","SI","0","0","0","25","1");
INSERT INTO datos_militar VALUES("22","5","1","1","MIL","UNIVERSITARIO","INGENIERO EN INFORMATICA","MILICIANO","0","CMDT SEDI","NO","0","0","0","0","0","NO","0","0","SS","39","54","SI","SI","0","0","\n0","26","1");
INSERT INTO datos_militar VALUES("23","5","1","1","MIL","BACHILLER","0","ESTUDIANTE","0","CMDT SEDI","NO","0","0","0","0","0","NO","0","0","SS","38","50","SI","SI","0","0","\n0","27","1");
INSERT INTO datos_militar VALUES("25","4","1","1","SM/2DA","BACHILLER","0","0","0","CMDT SEDI","NO","0","0","0","0","0","NO","0","0","MS","45","50","SI","SI","0","0","\n0","24","1");



DROP TABLE IF EXISTS datos_salud;

CREATE TABLE `datos_salud` (
  `id_s` int(11) NOT NULL AUTO_INCREMENT,
  `dental` varchar(100) NOT NULL,
  `alergico` varchar(100) NOT NULL,
  `tatuaje` varchar(100) NOT NULL,
  `enfermedad` varchar(100) NOT NULL,
  `cantidad_hijos` int(11) NOT NULL,
  `cantidad_hijas` int(11) NOT NULL,
  `cantidad_hermanos` int(11) NOT NULL,
  `cantidad_hermanas` int(11) NOT NULL,
  `vivienda_propia` varchar(100) NOT NULL,
  `condicion2` varchar(100) NOT NULL,
  `vehiculo` varchar(100) NOT NULL,
  `botas` varchar(100) NOT NULL,
  `cara` varchar(100) NOT NULL,
  `cabello` varchar(100) NOT NULL,
  `color_cabello` varchar(100) NOT NULL,
  `peso` int(11) NOT NULL,
  `estatura` int(11) NOT NULL,
  `grupo_sanguineo` varchar(100) NOT NULL,
  `color_ojos` varchar(100) NOT NULL,
  `labios` varchar(100) NOT NULL,
  `id_salud` int(11) NOT NULL,
  PRIMARY KEY (`id_s`),
  KEY `id_salud` (`id_salud`),
  CONSTRAINT `datos_salud_ibfk_1` FOREIGN KEY (`id_salud`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO datos_salud VALUES("10","SI","NO","NO","NO","3","1","1","1","NO","ALQUILADO","SI","SI","DELGADA","CRESPO","NEGRO","82","182","ORH+","CAFE","GRUESOS","22");
INSERT INTO datos_salud VALUES("11","NO","NO","NO","0","0","0","0","0","NO","0","NO","NO","REDONDA","LISO","NEGRO","68","170","ARH+","MARRONES","DELGADO","25");
INSERT INTO datos_salud VALUES("12","NO","NO","NO","NO PADESCO","0","0","0","0","NO","FAMILIAR","NO","SI","OVALADA","CRESPO","NEGRO","63","155","ARH+","MARRONES","DELGADO","26");
INSERT INTO datos_salud VALUES("13","SI","NO","NO","BAJO DE PESO Y CARDIOPATIA CONGÉNITA","0","0","0","0","NO","0","NO","SI","OVALADA","LISO","NEGRO","37","158","BRH+","MARRONES","DELGADO","27");



DROP TABLE IF EXISTS familia;

CREATE TABLE `familia` (
  `id_f` int(11) NOT NULL AUTO_INCREMENT,
  `parentesco` varchar(100) NOT NULL,
  `cedula1` int(11) NOT NULL,
  `nombref` varchar(100) NOT NULL,
  `telefono2` varchar(11) NOT NULL,
  `ocupacion` varchar(100) NOT NULL,
  `id_familia` int(11) NOT NULL,
  PRIMARY KEY (`id_f`),
  KEY `id_familia` (`id_familia`),
  CONSTRAINT `familia_ibfk_1` FOREIGN KEY (`id_familia`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO familia VALUES("19","PADRE","3023501","JUAN MARTINEZ","04164858011","ELECTRICISTA JUBILADO","22");
INSERT INTO familia VALUES("20","MADRE","3503240","SONIA VARGAS","04164852004","ENFERMERA JUBILADA","22");



DROP TABLE IF EXISTS persona;

CREATE TABLE `persona` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_registro` date NOT NULL,
  `cedula` int(11) NOT NULL,
  `apellido1` varchar(80) NOT NULL,
  `apellido2` varchar(80) NOT NULL,
  `nombre1` varchar(80) NOT NULL,
  `nombre2` varchar(80) NOT NULL,
  `genero` varchar(80) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO persona VALUES("22","2023-06-15","12192333","MARTINEZ","VARGAS","JACOBO","FRANCISCO","HOMBRE","04120871581","1976-10-27","46","SOLTERO","SI","0019075016","0000088416","kaki S1 jacobo.jpg","JACOBOFMARTINEZ@GMAIL.COM","@JACOBOM64768550","GNOSTICO","AGUA SALADA","CALLE PRINCIPAL DE AGUA SALADA","ESCUELA ESTADAL BASICA AGUA SALADA","ANGOSTURA DEL ORINOCO","AGUA SALADA","AGUA SALADA","ESCUELA ESTADAL BASICA AGUA SALADA","SECTOR 1 AGUA SALADA","BANFANB","01770012041100601173","CONCEJO MUNICIPAL ANGOSTURA DEL ORINOCO","CALLE IGUALDAD CRUCE CONCORDIA","02856323049","ANALISTA EN SISTEMA ");
INSERT INTO persona VALUES("23","2023-06-15","8545497","MONROY"," ","EDGAR","DE JESUS","HOMBRE","04249575074","1955-07-27","67","SOLTERO","NO","0","0","IMG-20230607-WA0095.jpg","EDGARMONROY977@GMAIL.COM","MMAKERAN622","CATOLICO","AV UPATA","SECTOR BARRIO A JURO DERECHA AVENIDA UPATA. FRENTE AVENIDA JOSE MENDEZ.","ESCUELA DE MEDICINA DE LA UNIVERSIDAD DE ORIENTE","ANGOSTURA DEL ORINOCO","CATEDRAL","CATEDRAL","ESCUELA DE MEDICINA DE LA UNIVERSIDAD DE ORIENTE","SECTOR BARRIO A JURO DERECHA AVENIDA UPATA. FRENTE AVENIDA JOSE MENDEZ.","VENEZUELA","0102","ELECTRICA FM","SECTOR BARRIO A JURO DERECHA AVENIDA UPATA. FRENTE AVENIDA JOSE MENDEZ","0285","LOCUTOR");
INSERT INTO persona VALUES("24","2023-06-19","11172529","ARCINIEGAS","GONZALEZ","LUIS","MANUEL","HOMBRE","04249202129","1971-07-18","51","CASADO","SI","0000000","00000000","11172529.jpg","LARCINIEGASG@GMAIL.COM","@LARCINIEGASG","CATOLICO","JOSE ANTONIO PAEZ","CALLE NUEVA ESPARTA CASA N° 47 CIUDAD BOLIVAR","622 MAKERAN","ANGOSTURA DEL ORINOCO","JOSE ANTONIO PAEZ","JOSE ANTONIO PAEZ","JOSE ANTONIO PAEZ","JOSE ANTONIO PAEZ I","VENEZUELA","0177001385000000","COMANDO DE ZODI DE MILICIA","AVENIDA PASEO LIBERTADOR SEDE ZODI BOLIVAR","02856540525","ANALISTA");
INSERT INTO persona VALUES("25","2023-06-23","22849732","ALVAREZ","ALVARADO","ALEJANDRO","CELSO","HOMBRE","04249222463","1994-03-18","29","CASADO","NO","0","0","1.PNG","ALEJANDRO@GMAIL.COM","0","0","BLOQUES DEL PERU","EDIFICIO 6 APRTAMENTO 0305 PISO 3 EL PERU","CEI JOSE TOMAS RAMOS","ANGOSTURA DE ORINOCO","AGUA SALADA","AGUA SALADA","CEI JOSE TOMAS RAMOS","BLOQUES DEL PERU","VENEZUELA","0","0","0","0","0");
INSERT INTO persona VALUES("26","2023-06-23","20774244","ARGUELLOS","NUÑEZ","ANTONIO","GUILLERMO","HOMBRE","04167986127","1994-08-28","28","SOLTERO","NO","0","0","2.PNG","ANTONIOGUILLERMO@GMAIL.COM","0","0","BLOQUES DEL PERU","EDIFICIO 6 APARTAMENTO 0306 PISO 3 EL PERU","CEI JOSE TOMAS RAMOS","ANGOSTURA DEL ORINOCO","AGUA SALADA","AGUA SALADA","CEI JOSE TOMAS RAMOS","BLOQUES DEL PERU","VENEZUELA","0","0","0","0","0");
INSERT INTO persona VALUES("27","2023-06-23","27182347","GONZALEZ","PEREZ","COROMOTO","MARIANGEL","MUJER","04269383488","1998-12-07","24","SOLTERO","NO","0","0","3.PNG","COROMOTO@GMAIL.COM","0","0","BLOQUES DEL PERU","EDIFICIOS 6 APARTAMENTO 0001 PISO. PLANTA BAJA EL PERU","CEI JOSE TOMAS RAMOS","ANGOSTURA DEL ORINOCO","AGUA SALADA","AGUA SALADA","CEI JOSE TOMAS RAMOS","BLOQUES DEL PERU","VENEZUELA","0","0","0","0","0");



DROP TABLE IF EXISTS preguntas;

CREATE TABLE `preguntas` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta1` varchar(100) NOT NULL,
  `pregunta2` varchar(100) NOT NULL,
  `pregunta3` varchar(100) NOT NULL,
  `respuesta1` varchar(100) NOT NULL,
  `respuesta2` varchar(100) NOT NULL,
  `respuesta3` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_r`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO preguntas VALUES("8","NOMBRE DE MI MADRE","NOMBRE DE MI PADRE","COLOR FAVORITO","maria","daniel","azul","61");
INSERT INTO preguntas VALUES("9","NOMBRE DE MI MADRE","NOMBRE DE MI PADRE","COLOR FAVORITO","verus","deivys","morado","65");



DROP TABLE IF EXISTS region_tabla;

CREATE TABLE `region_tabla` (
  `id_b` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion1` varchar(100) NOT NULL,
  `id_region` int(11) NOT NULL,
  PRIMARY KEY (`id_b`),
  KEY `id_region` (`id_region`),
  CONSTRAINT `region_tabla_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `zodi_tabla` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO region_tabla VALUES("1","GUAYANA","1");



DROP TABLE IF EXISTS tarea;

CREATE TABLE `tarea` (
  `id_t` int(11) NOT NULL AUTO_INCREMENT,
  `tareas` text NOT NULL,
  `id_tarea` int(11) NOT NULL,
  PRIMARY KEY (`id_t`),
  KEY `id_tarea` (`id_tarea`),
  CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`id_tarea`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO tarea VALUES("12","MILITAR","22");
INSERT INTO tarea VALUES("13","0","25");
INSERT INTO tarea VALUES("14","0","26");
INSERT INTO tarea VALUES("15","ASDF","24");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `cargo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cargo` (`cargo`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `cargos` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO usuarios VALUES("61","JACOBO MARTINEZ","jacobo","JACOBO@GMAIL.COM","92bd4f5ff6b8b3fbbf0b7e083ca8505c133c86c2b028970c2e8060f578932568925e2994c72336e22ef9df0dc9e15ee9f89aa48f44e16d4b6da01d4f3ef983c7","1","2023-06-11");
INSERT INTO usuarios VALUES("62","ANGGELA CASTILLO","anggela","ANGGELACASTLE18@GMAIL.COM","3a83ee024776afac8466fe303dafd0765a5369d83aa6fb664ae0cbcec0722d7d623e9e9a8db422314b55100f5299da53e8a6f61db21c8287b644dd657ff8642a","1","2023-06-14");
INSERT INTO usuarios VALUES("63","ARCINIEGAS","Arciniegas1","LARCINIEGASG@GMAIL.COM","1c8db5cf4e8a10b96386cf71b8cdabfe14a582d66652ef299f3b15244282993dc35387658ab914c85cdabd1760d596ec8c52e1d939fe4cfed2fc99b9fb665705","2","2023-06-15");
INSERT INTO usuarios VALUES("65","DEIVYS GAMARRA","deivys","ADMIN@GMAIL.COM","11d4f616f12fa75c5a2ce117cf183edac46db546a833cf17de9be03b94c476ca40f4a0be98e904b28948358d33fd8a846b3f86ff5734dc57f6a6826ab7553677","1","2023-06-16");
INSERT INTO usuarios VALUES("67","DANIEL TORREZ","daniel","DANIEL@GMAIL.COM","538f53e2a9dc8be8f4d34e90049548499cb2f54bee27b59e40d9db6d2c02c42e9f6cd517b156431b7fce4b5e2a6ace9adf12ebd33eea9959708f7467a535ec01","2","2023-06-27");



DROP TABLE IF EXISTS zodi_tabla;

CREATE TABLE `zodi_tabla` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion2` varchar(100) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO zodi_tabla VALUES("1","BOLIVAR");



SET FOREIGN_KEY_CHECKS=1;