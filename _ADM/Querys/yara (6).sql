-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Nov-2023 às 00:04
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



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
) ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`ID_ADM`, `nome`, `email`, `cpf`, `senha`, `celular`, `poder`, `status`, `datahora`) VALUES
(1, 'Stela Montenegro', 'Ystelam@gmail.com', '40527647810', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '11963220905', 5, '1', '2023-11-29 20:36:07'),
(8, 'Samuel Roberto', 'Ysamuel@gmail.com', '05912737055', '91c9e09cb2aacd98a0c4716b14c9ae35a3f0ed97ad14b16f1e56c099b1bae3db', '11963208060', 5, '1', '2023-11-29 20:34:16'),
(9, 'Clara Sanches', 'Yclara@gmail.com', '86238722070', '4b74c9c54f60b3425db84008830afa64571ba59d658244dd34307bd2b5023ad9', '11992731689', 5, '1', '2023-11-29 20:35:15'),
(10, 'Laura Barbara ', 'Ylaura@gmail.com', '17990024039', '71e6c2984a86d86248b8d0a86c6d6158324ec99045a7beeebfcae810e6aad8c1', '11980514305', 5, '1', '2023-11-29 20:35:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `ID_CARRINHO` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `id_produto` int DEFAULT NULL,
  `nome_produto` varchar(255)  NOT NULL,
  `quantidade` int DEFAULT NULL,
  `preco` float(10,2) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID_CARRINHO`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_produto` (`id_produto`),
  KEY `fk_nome_produto` (`nome_produto`)
) ;

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
) ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID_CLIENTE`, `nome`, `cpf`, `email`, `senha`, `celular`, `datahora`, `status`) VALUES
(10, 'Samuel Roberto', '94991569095', 'samuel@gmail.com', '91c9e09cb2aacd98a0c4716b14c9ae35a3f0ed97ad14b16f1e56c099b1bae3db', '11963208060', '2023-11-29 23:26:04', 1),
(11, 'Clara Sanches', '98067398097', 'clara@gmail.com', '4b74c9c54f60b3425db84008830afa64571ba59d658244dd34307bd2b5023ad9', '11992731689', '2023-11-29 23:26:53', 1),
(12, 'Laura Barbara', '24069528008', 'laura@gmail.com', '71e6c2984a86d86248b8d0a86c6d6158324ec99045a7beeebfcae810e6aad8c1', '11980514305', '2023-11-29 23:57:52', 1),
(13, 'Stela Montenegro', '05912737055', 'stela@gmail.com', '5f52379b89545a5adca3b5ac09d0de50d11f85c85afb9e2e84eed4c6f96eeb99', '11963220905', '2023-11-29 23:28:59', 1);

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
) ;

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
) ;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`ID_ENDERECO`, `id_cliente`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `bloco`, `apto`, `nome`, `datahora`, `status`) VALUES
(29, 10, '04375050', NULL, 'SP', 'São Paulo', 'Vila Santa Catarina', 'Rua Coriolano Durand', 0, '', '', 'Coriolano', '2023-11-29 20:45:13', 1),
(30, 10, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 54, '', '', 'casa', '2023-11-29 20:48:58', 0),
(31, 10, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 54, '', '', 'Novo Endereço', '2023-11-29 20:51:32', 0),
(32, 12, '19013-790', NULL, 'SP', 'Presidente Prudente', 'Jardim Paulistano', 'Rua Coriolano Gomes Palmeira', 0, '3', '2001', 'Apto', '2023-11-29 20:56:33', 1),
(33, 11, '19013-790', NULL, 'SP', 'Presidente Prudente', 'Jardim Paulistano', 'Rua Coriolano Gomes Palmeira', 41, '', '', 'Casa Família', '2023-11-29 20:59:38', 1),
(34, 13, '19013790', NULL, 'SP', 'Presidente Prudente', 'Jardim Paulistano', 'Rua Coriolano Gomes Palmeira', 54, '', '', 'new', '2023-11-29 21:01:51', 1);

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
  `valor_uni` decimal(10,2) DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_ITENS`),
  KEY `id_pedido` (`id_pedido`),
  KEY `id_produto` (`id_produto`),
  KEY `nome_fk` (`nome`)
) ;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`ID_ITENS`, `id_pedido`, `id_produto`, `nome`, `quantidade`, `valor_uni`, `valor_total`, `datahora`) VALUES
(40, 87, 6, 'Esfoliante Facial', 2, '35.00', '70.00', '2023-11-29 20:54:29'),
(41, 88, 11, 'Sérum Iluminador - Vitamina C', 2, '60.00', '120.00', '2023-11-29 20:57:04'),
(42, 88, 7, 'Espuma de Limpeza', 1, '59.99', '59.99', '2023-11-29 20:57:05'),
(43, 89, 6, 'Esfoliante Facial', 1, '35.00', '35.00', '2023-11-29 20:59:45'),
(44, 90, 9, 'Protetor Solar Labial', 2, '25.99', '51.98', '2023-11-29 21:01:58'),
(45, 90, 14, 'Contorno dos Olhos', 3, '39.99', '119.97', '2023-11-29 21:01:58');

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
) ;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`ID_PEDIDO`, `id_cliente`, `id_endereco`, `valor`, `pagamento`, `status`, `datahora`) VALUES
(87, 10, 29, '70.00', 'boleto', '1', '2023-11-29 20:54:29'),
(88, 12, 32, '179.99', 'credito', '1', '2023-11-29 20:57:04'),
(89, 11, 33, '35.00', 'pix', '1', '2023-11-29 20:59:45'),
(90, 13, 34, '171.95', 'boleto', '1', '2023-11-29 21:01:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_status`
--

DROP TABLE IF EXISTS `pedidos_status`;
CREATE TABLE IF NOT EXISTS `pedidos_status` (
  `ID_STATUS` int NOT NULL AUTO_INCREMENT,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_STATUS`)
) ;

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
  `instrucao` varchar(500) DEFAULT NULL,
  `estoque` int DEFAULT NULL,
  `valor_uni` decimal(10,2) DEFAULT NULL,
  `ingredientes` varchar(300) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_PRODUTO`),
  UNIQUE KEY `nome` (`nome`),
  UNIQUE KEY `nome_2` (`nome`),
  KEY `categoria` (`instrucao`)
) ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID_PRODUTO`, `nome`, `descricao`, `img`, `img_sec`, `instrucao`, `estoque`, `valor_uni`, `ingredientes`, `status`, `datahora`) VALUES
(5, 'Tônico Facial', 'Sinta a refrescância revitalizante a cada aplicação. O Tônico YARA ajuda a acalmar a pele, reduzir a vermelhidão e prepará-la para os próximos passos da sua rotina de cuidados. Ajuda a equilibrar o pH da pele, remove resíduos de sujeira e impurezas, e prepara a pele para receber os produtos de cuidados posteriores, como hidratantes e soros.', 'produto_fvIQneZJ_img_.png', 'produto_KmUOvtsL_imgsec_.jpg', 'Após a limpeza do rosto, aplique o tônico facial em um algodão ou nas mãos e suavemente passe sobre o rosto, evitando a área dos olhos. Não enxágue. Siga com os próximos passos da sua rotina de cuidados com a pele, como sérum e hidratante.', 100, '40.00', 'Extrato de Pepino: O extrato de pepino é rico em água e nutrientes que proporcionam hidratação à pele, ao mesmo tempo em que oferece uma sensação refrescante e calmante.\r\nExtrato de Camomila: A camomila é famosa por suas propriedades calmantes e anti-inflamatórias. Ela ajuda a reduzir a vermelhidão ', '1', '2023-11-29 17:45:25'),
(6, 'Esfoliante Facial', 'Este esfoliante inovador combina a eficácia de uma limpeza profunda com a gentileza de uma fórmula vegana, tornando-o adequado para todos os tipos de pele. Além de esfoliar, nosso Esfoliante Facial Vegano também contém ingredientes hidratantes, como aloe vera e ácido hialurônico., que cuidam da sua pele enquanto dissolvem suavemente as camadas superiores de células mortas da pele, estimulando a renovação celular.\r\n', 'produto_zrDDmSEd_img_.png', 'produto_ydlxPyUv_imgsec_.jpg', 'Aplique o esfoliante no rosto úmido, massageie suavemente em movimentos circulares por cerca de 1 minuto e depois enxágue completamente com água morna. Use 1-2 vezes por semana para uma pele mais suave e renovada. Evite a área dos olhos.', 193, '35.00', 'Ácido Glicólico (derivado de cana-de-açúcar): Este ácido alfa-hidroxi (AHA) ajuda a esfoliar suavemente a pele,  estimulando a renovação celular para uma pele mais suave e uniforme.\r\nÁcido Lático (de origem vegetal): Outro AHA suave que ajuda na esfoliação e hidratação da pele', '1', '2023-11-29 17:33:59'),
(7, 'Espuma de Limpeza', 'Descubra a Espuma Facial YARA, é uma criação original que combina o poder da natureza com cuidado consciente. Desenvolvida especialmente para peles sensíveis, proporciona uma experiência de limpeza profunda e delicada, enquanto envolve os seus sentidos com o aroma refrescante do chá verde.', 'produto_rewfuqSX_img_.png', 'produto_NBjidaDi_imgsec_.jpg', 'Comece com o rosto úmido. Aplique uma pequena quantidade de espuma e massageie suavemente por cerca de 30 segundos. Enxágue completamente com água morna e seque o rosto delicadamente. Em seguida, siga com sua rotina de cuidados com a pele.', 195, '59.99', 'Cocoil Isetionato de Sódio: Um surfactante suave derivado do coco, que limpa a pele sem causar ressecamento.\r\nGlicerina Vegetal: Um agente hidratante que ajuda a manter a umidade da pele, deixando-a macia e suave.\r\nExtrato de Chá Verde (Camellia Sinensis): Um poderoso antioxidante ', '1', '2023-11-29 17:21:35'),
(8, 'Creme Hidratante Facial', 'Nosso creme oferece uma hidratação profunda e duradoura, deixando sua pele suave, macia e revitalizada, com uma textura leve e refrescante perfeita para uso diário. Desenvolvido para se adaptar a todos os tipos de pele, desde a oleosa até a sensível, equilibrando a hidratação e promovendo uma pele saudável. Além disso, o creme possui um aroma suave e agradável, proporcionando uma experiência sensorial relaxante durante a aplicação. \r\n', 'produto_mLFlZgtk_img_.png', 'produto_CAwpIGvF_imgsec_.jpg', 'Aplique o creme hidratante sobre a pele limpa e seca. Massageie suavemente até a completa absorção. Use de manhã e/ou à noite, conforme necessário, como parte da sua rotina de cuidados com a pele.', 199, '79.99', 'Extrato de Chá Verde: Rico em antioxidantes, o extrato de chá verde ajuda a proteger a pele contra os danos dos radicais livres e a reduzir a inflamação, proporcionando um aspecto saudável e revitalizado.\r\nManteiga de Karité: Nutre profundamente a pele, deixando-a suave e protegida\r\n', '1', '2023-11-29 17:31:54'),
(9, 'Protetor Solar Labial', 'Prepare-se para experimentar a revolução em cuidados labiais com nosso Hidratante Labial Vegano com FPS 15. Criado com amor e compromisso com a beleza e o bem-estar sustentáveis, este é o segredo para lábios irresistivelmente macios, protegidos e deliciosamente perfumados. Nossa fórmula rica e indulgente desliza suavemente sobre seus lábios, proporcionando uma hidratação profunda e duradoura. \r\n', 'produto_MQNQbnug_img_.png', 'produto_gjnfATxV_imgsec_.jpg', 'Aplique o hidratante labial com FPS diretamente nos lábios, quantas vezes for necessário ao longo do dia. Certifique-se de reaplicar sempre que sentir os lábios ressecados ou antes de se expor ao sol. O FPS ajuda a proteger os lábios dos danos causados pelos raios UV.', 298, '25.99', 'Cera de Candelila (Euphorbia cerifera): Uma cera vegetal que confere textura ao hidratante, garantindo uma aplicação suave e uniforme.\r\nVitamina E (Tocoferol): Um antioxidante natural que ajuda a manter a saúde dos lábios, protegendo contra os efeitos nocivos dos radicais livres.', '1', '2023-11-29 17:50:13'),
(11, 'Sérum Iluminador - Vitamina C', 'O Sérum Iluminador de Vitamina C é um cuidado essencial para a sua pele que combina a potência da vitamina C com ingredientes hidratantes de alta qualidade. Este sérum foi projetado para proporcionar uma pele radiante e saudável. Este inovador sérum vegano é um verdadeiro avanço na indústria de cuidados com a pele, combinando ingredientes exclusivos e naturais para proporcionar uma luminosidade natural e radiante à sua pele.\r\n', 'produto_YkzhuEnj_img_.png', 'produto_IkyvDxkR_imgsec_.jpg', 'Após limpar o rosto, aplique o sérum de vitamina C algumas gotas na pele seca. Espalhe suavemente, evitando contato com os olhos. Deixe absorver por alguns minutos e siga com hidratante e protetor solar, especialmente durante o dia.', 198, '60.00', 'Ascorbato de Tetraisopalmitato (Vitamina C): Uma forma estável de vitamina C, conhecida por seus benefícios antioxidantes e de iluminação da pele.\r\nExtrato de Camomila (Chamomilla Recutita): Um extrato botânico que pode acalmar a pele e reduzir a vermelhidão.', '1', '2023-11-29 17:44:19'),
(12, 'Sérum Retinol + Colágeno', 'Transforme a sua rotina de cuidados com a pele com o nosso Creme de Retinol + Colágeno e redescubra uma aparência mais jovem e radiante de forma ética e autêntica. Esse produto consiste em uma fórmula avançada que combate rugas enquanto ilumina e revitaliza a pele. Desenvolvido com ingredientes naturais e livres, adiciona frescor e firmeza à derme\r\n', 'produto_HRMcVwZu_img_.png', 'produto_FXkOrorx_imgsec_.jpg', 'Após a limpeza da pele, aplique uma pequena quantidade do creme sobre o rosto e pescoço, massageando suavemente com movimentos circulares. Use diariamente, de preferência à noite, para obter os melhores resultados.', 300, '139.90', 'Retinol (2%): O retinol é um derivado da vitamina A e é amplamente utilizado para estimular a renovação celular, reduzir rugas e melhorar a textura da pele.\r\nColágeno (2%): O colágeno é adicionado para ajudar a melhorar a firmeza e elasticidade da pele, reduzindo a aparência de rugas.', '1', '2023-11-29 17:40:55'),
(13, 'Sérum Ácido Salicílico', 'Este sérum é uma solução avançada para combater eficazmente a acne e melhorar a saúde da pele. Formulado com ingredientes poderosos e livres de ingredientes de origem animal, este sérum é projetado para proporcionar resultados visíveis no tratamento da acne e no refinamento da textura da pele sem precisar de hidratação extra ou reposição de nutrientes.\r\n', 'produto_pjoDrUJJ_img_.png', 'produto_drVMIUqB_imgsec_.jpg', 'Aplique o sérum de ácido salicílico na pele limpa e seca, evitando a área dos olhos. Use de acordo com as instruções do produto, geralmente uma vez ao dia, à noite. Siga com hidratante e protetor solar pela manhã. O ácido salicílico ajuda a esfoliar suavemente a pele, melhorando a textura e reduzindo imperfeições.', 297, '59.99', 'Ácido Salicílico (2%): O ácido salicílico é um beta-hidroxiácido (BHA) conhecido por sua eficácia na penetração nos poros e na redução de cravos e espinhas.\r\nNiacinamida: Também conhecida como vitamina B3, a niacinamida ajuda a reduzir a vermelhidão e a melhorar a textura da pele.', '1', '2023-11-29 17:40:07'),
(14, 'Contorno dos Olhos', 'Este creme para os olhos vegano é uma solução avançada para a área delicada dos olhos, formulado especificamente para proporcionar resultados potentes sem causar irritação. Com uma mistura cuidadosamente selecionada de ingredientes naturais e livres de crueldade, este creme é adequado para todos os tipos de pele, incluindo os mais sensíveis.\r\n', 'produto_RRCdnMkJ_img_.png', 'produto_psFlQlih_imgsec_.jpg', 'Aplique uma pequena quantidade do creme na ponta dos dedos e suavemente dê batidinhas na área ao redor dos olhos, de manhã e à noite. Evite o contato direto com os olhos. Use regularmente para obter os melhores resultados.', 197, '39.99', 'Vitamina C (Ascorbato de Tetraisopalmitato) (2%): Esta forma estável de vitamina C ajuda a iluminar a pele e reduzir a aparência de olheiras.\r\nVitamina E (Tocoferol) (0,5%): A vitamina E é um antioxidante que protege a pele dos danos causados pelos radicais livres.', '1', '2023-11-29 20:19:06');

--
-- Acionadores `produtos`
--
DROP TRIGGER IF EXISTS `atualizar_status`;
DELIMITER $$
CREATE TRIGGER `atualizar_status` BEFORE UPDATE ON `produtos` FOR EACH ROW BEGIN
    IF NEW.estoque = 0 THEN
        SET NEW.status = 0;
          UPDATE carrinho SET status = 0 WHERE id_produto = NEW.ID_PRODUTO;
          END IF;
          
          IF NEW.estoque != 0 and NEW.status != 0 THEN
        SET NEW.status = 1;
          UPDATE carrinho SET status = 1 WHERE id_produto = NEW.ID_PRODUTO;
          
    END IF;
    
    
    
     IF NEW.estoque != 0 and OLD.status = 0 THEN
        SET NEW.status = 1;
          UPDATE carrinho SET status = 1 WHERE id_produto = NEW.ID_PRODUTO;
          
    END IF;
     IF NEW.status = 0 and OLD.status = 1 THEN
        SET NEW.status = 0;
          UPDATE carrinho SET status = 0 WHERE id_produto = NEW.ID_PRODUTO;
          END IF;
END
$$
DELIMITER ;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID_PRODUTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nome_produto` FOREIGN KEY (`nome_produto`) REFERENCES `produtos` (`nome`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `itens`
--
ALTER TABLE `itens`
  ADD CONSTRAINT `itens_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`ID_PEDIDO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itens_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID_PRODUTO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nome_fk` FOREIGN KEY (`nome`) REFERENCES `produtos` (`nome`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`ID_ENDERECO`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Eventos
--
DROP EVENT IF EXISTS `ExcluirRegistrosApos5Minutos`$$
CREATE DEFINER=`root`@`localhost` EVENT `ExcluirRegistrosApos5Minutos` ON SCHEDULE EVERY 1 MINUTE STARTS '2023-10-26 19:39:22' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM cod_temp WHERE datahora < NOW() - INTERVAL 5 MINUTE$$

DELIMITER ;
COMMIT;


