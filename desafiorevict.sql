-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2018 às 04:34
-- Versão do servidor: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafiorevict`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `cpf`, `created_at`, `updated_at`) VALUES
(91, 'maria', 'augusta', '365.326.638-67', '2018-11-14 03:03:43', '2018-11-16 03:09:03'),
(92, 'Jack', 'Clinton', '483.141.468-97', '2018-11-14 12:02:10', '2018-11-16 03:10:35'),
(93, 'Karen', 'M Sweeney', '978.743.475-01', '2018-11-16 01:37:28', '2018-11-16 03:11:21'),
(94, 'Edmond', 'H Cruz', '820.248.770-60', '2018-11-16 01:38:30', '2018-11-16 03:12:00'),
(95, 'José', 'B Wages', '621.175.037-48', '2018-11-16 01:38:53', '2018-11-16 03:12:45'),
(96, 'Mickey', 'D Baldwin', '327.735.435-05', '2018-11-16 01:39:40', '2018-11-16 03:13:19'),
(97, 'Willian', 'N Thompson', '402.577.886-62', '2018-11-16 01:44:44', '2018-11-16 03:14:53'),
(98, 'Yolanda', 'D Fears', '673.148.258-74', '2018-11-16 01:45:29', '2018-11-16 03:17:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dividas`
--

CREATE TABLE IF NOT EXISTS `dividas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor_total` decimal(10,0) NOT NULL,
  `data_vencimento` date NOT NULL,
  `status` enum('Pendente','Inadimplente','Finalizada') COLLATE utf8_unicode_ci NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `dividas`
--

INSERT INTO `dividas` (`id`, `nome`, `descricao`, `valor_total`, `data_vencimento`, `status`, `cliente_id`, `created_at`, `updated_at`) VALUES
(5, 'Compra de fio ', 'Ref ao mês 11/2018', '500', '2018-11-14', 'Finalizada', 91, '2018-11-14 15:39:03', '2018-11-14 15:39:03'),
(6, 'Compra de fio ', 'Ref ao mês 11/2018', '500', '2018-11-14', 'Finalizada', 91, '2018-11-14 19:37:35', '2018-11-14 19:37:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dividas`
--
ALTER TABLE `dividas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cliente_id` (`cliente_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `dividas`
--
ALTER TABLE `dividas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `dividas`
--
ALTER TABLE `dividas`
  ADD CONSTRAINT `fk_cliente_id` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
