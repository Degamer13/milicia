-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-12-2023 a las 14:40:27
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `militares`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adi_datos`
--

CREATE TABLE `adi_datos` (
  `id_a` int NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_adi` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `adi_datos`
--

INSERT INTO `adi_datos` (`id_a`, `descripcion`, `id_adi`) VALUES
(1, '611 CACIQUE PREPOCUNATE', 1),
(2, '612 CUYUBINI', 1),
(3, '621 NASICAGUA', 1),
(4, '622 MAKERAN', 1),
(5, '623 MANAURE', 1),
(6, '624 TARABAY', 1),
(7, '625 CARONI', 1),
(8, '631 ATURES', 1),
(9, '632 ATABAPO', 1),
(10, '633 RIO NEGRO', 1),
(11, '634 ALTO ORINOCO', 1),
(12, '635 MANAPIARE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_c` int NOT NULL,
  `descripcion` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_c`, `descripcion`) VALUES
(1, 'SUPER USUARIO'),
(2, 'ADMINISTRADOR'),
(3, 'USUARIO GENERAL'),
(4, 'USUARIO DESHABILITADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_cu` int NOT NULL,
  `lectura_mapa` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tiro_combate` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `zu_23` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `iglas` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `sanidad` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `btr_80` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `francotirador` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `guia_aereo` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `explosivista` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `paracaidismo` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `zapador` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `mar` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cursos_no_militares` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `otros_cursos_militares` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `otras_habilidades` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_cursos` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_cu`, `lectura_mapa`, `tiro_combate`, `zu_23`, `iglas`, `sanidad`, `btr_80`, `francotirador`, `guia_aereo`, `explosivista`, `paracaidismo`, `zapador`, `mar`, `cursos_no_militares`, `otros_cursos_militares`, `otras_habilidades`, `id_cursos`) VALUES
(10, 'NO', 'SI', 'SI', 'SI', 'SI', 'NO', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'HDFG', 'FGH', 'FGHD', 22),
(11, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '0', '0', '0', 25),
(12, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '0', '0', '0', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_militar`
--

CREATE TABLE `datos_militar` (
  `id_m` int NOT NULL,
  `adi` int NOT NULL,
  `region` int NOT NULL,
  `zodi` int NOT NULL,
  `jerarquia` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `instruccion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `profesion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `oficio` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `mision` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `condicion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `militar_profesional` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `componente` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `grado` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ano_graduacion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ano_retiro` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `causa_retiro` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `servicio_militar` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contingente` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ano_licenciamiento` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `talla` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `calzado` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `gorra` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `unif_caqui` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `unif_zamorano` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tiempo_milicia` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tiempo_grado` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ano_ultasce` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_mili` int NOT NULL,
  `count` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `datos_militar`
--

INSERT INTO `datos_militar` (`id_m`, `adi`, `region`, `zodi`, `jerarquia`, `instruccion`, `profesion`, `oficio`, `mision`, `condicion`, `militar_profesional`, `componente`, `grado`, `ano_graduacion`, `ano_retiro`, `causa_retiro`, `servicio_militar`, `contingente`, `ano_licenciamiento`, `talla`, `calzado`, `gorra`, `unif_caqui`, `unif_zamorano`, `tiempo_milicia`, `tiempo_grado`, `ano_ultasce`, `id_mili`, `count`) VALUES
(19, 4, 1, 1, 'S/1RO', 'UNIVERSITARIO', 'ANALISTA DE SISTEMAS', 'ANALISTA DE SISTEMAS', 'JEFE DE DESARROLLO NACIONAL', 'PIE DE LUCHA', 'NO', '0', '0', '0', '0', '0', 'NO', '0', '0', 'ML', '45', '57', 'SI', 'SI', '8 AÑO', '1 Y 3 MESES', '2022', 22, 1),
(20, 3, 1, 1, 'MAY', 'UNIVERSITARIO', 'ABOGADO', 'LOCUTOR', 'JEFE DE COMUNICACIONES', 'PIE DE LUCHA', 'NO', '0', '0', '0', '0', '0', 'NO', '0', '0', 'MR', '42', '57', 'SI', 'SI', '15', '1 Y 3 MESES', '2022', 23, 1),
(21, 3, 1, 1, 'MIL', 'TSU', 'TECNICO SUPERIOR EN ADMINISTRACION', 'TECNICO SUPERIOR EN ADMINISTRACION', '0', 'CMDT SEDI', 'NO', '0', '0', '0', '0', '0', 'NO', '0', '0', 'SS', '41', '54', 'SI', 'SI', '0', '0', '0', 25, 1),
(22, 5, 1, 1, 'MIL', 'UNIVERSITARIO', 'INGENIERO EN INFORMATICA', 'MILICIANO', '0', 'CMDT SEDI', 'NO', '0', '0', '0', '0', '0', 'NO', '0', '0', 'SS', '39', '54', 'SI', 'SI', '0', '0', '\n0', 26, 1),
(23, 5, 1, 1, 'MIL', 'BACHILLER', '0', 'ESTUDIANTE', '0', 'CMDT SEDI', 'NO', '0', '0', '0', '0', '0', 'NO', '0', '0', 'SS', '38', '50', 'SI', 'SI', '0', '0', '\n0', 27, 1),
(25, 4, 1, 1, 'SM/2DA', 'BACHILLER', '0', '0', '0', 'CMDT SEDI', 'NO', '0', '0', '0', '0', '0', 'NO', '0', '0', 'MS', '45', '50', 'SI', 'SI', '0', '0', '\r\n0', 24, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_salud`
--

CREATE TABLE `datos_salud` (
  `id_s` int NOT NULL,
  `dental` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `alergico` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tatuaje` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `enfermedad` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cantidad_hijos` int NOT NULL,
  `cantidad_hijas` int NOT NULL,
  `cantidad_hermanos` int NOT NULL,
  `cantidad_hermanas` int NOT NULL,
  `vivienda_propia` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `condicion2` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `vehiculo` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `botas` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cara` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cabello` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `color_cabello` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `peso` int NOT NULL,
  `estatura` int NOT NULL,
  `grupo_sanguineo` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `color_ojos` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `labios` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_salud` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `datos_salud`
--

INSERT INTO `datos_salud` (`id_s`, `dental`, `alergico`, `tatuaje`, `enfermedad`, `cantidad_hijos`, `cantidad_hijas`, `cantidad_hermanos`, `cantidad_hermanas`, `vivienda_propia`, `condicion2`, `vehiculo`, `botas`, `cara`, `cabello`, `color_cabello`, `peso`, `estatura`, `grupo_sanguineo`, `color_ojos`, `labios`, `id_salud`) VALUES
(10, 'SI', 'NO', 'NO', 'NO', 3, 1, 1, 1, 'NO', 'ALQUILADO', 'SI', 'SI', 'DELGADA', 'CRESPO', 'NEGRO', 82, 182, 'ORH+', 'CAFE', 'GRUESOS', 22),
(11, 'NO', 'NO', 'NO', '0', 0, 0, 0, 0, 'NO', '0', 'NO', 'NO', 'REDONDA', 'LISO', 'NEGRO', 68, 170, 'ARH+', 'MARRONES', 'DELGADO', 25),
(12, 'NO', 'NO', 'NO', 'NO PADESCO', 0, 0, 0, 0, 'NO', 'FAMILIAR', 'NO', 'SI', 'OVALADA', 'CRESPO', 'NEGRO', 63, 155, 'ARH+', 'MARRONES', 'DELGADO', 26),
(13, 'SI', 'NO', 'NO', 'BAJO DE PESO Y CARDIOPATIA CONGÉNITA', 0, 0, 0, 0, 'NO', '0', 'NO', 'SI', 'OVALADA', 'LISO', 'NEGRO', 37, 158, 'BRH+', 'MARRONES', 'DELGADO', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `id_f` int NOT NULL,
  `parentesco` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cedula1` int NOT NULL,
  `nombref` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono2` varchar(11) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ocupacion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_familia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`id_f`, `parentesco`, `cedula1`, `nombref`, `telefono2`, `ocupacion`, `id_familia`) VALUES
(19, 'PADRE', 3023501, 'JUAN MARTINEZ', '04164858011', 'ELECTRICISTA JUBILADO', 22),
(20, 'MADRE', 3503240, 'SONIA VARGAS', '04164852004', 'ENFERMERA JUBILADA', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_p` int NOT NULL,
  `fecha_registro` date NOT NULL,
  `cedula` int NOT NULL,
  `apellido1` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido2` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre1` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre2` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `genero` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int NOT NULL,
  `estado_civil` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `carnet_patria` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `seriall` varchar(21) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codigo` varchar(21) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `redes_sociales` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `religion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `sector` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `unidad` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `municipio` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `parroquia` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apdi` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `bpdi` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `updi` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cuenta` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `numero_cuenta` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `empresa` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion1` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono1` varchar(11) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cargo1` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_p`, `fecha_registro`, `cedula`, `apellido1`, `apellido2`, `nombre1`, `nombre2`, `genero`, `telefono`, `fecha_nacimiento`, `edad`, `estado_civil`, `carnet_patria`, `seriall`, `codigo`, `imagen`, `correo`, `redes_sociales`, `religion`, `sector`, `direccion`, `unidad`, `municipio`, `parroquia`, `apdi`, `bpdi`, `updi`, `cuenta`, `numero_cuenta`, `empresa`, `direccion1`, `telefono1`, `cargo1`) VALUES
(22, '2023-06-15', 12192333, 'MARTINEZ', 'VARGAS', 'JACOBO', 'FRANCISCO', 'HOMBRE', '04120871581', '1976-10-27', 46, 'SOLTERO', 'SI', '0019075016', '0000088416', 'kaki S1 jacobo.jpg', 'JACOBOFMARTINEZ@GMAIL.COM', '@JACOBOM64768550', 'GNOSTICO', 'AGUA SALADA', 'CALLE PRINCIPAL DE AGUA SALADA', 'ESCUELA ESTADAL BASICA AGUA SALADA', 'ANGOSTURA DEL ORINOCO', 'AGUA SALADA', 'AGUA SALADA', 'ESCUELA ESTADAL BASICA AGUA SALADA', 'SECTOR 1 AGUA SALADA', 'BANFANB', '01770012041100601173', 'CONCEJO MUNICIPAL ANGOSTURA DEL ORINOCO', 'CALLE IGUALDAD CRUCE CONCORDIA', '02856323049', 'ANALISTA EN SISTEMA '),
(23, '2023-06-15', 8545497, 'MONROY', ' ', 'EDGAR', 'DE JESUS', 'HOMBRE', '04249575074', '1955-07-27', 67, 'SOLTERO', 'NO', '0', '0', 'IMG-20230607-WA0095.jpg', 'EDGARMONROY977@GMAIL.COM', 'MMAKERAN622', 'CATOLICO', 'AV UPATA', 'SECTOR BARRIO A JURO DERECHA AVENIDA UPATA. FRENTE AVENIDA JOSE MENDEZ.', 'ESCUELA DE MEDICINA DE LA UNIVERSIDAD DE ORIENTE', 'ANGOSTURA DEL ORINOCO', 'CATEDRAL', 'CATEDRAL', 'ESCUELA DE MEDICINA DE LA UNIVERSIDAD DE ORIENTE', 'SECTOR BARRIO A JURO DERECHA AVENIDA UPATA. FRENTE AVENIDA JOSE MENDEZ.', 'VENEZUELA', '0102', 'ELECTRICA FM', 'SECTOR BARRIO A JURO DERECHA AVENIDA UPATA. FRENTE AVENIDA JOSE MENDEZ', '0285', 'LOCUTOR'),
(24, '2023-06-19', 11172529, 'ARCINIEGAS', 'GONZALEZ', 'LUIS', 'MANUEL', 'HOMBRE', '04249202129', '1971-07-18', 51, 'CASADO', 'SI', '0000000', '00000000', '11172529.jpg', 'LARCINIEGASG@GMAIL.COM', '@LARCINIEGASG', 'CATOLICO', 'JOSE ANTONIO PAEZ', 'CALLE NUEVA ESPARTA CASA N° 47 CIUDAD BOLIVAR', '622 MAKERAN', 'ANGOSTURA DEL ORINOCO', 'JOSE ANTONIO PAEZ', 'JOSE ANTONIO PAEZ', 'JOSE ANTONIO PAEZ', 'JOSE ANTONIO PAEZ I', 'VENEZUELA', '0177001385000000', 'COMANDO DE ZODI DE MILICIA', 'AVENIDA PASEO LIBERTADOR SEDE ZODI BOLIVAR', '02856540525', 'ANALISTA'),
(25, '2023-06-23', 22849732, 'ALVAREZ', 'ALVARADO', 'ALEJANDRO', 'CELSO', 'HOMBRE', '04249222463', '1994-03-18', 29, 'CASADO', 'NO', '0', '0', '1.PNG', 'ALEJANDRO@GMAIL.COM', '0', '0', 'BLOQUES DEL PERU', 'EDIFICIO 6 APRTAMENTO 0305 PISO 3 EL PERU', 'CEI JOSE TOMAS RAMOS', 'ANGOSTURA DE ORINOCO', 'AGUA SALADA', 'AGUA SALADA', 'CEI JOSE TOMAS RAMOS', 'BLOQUES DEL PERU', 'VENEZUELA', '0', '0', '0', '0', '0'),
(26, '2023-06-23', 20774244, 'ARGUELLOS', 'NUÑEZ', 'ANTONIO', 'GUILLERMO', 'HOMBRE', '04167986127', '1994-08-28', 28, 'SOLTERO', 'NO', '0', '0', '2.PNG', 'ANTONIOGUILLERMO@GMAIL.COM', '0', '0', 'BLOQUES DEL PERU', 'EDIFICIO 6 APARTAMENTO 0306 PISO 3 EL PERU', 'CEI JOSE TOMAS RAMOS', 'ANGOSTURA DEL ORINOCO', 'AGUA SALADA', 'AGUA SALADA', 'CEI JOSE TOMAS RAMOS', 'BLOQUES DEL PERU', 'VENEZUELA', '0', '0', '0', '0', '0'),
(27, '2023-06-23', 27182347, 'GONZALEZ', 'PEREZ', 'COROMOTO', 'MARIANGEL', 'MUJER', '04269383488', '1998-12-07', 24, 'SOLTERO', 'NO', '0', '0', '3.PNG', 'COROMOTO@GMAIL.COM', '0', '0', 'BLOQUES DEL PERU', 'EDIFICIOS 6 APARTAMENTO 0001 PISO. PLANTA BAJA EL PERU', 'CEI JOSE TOMAS RAMOS', 'ANGOSTURA DEL ORINOCO', 'AGUA SALADA', 'AGUA SALADA', 'CEI JOSE TOMAS RAMOS', 'BLOQUES DEL PERU', 'VENEZUELA', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_r` int NOT NULL,
  `pregunta1` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta2` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta3` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `respuesta1` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `respuesta2` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `respuesta3` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_r`, `pregunta1`, `pregunta2`, `pregunta3`, `respuesta1`, `respuesta2`, `respuesta3`, `id_user`) VALUES
(8, 'NOMBRE DE MI MADRE', 'NOMBRE DE MI PADRE', 'COLOR FAVORITO', 'maria', 'daniel', 'azul', 61),
(9, 'NOMBRE DE MI MADRE', 'NOMBRE DE MI PADRE', 'COLOR FAVORITO', 'verus', 'deivys', 'morado', 65);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region_tabla`
--

CREATE TABLE `region_tabla` (
  `id_b` int NOT NULL,
  `descripcion1` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_region` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `region_tabla`
--

INSERT INTO `region_tabla` (`id_b`, `descripcion1`, `id_region`) VALUES
(1, 'GUAYANA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE `tarea` (
  `id_t` int NOT NULL,
  `tareas` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_tarea` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`id_t`, `tareas`, `id_tarea`) VALUES
(12, 'MILITAR', 22),
(13, '0', 25),
(14, '0', 26),
(15, 'ASDF', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clave` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cargo` int NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `correo`, `clave`, `cargo`, `fecha`) VALUES
(61, 'JACOBO MARTINEZ', 'jacobo', 'JACOBO@GMAIL.COM', '92bd4f5ff6b8b3fbbf0b7e083ca8505c133c86c2b028970c2e8060f578932568925e2994c72336e22ef9df0dc9e15ee9f89aa48f44e16d4b6da01d4f3ef983c7', 1, '2023-06-11'),
(62, 'ANGGELA CASTILLO', 'anggela', 'ANGGELACASTLE18@GMAIL.COM', '3a83ee024776afac8466fe303dafd0765a5369d83aa6fb664ae0cbcec0722d7d623e9e9a8db422314b55100f5299da53e8a6f61db21c8287b644dd657ff8642a', 1, '2023-06-14'),
(63, 'ARCINIEGAS', 'Arciniegas1', 'LARCINIEGASG@GMAIL.COM', '1c8db5cf4e8a10b96386cf71b8cdabfe14a582d66652ef299f3b15244282993dc35387658ab914c85cdabd1760d596ec8c52e1d939fe4cfed2fc99b9fb665705', 2, '2023-06-15'),
(65, 'DEIVYS GAMARRA', 'deivys', 'GAMARRAYNUNEZD@GMAIL.COM', '20db23abb79ccb480dab013e517df8eca2c9d8e6ccd5f3a3aaf0ef4542e5d392d210ded1f10158b48e3a72640b13c09442a6af1904f63d375585dd1708d507cd', 1, '2023-12-19'),
(67, 'DANIEL TORREZ', 'daniel', 'DANIEL@GMAIL.COM', '538f53e2a9dc8be8f4d34e90049548499cb2f54bee27b59e40d9db6d2c02c42e9f6cd517b156431b7fce4b5e2a6ace9adf12ebd33eea9959708f7467a535ec01', 2, '2023-06-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zodi_tabla`
--

CREATE TABLE `zodi_tabla` (
  `id_c` int NOT NULL,
  `descripcion2` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `zodi_tabla`
--

INSERT INTO `zodi_tabla` (`id_c`, `descripcion2`) VALUES
(1, 'BOLIVAR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adi_datos`
--
ALTER TABLE `adi_datos`
  ADD PRIMARY KEY (`id_a`),
  ADD KEY `id_adi` (`id_adi`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_c`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_cu`),
  ADD KEY `id_cursos` (`id_cursos`);

--
-- Indices de la tabla `datos_militar`
--
ALTER TABLE `datos_militar`
  ADD PRIMARY KEY (`id_m`),
  ADD KEY `id_mili` (`id_mili`),
  ADD KEY `zodi` (`zodi`),
  ADD KEY `adi` (`adi`),
  ADD KEY `region` (`region`);

--
-- Indices de la tabla `datos_salud`
--
ALTER TABLE `datos_salud`
  ADD PRIMARY KEY (`id_s`),
  ADD KEY `id_salud` (`id_salud`);

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id_f`),
  ADD KEY `id_familia` (`id_familia`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_p`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_r`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `region_tabla`
--
ALTER TABLE `region_tabla`
  ADD PRIMARY KEY (`id_b`),
  ADD KEY `id_region` (`id_region`);

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`id_t`),
  ADD KEY `id_tarea` (`id_tarea`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo` (`cargo`);

--
-- Indices de la tabla `zodi_tabla`
--
ALTER TABLE `zodi_tabla`
  ADD PRIMARY KEY (`id_c`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adi_datos`
--
ALTER TABLE `adi_datos`
  MODIFY `id_a` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_c` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_cu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `datos_militar`
--
ALTER TABLE `datos_militar`
  MODIFY `id_m` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `datos_salud`
--
ALTER TABLE `datos_salud`
  MODIFY `id_s` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `familia`
--
ALTER TABLE `familia`
  MODIFY `id_f` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_p` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_r` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `region_tabla`
--
ALTER TABLE `region_tabla`
  MODIFY `id_b` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `id_t` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `zodi_tabla`
--
ALTER TABLE `zodi_tabla`
  MODIFY `id_c` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adi_datos`
--
ALTER TABLE `adi_datos`
  ADD CONSTRAINT `adi_datos_ibfk_1` FOREIGN KEY (`id_adi`) REFERENCES `region_tabla` (`id_b`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_cursos`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_militar`
--
ALTER TABLE `datos_militar`
  ADD CONSTRAINT `datos_militar_ibfk_1` FOREIGN KEY (`id_mili`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_militar_ibfk_2` FOREIGN KEY (`zodi`) REFERENCES `zodi_tabla` (`id_c`),
  ADD CONSTRAINT `datos_militar_ibfk_3` FOREIGN KEY (`adi`) REFERENCES `adi_datos` (`id_a`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_militar_ibfk_4` FOREIGN KEY (`region`) REFERENCES `region_tabla` (`id_b`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_salud`
--
ALTER TABLE `datos_salud`
  ADD CONSTRAINT `datos_salud_ibfk_1` FOREIGN KEY (`id_salud`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `familia`
--
ALTER TABLE `familia`
  ADD CONSTRAINT `familia_ibfk_1` FOREIGN KEY (`id_familia`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `region_tabla`
--
ALTER TABLE `region_tabla`
  ADD CONSTRAINT `region_tabla_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `zodi_tabla` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`id_tarea`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `cargos` (`id_c`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
