-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2021 às 18:53
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_corinthians`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cd_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(100) DEFAULT NULL,
  `bl_corintiano` char(5) NOT NULL,
  `ds_email` varchar(100) NOT NULL,
  `cod_senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `bl_corintiano`, `ds_email`, `cod_senha`) VALUES
(1, 'porco', 'Não', 'PigOnTheWing@gmail.com', '4c96f8324e3ba54a99e78249b95daa30'),
(2, 'Gustavo', 'Sim', 'gustavo@gmail.com', '4c96f8324e3ba54a99e78249b95daa30'),
(40, 'Gustavo', 'Sim', 'gustavo@gmail.com', '4c96f8324e3ba54a99e78249b95daa30'),
(41, 'asdd', 'Sim', 'gustavo@gmail.com', '4c96f8324e3ba54a99e78249b95daa30'),
(42, 'sssss', 'Sim', 'gustavo@gmail.com', '4c96f8324e3ba54a99e78249b95daa30'),
(43, 'Gustavo22', 'Sim', 'gustavo@gmail.com', '4c96f8324e3ba54a99e78249b95daa30'),
(44, 'srfgresgresg', 'Não', 'gustavo@gmail.com', '4c96f8324e3ba54a99e78249b95daa30'),
(45, 'ewcwc', 'Sim', 'gustavo@gmail.com', '4c96f8324e3ba54a99e78249b95daa30');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
