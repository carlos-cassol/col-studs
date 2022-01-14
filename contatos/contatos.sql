-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 14-Jan-2022 às 18:01
-- Versão do servidor: 5.7.25
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contatos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `peso` int(11) NOT NULL,
  `altura` decimal(3,2) NOT NULL,
  `idade` int(3) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`cod`, `nome`, `peso`, `altura`, `idade`, `endereco`, `numero`, `bairro`, `cidade`, `cep`) VALUES
(1, 'Carlos Cassol', 64, '1.75', 36, 'Rua do caraio', 191, 'Disney', 'Joinville', 89239250),
(2, 'Carlos Cassol', 0, '0.00', 0, '', 0, '', '', 0),
(3, 'josé', 0, '0.00', 0, '', 0, '', '', 0),
(5, 'Afrodite', 64, '1.75', 36, 'Rua do caraio', 191, 'Disney', 'Joinville', 89239250),
(6, 'Carlos Cassol', 80, '1.75', 0, '', 0, '', '', 0),
(7, 'Maria Luisa', 64, '1.75', 36, 'Rua do caraio', 191, 'Disney', 'Joinville', 89239250),
(8, 'Carlos Cassol', 64, '1.75', 36, 'Rua do caraio', 191, 'Disney', 'Joinville', 89239250),
(9, 'Bruno', 64, '1.64', 36, 'Rua do caraio', 191, 'Disney', 'Joinville', 89239250),
(11, 'Carlos Cassol', 64, '1.75', 36, 'Rua do caraio', 191, 'Disney', 'Joinville', 89239250),
(12, 'Cleber', 64, '1.75', 36, 'Estrada da Ilha', 15, 'Pirabeiraba (Pirabeiraba)', 'Joinville', 89239250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
