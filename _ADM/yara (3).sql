-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Ago-2023 às 02:04
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `yara`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `ID_ADM` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `poder` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`ID_ADM`, `nome`, `email`, `senha`, `celular`, `poder`, `status`, `datahora`) VALUES
(1, 'Stela dos Santos', 'stela3@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '11963220905', 5, '1', '2023-08-21 18:08:49'),
(2, 'clara', 'clarasaches@gmail.com', '12345', '11993832299', 7, '1', '2023-08-11 18:02:12'),
(3, 'samuel', 'stela@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '11963220905', 2, '1', '2023-08-12 17:47:29'),
(5, 'ana', 'stelamontenegro3@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '11963220905', 1, '1', '2023-08-12 17:49:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `ID_CARRINHO` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID_CLIENTE` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `datan` date DEFAULT NULL,
  `datahora` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID_CLIENTE`, `nome`, `cpf`, `email`, `senha`, `datan`, `datahora`) VALUES
(1, 'stela', '40527647810', 's@s.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '0000-00-00', '2023-08-23 00:05:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `ID_ENDERECO` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `bloco` varchar(10) DEFAULT NULL,
  `apto` varchar(10) DEFAULT NULL,
  `referencia` text DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`ID_ENDERECO`, `id_cliente`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `logradouro`, `bloco`, `apto`, `referencia`, `nome`, `datahora`) VALUES
(1, 1, '04652150', 'Brasil', 'SP', 'São Paulo', 'Cidade Ademar', 'Damásio rodrigues gomes', 'Casa', '0', '0', 'nenhuma', 'Minha casa', '2023-08-22 21:08:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filtros`
--

CREATE TABLE `filtros` (
  `ID_FILTRO` int(11) NOT NULL,
  `nome_filtro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filtros`
--

INSERT INTO `filtros` (`ID_FILTRO`, `nome_filtro`) VALUES
(1, 'Sérum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `ID_ITENS` int(11) NOT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `presente` int(11) DEFAULT NULL COMMENT '1 = sim; 0 - não',
  `valor_uni` decimal(10,2) DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`ID_ITENS`, `id_pedido`, `id_produto`, `quantidade`, `presente`, `valor_uni`, `valor_total`, `datahora`) VALUES
(1, 1, 2, 2, 0, '50.00', '100.00', '2023-08-23 15:32:05'),
(2, 1, 2, 2, 1, '50.00', '100.00', '2023-08-23 17:09:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `ID_MENU` int(11) NOT NULL,
  `folder` varchar(1) NOT NULL COMMENT 'pasta onde se encontra a pagina [i] ou [v]',
  `nome` varchar(300) NOT NULL COMMENT 'nome do menu/link',
  `url` varchar(300) NOT NULL COMMENT 'url destino do link',
  `datahora` datetime NOT NULL COMMENT 'data e hora do registro yyy-mm-dd hh:mm:ss',
  `status` int(1) NOT NULL COMMENT '1-ativo; 0-inativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`ID_MENU`, `folder`, `nome`, `url`, `datahora`, `status`) VALUES
(25, 'v', 'Shopping', 'shop.php', '2023-08-17 19:29:37', 0),
(26, 'r', 'Shop', 'view/shop.php', '2023-08-17 19:29:37', 1),
(27, 'v', 'Sobre', 'Sobre.php', '2023-08-21 15:33:18', 1),
(28, 'r', 'Sobre', 'view/Sobre.php', '2023-08-21 15:33:18', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `ID_PEDIDO` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_endereco` int(11) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `pagamento` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`ID_PEDIDO`, `id_cliente`, `id_endereco`, `valor`, `pagamento`, `status`, `datahora`) VALUES
(1, 1, 1, '50.00', 'crédito', 'finalizade', '2023-02-22 21:09:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID_PRODUTO` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `img` varchar(100) NOT NULL,
  `img_hover` varchar(100) NOT NULL,
  `categoria` int(11) DEFAULT NULL,
  `finalidade` int(11) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `valor_uni` decimal(10,2) DEFAULT NULL,
  `ingredientes` varchar(300) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID_PRODUTO`, `nome`, `descricao`, `img`, `img_hover`, `categoria`, `finalidade`, `estoque`, `valor_uni`, `ingredientes`, `status`, `datahora`) VALUES
(2, 'Creme aloe vera', 'Formulado com aloe vera de alta qualidade, este creme exclusivo oferece uma experiência de cuidado da pele como nenhuma outra. A aloe vera, conhecida por suas propriedades hidratantes e curativas, é o segredo para uma pele saudável e radiante.', 'produto_UAaRUhol_img_.jpeg', 'produto_WufLjgBI_imghover_.png', 1, 1, 2225, '89.99', 'Gel de Aloe Vera: 60% (proporção maior para maximizar os benefícios)\r\nÓleo de Jojoba: 10%\r\nÓleo de Coco Fracionado: 8%\r\nGlicerina Vegetal: 5%\r\nManteiga de Karité: 5%\r\nEmulsificante Natural (como cera de abelha ou emulsificante vegetal): 6%\r\nÁgua Destilada: 4%\r\nConservante Natural (como extrato de to', '1 ', '2023-08-15 17:14:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `submenu`
--

CREATE TABLE `submenu` (
  `ID_SUBMENU` int(11) NOT NULL,
  `folder` varchar(1) NOT NULL COMMENT 'index [i] oi view [v]',
  `ID_MENU_FK` int(3) NOT NULL COMMENT 'id da tabela menu',
  `nomesub` varchar(100) NOT NULL COMMENT 'nome do link',
  `url` varchar(300) NOT NULL COMMENT 'url do link',
  `datahora` datetime NOT NULL COMMENT 'data e hora',
  `status` int(1) NOT NULL COMMENT '1-ativo;0-inativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `submenu`
--

INSERT INTO `submenu` (`ID_SUBMENU`, `folder`, `ID_MENU_FK`, `nomesub`, `url`, `datahora`, `status`) VALUES
(14, 'v', 26, 'kitss', 'view/kits.php', '2023-08-17 20:28:05', 0),
(15, 'v', 25, 'produtos', 'produtos.php', '2023-08-17 20:40:02', 0),
(16, 'r', 26, 'produtos', 'view/produtos.php', '2023-08-17 20:40:02', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`ID_ADM`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`ID_CARRINHO`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CLIENTE`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`ID_ENDERECO`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `filtros`
--
ALTER TABLE `filtros`
  ADD PRIMARY KEY (`ID_FILTRO`);

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`ID_ITENS`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID_MENU`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID_PEDIDO`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_endereco` (`id_endereco`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID_PRODUTO`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `finalidade` (`finalidade`);

--
-- Índices para tabela `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`ID_SUBMENU`),
  ADD KEY `ID_MENU_FK` (`ID_MENU_FK`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `ID_ADM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `ID_CARRINHO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `ID_ENDERECO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `filtros`
--
ALTER TABLE `filtros`
  MODIFY `ID_FILTRO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `ID_ITENS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_MENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID_PEDIDO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID_PRODUTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `submenu`
--
ALTER TABLE `submenu`
  MODIFY `ID_SUBMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID_PRODUTO`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`);

--
-- Limitadores para a tabela `itens`
--
ALTER TABLE `itens`
  ADD CONSTRAINT `itens_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`ID_PEDIDO`),
  ADD CONSTRAINT `itens_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID_PRODUTO`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`ID_ENDERECO`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `filtros` (`ID_FILTRO`),
  ADD CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`finalidade`) REFERENCES `filtros` (`ID_FILTRO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;