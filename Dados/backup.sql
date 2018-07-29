-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jul-2018 às 04:46
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backup`
--
CREATE DATABASE IF NOT EXISTS `backup` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `backup`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `codigoLiberacao` int(11) NOT NULL,
  `cpf_cnpj` varchar(30) NOT NULL,
  `situacao` varchar(30) NOT NULL,
  `nomeEmpresa` varchar(250) NOT NULL,
  `acao` varchar(30) NOT NULL,
  `qntCliente` int(11) NOT NULL,
  `dateBackup` varchar(15) NOT NULL,
  `usuario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `codigoLiberacao`, `cpf_cnpj`, `situacao`, `nomeEmpresa`, `acao`, `qntCliente`, `dateBackup`, `usuario`) VALUES
(3, 123, '555555555', 'Criado', 'protec sistemas', 'Faz', 45, '12/08/2018', 'admin'),
(7, 9876, '9898989', 'Criado', 'dev nul', 'Faz', 55, '12/08/2018', 'admin'),
(8, 543, '223232', 'Criado', 'telgo', 'Faz', 55, '12/08/2018', 'admin'),
(9, 9876, '14134', 'Criado', 'explorer net', 'Faz', 345, '12/08/2018', 'lucas'),
(10, 444, '321234', 'Criado', 'infotecnico', 'Faz', 123456, '12/23/1990', 'lucas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `funcName` varchar(500) NOT NULL,
  `funcEmail` varchar(400) NOT NULL,
  `perfil` varchar(400) NOT NULL,
  `funcUsername` varchar(400) NOT NULL,
  `funcSenha` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `funcName`, `funcEmail`, `perfil`, `funcUsername`, `funcSenha`) VALUES
(1, 'josimar', '', 'S', 'admin', '123'),
(2, 'lucas', '', 'S', 'lucas', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
