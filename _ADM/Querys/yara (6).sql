-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Nov-2023 às 00:38
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26
create database yara;
use yara;
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
DROP PROCEDURE IF EXISTS `CheckEmailCPF`$$
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

DROP PROCEDURE IF EXISTS `CheckEmailCPFCliente`$$
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
-- Estrutura da tabela `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE IF NOT EXISTS `adm` (
  `ID_ADM` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `poder` int DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_ADM`),
  UNIQUE KEY `unique_email` (`email`),
  UNIQUE KEY `cpfadm` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`ID_ADM`, `nome`, `email`, `cpf`, `senha`, `celular`, `poder`, `status`, `datahora`) VALUES
(1, 'Stela ', 'stela@gmail.com', '40527647810', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '11963220905', 5, '1', '2023-09-14 17:25:48'),
(6, 'samuel', 'samuel@gmail.com', '16511604810', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '11993832299', 1, '1', '2023-08-29 20:34:10'),
(7, 'laura', 'laura@gmail.com', '43027196057', 'e4597143db79983bf1125f8e6804b59f1426ff13126b5f18a2a6f6d1e20fdc84', '11963220905', 2, '1', '2023-11-19 22:57:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `ID_CARRINHO` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `id_produto` int DEFAULT NULL,
  `nome_produto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `quantidade` int DEFAULT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`ID_CARRINHO`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_produto` (`id_produto`),
  KEY `fk_nome_produto` (`nome_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`ID_CARRINHO`, `id_cliente`, `id_produto`, `nome_produto`, `quantidade`, `preco`) VALUES
(1, 1, 2, 'Creme aloe vera', 3, 89.99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `ID_CLIENTE` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `datahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL COMMENT '1 - ativo: 0-inativo',
  PRIMARY KEY (`ID_CLIENTE`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `celular` (`celular`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID_CLIENTE`, `nome`, `cpf`, `email`, `senha`, `celular`, `datahora`, `status`) VALUES
(1, 'Laura Barbara Cruz', '40527647810', 'laura@gmail.com', 'c0d7c54022345b39c9be73e19b30ccb040ba03b1fefb2566a9f510a09aba4796', '11963220905', '2023-11-02 00:27:37', 1),
(6, 'stela montenegro', '16511604810', 'stelam@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '11993832299', '2023-11-20 02:01:42', 1),
(9, 'samuel', '77212230081', 'samuel@gmail.com', 'e4597143db79983bf1125f8e6804b59f1426ff13126b5f18a2a6f6d1e20fdc84', '11965989955', '2023-11-20 02:02:14', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cod_temp`
--

DROP TABLE IF EXISTS `cod_temp`;
CREATE TABLE IF NOT EXISTS `cod_temp` (
  `ID_COD` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(6) NOT NULL,
  `datahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_COD`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `ID_ENDERECO` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` int DEFAULT NULL,
  `bloco` varchar(10) DEFAULT NULL,
  `apto` varchar(10) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1-ative| 0-disabled',
  PRIMARY KEY (`ID_ENDERECO`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`ID_ENDERECO`, `id_cliente`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `bloco`, `apto`, `nome`, `datahora`, `status`) VALUES
(1, 1, '04652150', 'Brasil', 'SP', 'São Paulo', 'Jardim', 'Rua Damásio Rodrigues Gomes', 85, '52 ', '', 'Casa Família', '0000-00-00 00:00:00', 1),
(5, 1, '04652150', 'Brasil', 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', NULL, NULL, '65', 'Escritório', '0000-00-00 00:00:00', 0),
(7, 1, '04652150', NULL, 'SP', 'São Paulo', 'Jardim', 'Rua Damásio Rodrigues Gomes', 54, '3      ', '', 'vó', '0000-00-00 00:00:00', 0),
(8, 1, '04652150', NULL, 'SP', 'São Paulo', 'Jardim', 'Rua Damásio Rodrigues Gomes', 0, '2         ', '25', 'Padrão', '0000-00-00 00:00:00', 1),
(9, 1, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 54, '3', '', 'Novo Endereço', '0000-00-00 00:00:00', 1),
(10, 1, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 54, '  2', '', 'Casa do Celso', '0000-00-00 00:00:00', 1),
(11, 1, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 54, '', '', 'Novo Endereço', '0000-00-00 00:00:00', 0),
(12, 1, '04652150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 54, '', '', 'Casa', '0000-00-00 00:00:00', 0),
(13, 6, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 0, '2 ', '1223', 'Depósito 2', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filtros`
--

DROP TABLE IF EXISTS `filtros`;
CREATE TABLE IF NOT EXISTS `filtros` (
  `ID_FILTRO` int NOT NULL AUTO_INCREMENT,
  `nome_filtro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_FILTRO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `filtros`
--

INSERT INTO `filtros` (`ID_FILTRO`, `nome_filtro`) VALUES
(1, 'Sérum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE IF NOT EXISTS `itens` (
  `ID_ITENS` int NOT NULL AUTO_INCREMENT,
  `id_pedido` int DEFAULT NULL,
  `id_produto` int DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `quantidade` int DEFAULT NULL,
  `presente` int DEFAULT NULL COMMENT '1 = sim; 0 - não',
  `valor_uni` decimal(10,2) DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_ITENS`),
  KEY `id_pedido` (`id_pedido`),
  KEY `id_produto` (`id_produto`),
  KEY `nome_fk` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`ID_ITENS`, `id_pedido`, `id_produto`, `nome`, `quantidade`, `presente`, `valor_uni`, `valor_total`, `datahora`) VALUES
(1, 1, 2, 'Creme aloe vera', 2, 0, '50.00', '100.00', '2023-08-23 15:32:05'),
(2, 1, 2, 'Creme aloe vera', 2, 1, '50.00', '100.00', '2023-08-23 17:09:22'),
(3, 2, 3, 'serum jojoba', 2, 0, '50.00', '100.00', '2023-08-23 15:32:05'),
(4, 2, 3, 'serum jojoba', 2, 1, '50.00', '100.00', '2023-08-23 17:09:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `ID_PEDIDO` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `id_endereco` int DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `pagamento` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_PEDIDO`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_endereco` (`id_endereco`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`ID_PEDIDO`, `id_cliente`, `id_endereco`, `valor`, `pagamento`, `status`, `datahora`) VALUES
(1, 1, 1, '50.00', 'crédito', '3', '2023-08-24 20:26:10'),
(2, 1, 1, '50.00', 'crédito', '4', '2023-09-24 21:13:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_status`
--

DROP TABLE IF EXISTS `pedidos_status`;
CREATE TABLE IF NOT EXISTS `pedidos_status` (
  `ID_STATUS` int NOT NULL AUTO_INCREMENT,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_STATUS`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pedidos_status`
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
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `ID_PRODUTO` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text,
  `img` varchar(100) NOT NULL,
  `img_sec` varchar(100) NOT NULL,
  `categoria` int DEFAULT NULL,
  `estoque` int DEFAULT NULL,
  `valor_uni` decimal(10,2) DEFAULT NULL,
  `ingredientes` varchar(300) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_PRODUTO`),
  UNIQUE KEY `nome` (`nome`),
  UNIQUE KEY `nome_2` (`nome`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID_PRODUTO`, `nome`, `descricao`, `img`, `img_sec`, `categoria`, `estoque`, `valor_uni`, `ingredientes`, `status`, `datahora`) VALUES
(2, 'Creme aloe vera', 'Formulado com aloe vera de alta qualidade, este creme exclusivo oferece uma experiência de cuidado da pele como nenhuma outra. A aloe vera, conhecida por suas propriedades hidratantes e curativas, é o segredo para uma pele saudável e radiante.', 'produto_UAaRUhol_img_.jpeg', 'produto_ackdASgG_imgsec_.png', 1, 2225, '109.99', 'Gel de Aloe Vera: 60% (proporção maior para maximizar os benefícios)\r\nÓleo de Jojoba: 10%\r\nÓleo de Coco Fracionado: 8%\r\nGlicerina Vegetal: 5%\r\nManteiga de Karité: 5%\r\nEmulsificante Natural (como cera de abelha ou emulsificante vegetal): 6%\r\nÁgua Destilada: 4%\r\nConservante Natural (como extrato de to', '1 ', '2023-11-19 20:10:33'),
(3, 'serum jojoba', 'Formulado com aloe vera de alta qualidade, este creme exclusivo oferece uma experiência de cuidado da pele como nenhuma outra. A aloe vera, conhecida por suas propriedades hidratantes e curativas, é o segredo para uma pele saudável e radiante.', 'produto_UAaRUhol_img_.jpeg', 'produto_ackdASgG_imgsec_.png', 1, 2225, '89.99', 'Gel de Aloe Vera: 60% (proporção maior para maximizar os benefícios)\r\nÓleo de Jojoba: 10%\r\nÓleo de Coco Fracionado: 8%\r\nGlicerina Vegetal: 5%\r\nManteiga de Karité: 5%\r\nEmulsificante Natural (como cera de abelha ou emulsificante vegetal): 6%\r\nÁgua Destilada: 4%\r\nConservante Natural (como extrato de to', '1 ', '2023-11-19 17:13:14'),
(4, 'asdas', 'dasd', 'produto_BmxBUKnP_img_.jpg', 'produto_cRftKFMx_imgsec_.png', 1, 3434, '343.00', 'asdas', '1 ', '2023-11-21 21:35:02');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID_PRODUTO`),
  ADD CONSTRAINT `fk_nome_produto` FOREIGN KEY (`nome_produto`) REFERENCES `produtos` (`nome`);

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
  ADD CONSTRAINT `itens_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID_PRODUTO`),
  ADD CONSTRAINT `nome_fk` FOREIGN KEY (`nome`) REFERENCES `produtos` (`nome`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `filtros` (`ID_FILTRO`);

DELIMITER $$
--
-- Eventos
--
DROP EVENT IF EXISTS `ExcluirRegistrosApos5Minutos`$$
CREATE DEFINER=`root`@`localhost` EVENT `ExcluirRegistrosApos5Minutos` ON SCHEDULE EVERY 1 MINUTE STARTS '2023-10-26 19:39:22' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM cod_temp WHERE datahora < NOW() - INTERVAL 5 MINUTE$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;