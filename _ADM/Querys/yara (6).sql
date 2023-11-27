SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



DELIMITER $$
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

INSERT INTO `adm` (`ID_ADM`, `nome`, `email`, `cpf`, `senha`, `celular`, `poder`, `status`, `datahora`) VALUES
(1, 'Stela ', 'stela@gmail.com', '40527647810', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '11963220905', 5, '1', '2023-09-14 17:25:48'),
(6, 'samuel', 'samuel@gmail.com', '16511604810', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '11993832299', 1, '1', '2023-08-29 20:34:10'),
(7, 'laura', 'laura@gmail.com', '43027196057', 'e4597143db79983bf1125f8e6804b59f1426ff13126b5f18a2a6f6d1e20fdc84', '11963220905', 2, '1', '2023-11-19 22:57:05');

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `ID_CARRINHO` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `id_produto` int DEFAULT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `quantidade` int DEFAULT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`ID_CARRINHO`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_produto` (`id_produto`),
  KEY `fk_nome_produto` (`nome_produto`)
) ;

INSERT INTO `carrinho` (`ID_CARRINHO`, `id_cliente`, `id_produto`, `nome_produto`, `quantidade`, `preco`) VALUES
(43, 6, 5, 'Tônico Facial', 2, 40),
(44, 6, 7, 'Espuma de Limpeza', 2, 59.99),
(45, 6, 8, 'Creme Hidratante Facial', 1, 79.99);

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
);

INSERT INTO `cliente` (`ID_CLIENTE`, `nome`, `cpf`, `email`, `senha`, `celular`, `datahora`, `status`) VALUES
(1, 'Laura Barbara Cruz', '40527647810', 'laura@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '11963220905', '2023-11-02 00:27:37', 1),
(6, 'Stela Montenegro', '16511604810', 'stelam@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '11993832299', '2023-11-27 22:18:44', 1),
(9, 'samuel', '77212230081', 'samuel@gmail.com', 'e4597143db79983bf1125f8e6804b59f1426ff13126b5f18a2a6f6d1e20fdc84', '11965989955', '2023-11-20 02:02:14', 1);

DROP TABLE IF EXISTS `cod_temp`;
CREATE TABLE IF NOT EXISTS `cod_temp` (
  `ID_COD` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(6) NOT NULL,
  `datahora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_COD`)
) ;

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

INSERT INTO `endereco` (`ID_ENDERECO`, `id_cliente`, `cep`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `bloco`, `apto`, `nome`, `datahora`, `status`) VALUES
(1, 1, '04652150', 'Brasil', 'SP', 'São Paulo', 'Jardim', 'Rua Damásio Rodrigues Gomes', 85, '52 ', '', 'Casa Família', '0000-00-00 00:00:00', 1),
(5, 1, '04652150', 'Brasil', 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', NULL, NULL, '65', 'Escritório', '0000-00-00 00:00:00', 0),
(7, 1, '04652150', NULL, 'SP', 'São Paulo', 'Jardim', 'Rua Damásio Rodrigues Gomes', 54, '3      ', '', 'vó', '0000-00-00 00:00:00', 0),
(8, 1, '04652150', NULL, 'SP', 'São Paulo', 'Jardim', 'Rua Damásio Rodrigues Gomes', 0, '2         ', '25', 'Padrão', '0000-00-00 00:00:00', 1),
(9, 1, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 54, '3', '', 'Novo Endereço', '0000-00-00 00:00:00', 1),
(10, 1, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 54, '  2', '', 'Casa do Celso', '0000-00-00 00:00:00', 1),
(11, 1, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 54, '', '', 'Novo Endereço', '0000-00-00 00:00:00', 0),
(12, 1, '04652150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 54, '', '', 'Casa', '0000-00-00 00:00:00', 0),
(13, 6, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 0, '2 ', '1223', 'Depósito 2', '0000-00-00 00:00:00', 0),
(24, 6, '04652-150', NULL, 'SP', 'São Paulo', 'Jardim Cidália', 'Rua Damásio Rodrigues Gomes', 60, '   ', '', 'Novo Endereço', '0000-00-00 00:00:00', 1),
(25, 6, '04711-130', NULL, 'SP', 'São Paulo', 'Vila São Francisco (Zona Sul)', 'Avenida Doutor Chucri Zaidan', 1000, ' ', '', 'ETEC', '0000-00-00 00:00:00', 1),
(26, 6, '03313000', NULL, 'SP', 'São Paulo', 'Tatuapé', 'Rua Francisco Marengo', 1910, ' ', '', 'Novo Endereço', '0000-00-00 00:00:00', 1);

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

INSERT INTO `itens` (`ID_ITENS`, `id_pedido`, `id_produto`, `nome`, `quantidade`, `valor_uni`, `valor_total`, `datahora`) VALUES
(21, 65, 2, 'Creme aloe vera', 2, '109.99', '219.98', '2023-11-25 19:56:44'),
(22, 65, 3, 'serum jojoba', 2, '89.99', '179.98', '2023-11-25 19:56:44'),
(23, 66, 2, 'Creme aloe vera', 2, '109.99', '219.98', '2023-11-25 22:24:29'),
(24, 67, 9, 'Protetor Solar Labial', 1, '25.99', '25.99', '2023-11-26 17:07:43'),
(25, 68, 5, 'Tônico Facial', 2, '40.00', '80.00', '2023-11-26 21:04:36'),
(26, 69, 6, 'Esfoliante Facial', 2, '35.00', '70.00', '2023-11-27 19:18:08'),
(27, 69, 7, 'Espuma de Limpeza', 1, '59.99', '59.99', '2023-11-27 19:18:08');

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
);

INSERT INTO `pedidos` (`ID_PEDIDO`, `id_cliente`, `id_endereco`, `valor`, `pagamento`, `status`, `datahora`) VALUES
(65, 6, 25, '399.96', 'pix', '6', '2023-11-26 20:24:59'),
(66, 6, 24, '219.98', 'boleto', '1', '2023-11-25 22:24:29'),
(67, 6, 24, '25.99', 'boleto', '1', '2023-11-26 17:07:43'),
(68, 6, 24, '80.00', 'boleto', '1', '2023-11-26 21:04:36'),
(69, 6, 24, '129.99', 'boleto', '1', '2023-11-27 19:18:08');

DROP TABLE IF EXISTS `pedidos_status`;
CREATE TABLE IF NOT EXISTS `pedidos_status` (
  `ID_STATUS` int NOT NULL AUTO_INCREMENT,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_STATUS`)
) ;

INSERT INTO `pedidos_status` (`ID_STATUS`, `status`) VALUES
(1, 'Aguardando Pagamento'),
(2, 'Em preparação'),
(3, 'Em rota de entrega'),
(4, 'Finalizado'),
(5, 'Aguardando devolução'),
(6, 'Estornado'),
(7, 'Cancelado'),
(8, 'Tentativa de entrega');

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
);

INSERT INTO `produtos` (`ID_PRODUTO`, `nome`, `descricao`, `img`, `img_sec`, `instrucao`, `estoque`, `valor_uni`, `ingredientes`, `status`, `datahora`) VALUES
(2, 'Creme aloe vera', 'Formulado com aloe vera de alta qualidade, este creme exclusivo oferece uma experiência de cuidado da pele como nenhuma outra. A aloe vera, conhecida por suas propriedades hidratantes e curativas, é o segredo para uma pele saudável e radiante.', 'produto_UAaRUhol_img_.jpeg', 'produto_ackdASgG_imgsec_.png', 'Após limpar e secar a pele, aplique uma quantidade adequada de creme hidratante no rosto ou na área desejada.\n\nMassageie suavemente o creme na pele em movimentos circulares, garantindo uma aplicação uniforme.\nEvite o contato direto com os olhos; caso isso ocorra, enxágue abundantemente com água.\n\nUse o creme hidratante conforme necessário ao longo do dia, especialmente após banhos ou exposição prolongada ao sol.\n', 2225, '109.99', 'Gel de Aloe Vera: 60% (proporção maior para maximizar os benefícios)\r\nÓleo de Jojoba: 10%\r\nÓleo de Coco Fracionado: 8%\r\nGlicerina Vegetal: 5%\r\nManteiga de Karité: 5%\r\nEmulsificante Natural (como cera de abelha e emulsificante vegetal): 6%\r\nÁgua Destilada: 4%\r\nConservante Natural', '0 ', '2023-11-26 13:42:14'),
(3, 'serum jojoba', 'Formulado com aloe vera de alta qualidade, este creme exclusivo oferece uma experiência de cuidado da pele como nenhuma outra. A aloe vera, conhecida por suas propriedades hidratantes e curativas, é o segredo para uma pele saudável e radiante.', 'produto_UAaRUhol_img_.jpeg', 'produto_ackdASgG_imgsec_.png', '1', 2225, '89.99', 'Gel de Aloe Vera: 60% (proporção maior para maximizar os benefícios)\r\nÓleo de Jojoba: 10%\r\nÓleo de Coco Fracionado: 8%\r\nGlicerina Vegetal: 5%\r\nManteiga de Karité: 5%\r\nEmulsificante Natural (como cera de abelha ou emulsificante vegetal): 6%\r\nÁgua Destilada: 4%\r\nConservante Natural (como extrato de to', '0', '2023-11-19 17:13:14'),
(5, 'Tônico Facial', 'Sinta a refrescância revitalizante a cada aplicação. O Tônico YARA ajuda a acalmar a pele, reduzir a vermelhidão e prepará-la para os próximos passos da sua rotina de cuidados. Ajuda a equilibrar o pH da pele, remove resíduos de sujeira e impurezas, e prepara a pele para receber os produtos de cuidados posteriores, como hidratantes e soros.', 'produto_yWjDixrJ_img_.jpeg', 'produto_yWjDixrJ_imgsec_.jpeg', 'Após a limpeza do rosto, aplique o tônico facial em um algodão ou nas mãos e suavemente passe sobre o rosto, evitando a área dos olhos. Não enxágue. Siga com os próximos passos da sua rotina de cuidados com a pele, como sérum e hidratante.', 200, '40.00', 'Extrato de Pepino: O extrato de pepino é rico em água e nutrientes que proporcionam hidratação à pele, ao mesmo tempo em que oferece uma sensação refrescante e calmante.\r\nExtrato de Camomila: A camomila é famosa por suas propriedades calmantes e anti-inflamatórias. Ela ajuda a reduzir a vermelhidão ', '1', '2023-11-26 13:46:28'),
(6, 'Esfoliante Facial', 'Este esfoliante inovador combina a eficácia de uma limpeza profunda com a gentileza de uma fórmula vegana, tornando-o adequado para todos os tipos de pele. Além de esfoliar, nosso Esfoliante Facial Vegano também contém ingredientes hidratantes, como aloe vera e ácido hialurônico., que cuidam da sua pele enquanto dissolvem suavemente as camadas superiores de células mortas da pele, estimulando a renovação celular.\r\n', 'produto_KlSCKTKb_img_.jpeg', 'produto_KlSCKTKb_imgsec_.jpeg', 'Aplique o esfoliante no rosto úmido, massageie suavemente em movimentos circulares por cerca de 1 minuto e depois enxágue completamente com água morna. Use 1-2 vezes por semana para uma pele mais suave e renovada. Evite a área dos olhos.', 200, '35.00', '\"Ácido Glicólico (derivado de cana-de-açúcar): Este ácido alfa-hidroxi (AHA) ajuda a esfoliar suavemente a pele,  estimulando a renovação celular para uma pele mais suave e uniforme.\r\nÁcido Lático (de origem vegetal): Outro AHA suave que ajuda na esfoliação e hidratação da pele, deixando-a com uma a', '1', '2023-11-26 13:51:11'),
(7, 'Espuma de Limpeza', 'Descubra a Espuma Facial YARA, é uma criação original que combina o poder da natureza com cuidado consciente. Desenvolvida especialmente para peles sensíveis, proporciona uma experiência de limpeza profunda e delicada, enquanto envolve os seus sentidos com o aroma refrescante do chá verde.', 'produto_EAuYzCzz_img_.jpeg', 'produto_EAuYzCzz_imgsec_.jpeg', 'Comece com o rosto úmido. Aplique uma pequena quantidade de espuma e massageie suavemente por cerca de 30 segundos. Enxágue completamente com água morna e seque o rosto delicadamente. Em seguida, siga com sua rotina de cuidados com a pele.', 200, '59.99', '\"\r\nCocoil Isetionato de Sódio: Um surfactante suave derivado do coco, que limpa a pele sem causar ressecamento.\r\nGlicerina Vegetal: Um agente hidratante que ajuda a manter a umidade da pele, deixando-a macia e suave.\r\nExtrato de Chá Verde (Camellia Sinensis): Um poderoso antioxidante com propriedade', '1', '2023-11-26 14:11:16'),
(8, 'Creme Hidratante Facial', 'Nosso creme oferece uma hidratação profunda e duradoura, deixando sua pele suave, macia e revitalizada, com uma textura leve e refrescante perfeita para uso diário. Desenvolvido para se adaptar a todos os tipos de pele, desde a oleosa até a sensível, equilibrando a hidratação e promovendo uma pele saudável. Além disso, o creme possui um aroma suave e agradável, proporcionando uma experiência sensorial relaxante durante a aplicação. \r\n', 'produto_TNDLfYEn_img_.jpeg', 'produto_TNDLfYEn_imgsec_.jpeg', 'Aplique o creme hidratante sobre a pele limpa e seca. Massageie suavemente até a completa absorção. Use de manhã e/ou à noite, conforme necessário, como parte da sua rotina de cuidados com a pele.', 200, '79.99', 'Extrato de Chá Verde: Rico em antioxidantes, o extrato de chá verde ajuda a proteger a pele contra os danos dos radicais livres e a reduzir a inflamação, proporcionando um aspecto saudável e revitalizado.\r\nManteiga de Karité: Nutre profundamente a pele, deixando-a suave e protegida contra o ressecam', '1', '2023-11-26 14:13:00'),
(9, 'Protetor Solar Labial', 'Prepare-se para experimentar a revolução em cuidados labiais com nosso Hidratante Labial Vegano com FPS 15. Criado com amor e compromisso com a beleza e o bem-estar sustentáveis, este é o segredo para lábios irresistivelmente macios, protegidos e deliciosamente perfumados. Nossa fórmula rica e indulgente desliza suavemente sobre seus lábios, proporcionando uma hidratação profunda e duradoura. \r\n', 'produto_RRlHqMCT_img_.jpeg', 'produto_RRlHqMCT_imgsec_.jpeg', 'Aplique o hidratante labial com FPS diretamente nos lábios, quantas vezes for necessário ao longo do dia. Certifique-se de reaplicar sempre que sentir os lábios ressecados ou antes de se expor ao sol. O FPS ajuda a proteger os lábios dos danos causados pelos raios UV.', 300, '25.99', '\"Cera de Candelila (Euphorbia cerifera): Uma cera vegetal que confere textura ao hidratante, garantindo uma aplicação suave e uniforme.\r\nVitamina E (Tocoferol): Um antioxidante natural que ajuda a manter a saúde dos lábios, protegendo contra os efeitos nocivos dos radicais livres.\r\nÓleo Essencial de', '1', '2023-11-26 14:14:22'),
(10, 'Protetor Solar FPS 80', 'Introduzindo o nosso Protetor Solar Facial com Amplo Espectro SPF Original, o seu companheiro essencial para manter a pele radiante e protegida todos os dias. Este inovador produto combina ciência avançada e ingredientes de alta qualidade para criar a barreira definitiva contra os danos causados pelo sol, poluição e envelhecimento prematuro da pele.\r\n', 'produto_UdokIRRp_img_.jpeg', 'produto_UdokIRRp_imgsec_.jpeg', '', 200, '90.00', '\"Octinoxato: Oferece proteção contra os raios UVB, ajudando a prevenir queimaduras solares.\r\nAvobenzona: Protege contra os raios UVA, prevenindo o envelhecimento prematuro da pele.\r\nHomosalato: Ajuda a absorver os raios UVB, contribuindo para a proteção contra queimaduras solares.\r\nVitamina C: Um an', '1', '2023-11-26 14:30:56'),
(11, 'Sérum Iluminador - Vitamina C', 'O Sérum Iluminador de Vitamina C é um cuidado essencial para a sua pele que combina a potência da vitamina C com ingredientes hidratantes de alta qualidade. Este sérum foi projetado para proporcionar uma pele radiante e saudável. Este inovador sérum vegano é um verdadeiro avanço na indústria de cuidados com a pele, combinando ingredientes exclusivos e naturais para proporcionar uma luminosidade natural e radiante à sua pele.\r\n', 'produto_GtrSuMaz_img_.jpeg', 'produto_GtrSuMaz_imgsec_.jpeg', 'Após limpar o rosto, aplique o sérum de vitamina C algumas gotas na pele seca. Espalhe suavemente, evitando contato com os olhos. Deixe absorver por alguns minutos e siga com hidratante e protetor solar, especialmente durante o dia.', 200, '60.00', '\"Ascorbato de Tetraisopalmitato (Vitamina C): Uma forma estável de vitamina C, conhecida por seus benefícios antioxidantes e de iluminação da pele.\r\nExtrato de Camomila (Chamomilla Recutita): Um extrato botânico que pode acalmar a pele e reduzir a vermelhidão.\r\nVitamina E (Tocoferol): Um antioxidant', '1', '2023-11-26 14:18:26'),
(12, 'Sérum Retinol + Colágeno', 'Transforme a sua rotina de cuidados com a pele com o nosso Creme de Retinol + Colágeno e redescubra uma aparência mais jovem e radiante de forma ética e autêntica. Esse produto consiste em uma fórmula avançada que combate rugas enquanto ilumina e revitaliza a pele. Desenvolvido com ingredientes naturais e livres, adiciona frescor e firmeza à derme\r\n', 'produto_fTvhhVBf_img_.jpeg', 'produto_fTvhhVBf_imgsec_.jpeg', 'Após a limpeza da pele, aplique uma pequena quantidade do creme sobre o rosto e pescoço, massageando suavemente com movimentos circulares. Use diariamente, de preferência à noite, para obter os melhores resultados.', 300, '139.90', '\"Retinol (2%): O retinol é um derivado da vitamina A e é amplamente utilizado para estimular a renovação celular, reduzir rugas e melhorar a textura da pele.\r\nColágeno (2%): O colágeno é adicionado para ajudar a melhorar a firmeza e elasticidade da pele, reduzindo a aparência de rugas.\r\nCera de Abel', '1', '2023-11-26 14:19:53'),
(13, 'Sérum Ácido Salicílico', 'Este sérum é uma solução avançada para combater eficazmente a acne e melhorar a saúde da pele. Formulado com ingredientes poderosos e livres de ingredientes de origem animal, este sérum é projetado para proporcionar resultados visíveis no tratamento da acne e no refinamento da textura da pele sem precisar de hidratação extra ou reposição de nutrientes.\r\n', 'produto_rJWwBvId_img_.jpeg', 'produto_rJWwBvId_imgsec_.jpeg', 'Aplique o sérum de ácido salicílico na pele limpa e seca, evitando a área dos olhos. Use de acordo com as instruções do produto, geralmente uma vez ao dia, à noite. Siga com hidratante e protetor solar pela manhã. O ácido salicílico ajuda a esfoliar suavemente a pele, melhorando a textura e reduzindo imperfeições.', 300, '59.99', '\"Ácido Salicílico (2%): O ácido salicílico é um beta-hidroxiácido (BHA) conhecido por sua eficácia na penetração nos poros e na redução de cravos e espinhas.\r\nNiacinamida: Também conhecida como vitamina B3, a niacinamida ajuda a reduzir a vermelhidão e a melhorar a textura da pele.\r\nExtrato de Calên', '1', '2023-11-26 14:20:59'),
(14, 'Contorno dos Olhos', 'Este creme para os olhos vegano é uma solução avançada para a área delicada dos olhos, formulado especificamente para proporcionar resultados potentes sem causar irritação. Com uma mistura cuidadosamente selecionada de ingredientes naturais e livres de crueldade, este creme é adequado para todos os tipos de pele, incluindo os mais sensíveis.\r\n', 'produto_hkpMXHIa_img_.jpeg', 'produto_hkpMXHIa_imgsec_.jpeg', 'Aplique uma pequena quantidade do creme na ponta dos dedos e suavemente dê batidinhas na área ao redor dos olhos, de manhã e à noite. Evite o contato direto com os olhos. Use regularmente para obter os melhores resultados.\r\n', 200, '39.99', '\"Vitamina C (Ascorbato de Tetraisopalmitato) (2%): Esta forma estável de vitamina C ajuda a iluminar a pele e reduzir a aparência de olheiras.\r\nVitamina E (Tocoferol) (0,5%): A vitamina E é um antioxidante que protege a pele dos danos causados pelos radicais livres.\r\nExtrato de Chá Verde (1%): Outro', '1', '2023-11-26 14:21:49');


ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID_PRODUTO`),
  ADD CONSTRAINT `fk_nome_produto` FOREIGN KEY (`nome_produto`) REFERENCES `produtos` (`nome`);

ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`);

ALTER TABLE `itens`
  ADD CONSTRAINT `itens_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`ID_PEDIDO`),
  ADD CONSTRAINT `itens_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`ID_PRODUTO`),
  ADD CONSTRAINT `nome_fk` FOREIGN KEY (`nome`) REFERENCES `produtos` (`nome`) ON UPDATE CASCADE;

ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`ID_CLIENTE`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`ID_ENDERECO`);

DELIMITER $$
DROP EVENT IF EXISTS `ExcluirRegistrosApos5Minutos`$$
CREATE DEFINER=`root`@`localhost` EVENT `ExcluirRegistrosApos5Minutos` ON SCHEDULE EVERY 1 MINUTE STARTS '2023-10-26 19:39:22' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM cod_temp WHERE datahora < NOW() - INTERVAL 5 MINUTE$$

DELIMITER ;
COMMIT;
