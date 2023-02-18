-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/10/2021 às 20h26min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE learning_programming;
USE learning_programming;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `learning_programming`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'JavaScript'),
(4, 'PHP'),
(5, 'BD MySQL'),
(6, 'Python');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE IF NOT EXISTS `inscricao` (
  `id_inscricao` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` varchar(11) CHARACTER SET utf8 NOT NULL,
  `id_curso` varchar(11) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_inscricao`),
  KEY `id_usuario` (`id_usuario`,`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem_index`
--

CREATE TABLE IF NOT EXISTS `mensagem_index` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `Id_usuario` varchar(11) CHARACTER SET utf8 NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mensagem` varchar(500) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_msg`),
  KEY `Id_usuario` (`Id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(200) CHARACTER SET utf8 NOT NULL,
  `data_nasc` varchar(11) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(16) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(40) CHARACTER SET utf8 NOT NULL,
  `ft_perfil_name` varchar(100) NOT NULL,
  `caminho` varchar(200) NOT NULL,
  `identificador` varchar(1) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `endereco`, `data_nasc`, `telefone`, `email`, `senha`, `ft_perfil_name`, `caminho`, `identificador`) VALUES
(1, 'Vitor Leon ', 'Rua Elizete Cardoso n31', '2004-03-27', '(11) 9852-29968', 'vitor.leon465@gmail.com', '4f9ed562bee7d01b41b9afd4421d0c4f2106af4b', '61705d3cc9960', '../usuarios/ft_perfil/61705d3cc9960.jpeg', '1'),
(2, 'Raul Germano', 'Rua da canseira n10, Bahia', '2003-02-12', '(11) 9490-03895', 'raulgermano77@gmail.com', '0ad7e7cabc69b4d425d182ee735a62790dc7bc78', '61705c0d2e193', '../usuarios/ft_perfil/61705c0d2e193.jpeg', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
