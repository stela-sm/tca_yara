-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Fev-2023 às 15:27
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pizzaetec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `ID_ADM` int(10) NOT NULL COMMENT 'id do adm',
  `nome` varchar(300) NOT NULL COMMENT 'nome do adm',
  `email` varchar(300) NOT NULL COMMENT 'email do adm',
  `senha` varchar(64) NOT NULL COMMENT 'senha em sha256',
  `datahora` datetime NOT NULL COMMENT 'datae hora do registro',
  `poder` int(10) NOT NULL COMMENT 'abrangência do usuário no sistema',
  `status` int(10) NOT NULL COMMENT '1 - ativo; 0 - inativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`ID_ADM`, `nome`, `email`, `senha`, `datahora`, `poder`, `status`) VALUES
(1, 'Sysop santos', 'sysop@pizzaetec.com', ' 5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc', '2023-02-16 11:03:15', 9, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID_ADM`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID_ADM` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id do adm', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
