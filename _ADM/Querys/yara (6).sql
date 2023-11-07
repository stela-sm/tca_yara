-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/10/2023 às 01:56
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.1.6

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

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `CheckEmailCPF` (IN `p_email` VARCHAR(255), IN `p_cpf` VARCHAR(11), OUT `p_result` INT, OUT `p_user_id` INT)   BEGIN
    DECLARE email_count INT;
    DECLARE cpf_count INT;
    
    SELECT COUNT(*) INTO email_count FROM adm WHERE email = p_email;
    SELECT COUNT(*) INTO cpf_count FROM adm WHERE cpf = p_cpf;

    IF email_count > 0 OR cpf_count > 0 THEN
        SET p_result = 1;
        
        -- Se um usuário for encontrado, pegue o ID
        SELECT ID_ADM INTO p_user_id FROM adm WHERE email = p_email OR cpf = p_cpf;
    ELSE
        SET p_result = 0;
        SET p_user_id = NULL; -- Defina como NULL se nenhum usuário for encontrado
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CheckEmailCPFCliente` (IN `p_email` VARCHAR(255), IN `p_cpf` VARCHAR(11), OUT `p_result` INT, OUT `p_user_id` INT)   BEGIN
    DECLARE email_count INT;
    DECLARE cpf_count INT;
    
    SELECT COUNT(*) INTO email_count FROM cliente WHERE email = p_email;
    SELECT COUNT(*) INTO cpf_count FROM cliente WHERE cpf = p_cpf;

    IF email_count > 0 OR cpf_count > 0 THEN
        SET p_result = 1;
        
        -- Se um usuário for encontrado, pegue o ID
        SELECT ID_CLIENTE INTO p_user_id FROM cliente WHERE email = p_email OR cpf = p_cpf;
    ELSE
        SET p_result = 0;
        SET p_user_id = NULL; -- Defina como NULL se nenhum usuário for encontrado
    END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `ID_ADM` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `poder` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`ID_ADM`, `nome`, `email`, `cpf`, `senha`, `celular`, `poder`, `status`, `datahora`) VALUES
(1, 'Stela ', 'stela@gmail.com', '40527647810', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '11963220905', 5, '1', '2023-09-14 17:25:48'),
(6, 'samuel', 'samuel@gmail.com', '16511604810', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '11993832299', 1, '1', '2023-08-29 20:34:10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `ID_CARRINHO` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`ID_CARRINHO`, `id_cliente`, `id_produto`, `quantidade`, `preco`) VALUES
(1, 1, 2, 2, 180);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID_CLIENTE` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `datahora` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL COMMENT '1 - ativo: 0-inativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`ID_CLIENTE`, `nome`, `cpf`, `email`, `senha`, `celular`, `datahora`, `status`) VALUES
(1, 'Laura Barbara ', '40527647810', 'laura@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '11963220905', '2023-10-23 21:57:51', 1),
(5, 'stela', '16511604810', 'stelamontenegro3@gmail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '', '2023-10-04 22:47:33', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cod_temp`
--

CREATE TABLE `cod_temp` (
  `ID_COD` int(11) NOT NULL,
  `codigo` varchar(6) NOT NULL,
  `datahora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
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
  `numero` int(11) DEFAULT NULL,
  `bloco` varchar(10) DEFAULT NULL,
  `apto` varchar(10) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `endereco`
--

INSERT INTO `endereco` (`ID_ENDERECO`, `id_cliente`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `bloco`, `apto`, `nome`, `datahora`) VALUES
(1, 1, '04652150', 'Brasil', 'SP', 'São Paulo', 'Jardim', 'Rua Damásio Rodrigues Gomes', 54, '52', NULL, 'Casa Família', '0000-00-00 00:00:00'),
(5, 1, '04652150', 'Brasil', 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', NULL, NULL, '65', 'Escritório', '0000-00-00 00:00:00'),
(7, 1, '04652150', NULL, 'SP', 'São Paulo', 'Jardim', 'Rua Damásio Rodrigues Gomes', 54, '3     ', NULL, 'Default', '0000-00-00 00:00:00'),
(8, 1, '04652150', NULL, 'SP', 'São Paulo', 'Jardim', 'Rua Damásio Rodrigues Gomes', 0, '2         ', '25', 'Padrão', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `filtros`
--

CREATE TABLE `filtros` (
  `ID_FILTRO` int(11) NOT NULL,
  `nome_filtro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `filtros`
--

INSERT INTO `filtros` (`ID_FILTRO`, `nome_filtro`) VALUES
(1, 'Sérum');

-- --------------------------------------------------------

--
-- Estrutura para tabela `itens`
--

CREATE TABLE `itens` (
  `ID_ITENS` int(11) NOT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `presente` int(11) DEFAULT NULL COMMENT '1 = sim; 0 - não',
  `valor_uni` decimal(10,2) DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `itens`
--

INSERT INTO `itens` (`ID_ITENS`, `id_pedido`, `id_produto`, `nome`, `quantidade`, `presente`, `valor_uni`, `valor_total`, `datahora`) VALUES
(1, 1, 2, 'Creme aloe vera', 2, 0, 50.00, 100.00, '2023-08-23 15:32:05'),
(2, 1, 2, 'Creme aloe vera', 2, 1, 50.00, 100.00, '2023-08-23 17:09:22'),
(3, 2, 3, 'serum jojoba', 2, 0, 50.00, 100.00, '2023-08-23 15:32:05'),
(4, 2, 3, 'serum jojoba', 2, 1, 50.00, 100.00, '2023-08-23 17:09:22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
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
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`ID_PEDIDO`, `id_cliente`, `id_endereco`, `valor`, `pagamento`, `status`, `datahora`) VALUES
(1, 1, 1, 50.00, 'crédito', '3', '2023-08-24 20:26:10'),
(2, 1, 1, 50.00, 'crédito', '4', '2023-09-24 21:13:18');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos_status`
--

CREATE TABLE `pedidos_status` (
  `ID_STATUS` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pedidos_status`
--

INSERT INTO `pedidos_status` (`ID_STATUS`, `status`) VALUES
(1, 'Aguardando Pagamento'),
(2, 'Em preparação'),
(3, 'Em rota de entrega'),
(4, 'Finalizado'),
(5, 'Aguardando devolução'),
(6, 'Estornado'),
(7, 'Cancelado'),
(8, 'Tentativa de entrega');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID_PRODUTO` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `img` varchar(100) NOT NULL,
  `img_sec` varchar(100) NOT NULL,
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
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`ID_PRODUTO`, `nome`, `descricao`, `img`, `img_sec`, `img_hover`, `categoria`, `finalidade`, `estoque`, `valor_uni`, `ingredientes`, `status`, `datahora`) VALUES
(2, 'Creme aloe vera', 'Formulado com aloe vera de alta qualidade, este creme exclusivo oferece uma experiência de cuidado da pele como nenhuma outra. A aloe vera, conhecida por suas propriedades hidratantes e curativas, é o segredo para uma pele saudável e radiante.', 'produto_UAaRUhol_img_.jpeg', 'produto_ackdASgG_imgsec_.png', 'produto_WufLjgBI_imghover_.png', 1, 1, 2225, 89.99, 'Gel de Aloe Vera: 60% (proporção maior para maximizar os benefícios)\nÓleo de Jojoba: 10%\nÓleo de Coco Fracionado: 8%\nGlicerina Vegetal: 5%\nManteiga de Karité: 5%\nEmulsificante Natural (como cera de abelha ou emulsificante vegetal): 6%\nÁgua Destilada: 4%\nConservante Natural (como extrato de to', '1 ', '2023-09-19 20:46:59'),
(3, 'serum jojoba', 'Formulado com aloe vera de alta qualidade, este creme exclusivo oferece uma experiência de cuidado da pele como nenhuma outra. A aloe vera, conhecida por suas propriedades hidratantes e curativas, é o segredo para uma pele saudável e radiante.', 'produto_UAaRUhol_img_.jpeg', 'produto_ackdASgG_imgsec_.png', 'produto_WufLjgBI_imghover_.png', 1, 1, 2225, 89.99, 'Gel de Aloe Vera: 60% (proporção maior para maximizar os benefícios)\r\nÓleo de Jojoba: 10%\r\nÓleo de Coco Fracionado: 8%\r\nGlicerina Vegetal: 5%\r\nManteiga de Karité: 5%\r\nEmulsificante Natural (como cera de abelha ou emulsificante vegetal): 6%\r\nÁgua Destilada: 4%\r\nConservante Natural (como extrato de to', '1 ', '2023-09-19 20:46:59');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`ID_ADM`),
  ADD UNIQUE KEY `unique_email` (`email`),
  ADD UNIQUE KEY `cpfadm` (`cpf`);

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`ID_CARRINHO`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CLIENTE`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `cod_temp`
--
ALTER TABLE `cod_temp`
  ADD PRIMARY KEY (`ID_COD`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`ID_ENDERECO`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices de tabela `filtros`
--
ALTER TABLE `filtros`
  ADD PRIMARY KEY (`ID_FILTRO`);

--
-- Índices de tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`ID_ITENS`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_produto` (`id_produto`),
  ADD KEY `nome_fk` (`nome`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID_PEDIDO`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_endereco` (`id_endereco`);

--
-- Índices de tabela `pedidos_status`
--
ALTER TABLE `pedidos_status`
  ADD PRIMARY KEY (`ID_STATUS`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID_PRODUTO`),
  ADD UNIQUE KEY `nome` (`nome`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `finalidade` (`finalidade`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `ID_ADM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `ID_CARRINHO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cod_temp`
--
ALTER TABLE `cod_temp`
  MODIFY `ID_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `ID_ENDERECO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `filtros`
--
ALTER TABLE `filtros`
  MODIFY `ID_FILTRO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `ID_ITENS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID_PEDIDO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedidos_status`
--
ALTER TABLE `pedidos_status`
  MODIFY `ID_STATUS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID_PRODUTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID_PRODUTO`);

--
-- Restrições para tabelas `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`);

--
-- Restrições para tabelas `itens`
--
ALTER TABLE `itens`
  ADD CONSTRAINT `itens_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`ID_PEDIDO`),
  ADD CONSTRAINT `itens_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID_PRODUTO`),
  ADD CONSTRAINT `nome_fk` FOREIGN KEY (`nome`) REFERENCES `produtos` (`nome`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`ID_ENDERECO`);

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `filtros` (`ID_FILTRO`),
  ADD CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`finalidade`) REFERENCES `filtros` (`ID_FILTRO`);

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `ExcluirRegistrosApos5Minutos` ON SCHEDULE EVERY 1 MINUTE STARTS '2023-10-26 19:39:22' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM cod_temp WHERE datahora < NOW() - INTERVAL 5 MINUTE$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
