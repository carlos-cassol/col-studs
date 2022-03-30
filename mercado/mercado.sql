-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 14-Jan-2022 às 17:59
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
-- Database: `mercado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entradas`
--

CREATE TABLE `entradas` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `quant` int(8) NOT NULL,
  `dat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `entradas`
--

INSERT INTO `entradas` (`cod`, `nome`, `preco`, `quant`, `dat`) VALUES
(1, 'Carlos', '5.99', 13, '2021-11-20'),
(2, 'Coleiras Vitor', '6.99', 46, '2021-11-19'),
(3, 'Bala do Kadu', '5.99', 48, '2021-11-17'),
(4, 'Tênis do Yohann', '10.00', 38, '2021-11-23'),
(5, 'Portas Pedro', '139.99', 147, '2021-11-26'),
(6, 'TESTE', '15.99', 1, '2021-11-25'),
(7, 'Carteiras Emilly', '5.99', 146, '2021-08-20'),
(8, 'Carteiras Bruno', '15.99', 327, '2021-11-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `idv` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `datav` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`idv`, `cod`, `datav`) VALUES
(1, 0, '2021-11-09'),
(2, 0, '2021-11-02'),
(3, 0, '2021-11-02'),
(4, 3, '2021-11-23'),
(5, 2, '2021-11-21'),
(6, 1, '2021-11-20'),
(7, 4, '2021-11-25'),
(8, 4, '2021-11-25'),
(9, 4, '2021-11-17'),
(10, 4, '2021-11-25'),
(11, 6, '2021-11-25'),
(12, 6, '2021-11-25'),
(13, 2, '2021-02-11'),
(14, 8, '2021-11-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`idv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entradas`
--
ALTER TABLE `entradas`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
