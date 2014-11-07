-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 05-Nov-2014 às 21:17
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `kananda`
--
CREATE DATABASE IF NOT EXISTS `kananda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kananda`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `senha`, `email`, `data_cadastro`) VALUES
(1, 'Fabrício Rribeiro', '39126999a71e4be3762c34de0e40cb3a', 'fabricio.ribeiro@endogenese.com.br', '2014-10-12 00:00:00'),
(6, 'fabricio', '123456', 'fabricio@gmai.com.br', '2014-10-22 16:35:47'),
(9, 'a', '174a9535b7fd93ceecbe1fc0392fa0f2', 'fabricio@gmail.com', '2014-10-31 19:45:40'),
(10, 'b', '6116afedcb0bc31083935c1c262ff4c9', 'fabricio@gmail.com', '2014-10-31 19:45:54'),
(11, 'c', '6116afedcb0bc31083935c1c262ff4c9', 'fabricio@gmail.com', '2014-10-31 19:46:09'),
(12, 'd', '6116afedcb0bc31083935c1c262ff4c9', 'fabricio@gmail.com', '2014-10-31 19:46:17'),
(14, 'endo', '5285f66a208bcaa5af5ea678badae4b2', 'fabricio@gmail.com', '2014-11-02 20:07:26'),
(17, 'TI2', '39126999a71e4be3762c34de0e40cb3a', 'fabricio.ss.ribeiro@gmail.com', '2014-11-04 21:09:19'),
(18, '1', '7055eced15538bfb7c07f8a5b28fc5d0', 'fabricio@de.com.br', '2014-11-05 15:16:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `titulo_site` varchar(100) NOT NULL,
  `logotipo` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `email`, `titulo_site`, `logotipo`, `data_cadastro`) VALUES
(1, 'Kananda Imobiliária', 'site@kananda.com..br', 'Kananda', 'img/site/545a7dcb31efe.png', '2014-10-22 21:09:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_evento` varchar(60) NOT NULL,
  `descricao_evento` varchar(144) NOT NULL,
  `diretorio` varchar(100) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id`, `titulo_evento`, `descricao_evento`, `diretorio`, `data_cadastro`) VALUES
(80, 'teste', 'descricao teste', 'img/eventos/80-d', '2014-10-25 14:32:55'),
(81, 'teste', 'kananda', 'img/eventos/81-kananda', '2014-10-25 15:04:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto_evento`
--

CREATE TABLE IF NOT EXISTS `foto_evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_evento` int(11) NOT NULL,
  `arquivo` varchar(100) NOT NULL,
  `descricao_foto` varchar(144) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Extraindo dados da tabela `foto_evento`
--

INSERT INTO `foto_evento` (`id`, `id_evento`, `arquivo`, `descricao_foto`, `data_cadastro`) VALUES
(62, 80, 'img/eventos/80-d/544bb4976f628.jpg', 'ds', '2014-10-25 14:32:55'),
(68, 80, 'img/eventos/80-d/544fe3dda6f5a.jpg', '1', '2014-10-28 18:43:41'),
(70, 80, 'img/eventos/80-d/544fe3efefeab.jpg', 'flores', '2014-10-28 18:43:59'),
(71, 80, 'img/eventos/80-d/5450203441320.jpg', 's', '2014-10-28 23:01:08'),
(72, 80, 'img/eventos/80-d/5450205a54bd5.jpg', 'a', '2014-10-28 23:01:08'),
(73, 80, 'img/eventos/80-d/5450205a80af5.jpg', '1', '2014-10-28 23:01:46'),
(81, 0, 'img/eventos/81-kananda/5452b55f29d47.jpg', 'm', '2014-10-30 22:02:07'),
(87, 81, 'img/eventos/81-kananda/5452b66833389.jpg', 'a', '2014-10-30 22:06:16'),
(89, 81, 'img/eventos/81-kananda/5452c5073cb0b.jpg', 'a', '2014-10-30 23:08:55'),
(90, 81, 'img/eventos/81-kananda/5452c507481db.jpg', 's', '2014-10-30 23:08:55'),
(93, 80, 'img/eventos/80-d/545a45c89271f.jpg', 'f', '2014-11-05 15:44:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto_produto`
--

CREATE TABLE IF NOT EXISTS `foto_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `arquivo` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `foto_produto`
--

INSERT INTO `foto_produto` (`id`, `id_produto`, `arquivo`, `data_cadastro`) VALUES
(15, 3, 'img/imoveis/3-333/545a8a4bb224d.png', '2014-10-31 14:32:50'),
(16, 2, 'img/imoveis/2-222/545a89c415d8f.png', '2014-11-02 20:17:38'),
(18, 2, 'img/imoveis/2-222/54569184e6aaf.jpg', '2014-11-02 20:18:12'),
(19, 3, 'img/imoveis/3-333/5456919a54f95.jpg', '2014-11-02 20:18:34'),
(20, 4, 'img/imoveis/4-444/545a89cf4e00e.png', '2014-11-03 19:30:44'),
(21, 4, 'img/imoveis/4-444/545a446f74f7b.jpg', '2014-11-05 15:38:23'),
(23, 6, 'img/imoveis/6-12345/545a9360386f3.png', '2014-11-05 21:15:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` int(11) NOT NULL,
  `tipo_imovel` varchar(25) NOT NULL,
  `finalidade` varchar(10) NOT NULL,
  `quartos` int(11) NOT NULL,
  `garagem` int(11) NOT NULL,
  `area_edi` varchar(20) NOT NULL,
  `area_ter` varchar(20) NOT NULL,
  `perimetro_l` varchar(20) NOT NULL,
  `perimetro_c` varchar(20) NOT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `suites` int(11) NOT NULL,
  `banheiros` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `num` varchar(6) NOT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `bairro` varchar(80) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` char(2) NOT NULL,
  `descricao` longtext NOT NULL,
  `video` varchar(100) DEFAULT NULL,
  `diretorio` varchar(50) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `referencia` (`referencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `referencia`, `tipo_imovel`, `finalidade`, `quartos`, `garagem`, `area_edi`, `area_ter`, `perimetro_l`, `perimetro_c`, `latitude`, `longitude`, `suites`, `banheiros`, `categoria`, `logradouro`, `num`, `complemento`, `bairro`, `cidade`, `uf`, `descricao`, `video`, `diretorio`, `data_cadastro`) VALUES
(2, 222, 'CASA A VENDA', 'VENDA', 1, 1, '1', '15 m2', '1', '1', '-4.265850', '-55.981934', 1, 1, 'CASA TERREA', '1', '1', '1', 'BOA ESPERANÇA', 'ITAITUBA', '', 'imóvel a alugar\r\n', '1', 'img/imoveis/2-222', '2014-10-31 11:40:07'),
(3, 333, 'CASA A VENDA', 'VENDA', 1, 1, '30 m2', '1', '1', '1', '-4.275843', '-55.987138', 1, 1, 'APARTAMENTO', '1', '1', '1', 'NOVA ITAITUBA', 'ITAITUBA', '', 'imóvel a venda', '1', 'img/imoveis/3-333', '2014-10-31 14:32:50'),
(4, 444, 'CASA A VENDA', 'VENDA', 3, 1, '1', '40 m2', '1', '1', '-4.275843', '-55.994347', 1, 1, 'CASA TERREA', '1', '1', '1', 'BELA VISTA', 'ITAITUBA', '', 'descrição 4 descrição 4  sds sd sd sd descrição 4 descrição 4 descrição 4 descrição descrição 4 dff dfdf', '1', 'img/imoveis/4-444', '2014-11-03 19:30:43'),
(6, 12345, 'LOTEAMENTO', 'VENDA', 0, 0, '120 m²', '100 m²', '121 metros', '121 metros', NULL, NULL, 0, 0, 'CASA TERREA', 'logradouro', 's/n', NULL, 'BELA VISTA', 'ITAITUBA', '', 'loteamento', NULL, 'img/imoveis/6-12345', '2014-11-05 21:15:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide` varchar(50) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Extraindo dados da tabela `slideshow`
--

INSERT INTO `slideshow` (`id`, `slide`, `titulo`, `descricao`, `data_cadastro`) VALUES
(68, 'img/site/5452b176de681.jpg', 'banner 2', 'teste banner 2', '2014-10-30 21:45:19'),
(71, 'img/site/545a445fb4397.jpg', NULL, NULL, '2014-11-05 15:38:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
