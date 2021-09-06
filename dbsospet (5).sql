-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jun-2021 às 01:26
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsospet`
--
CREATE DATABASE IF NOT EXISTS `dbsospet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbsospet`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adocao_ong`
--

CREATE TABLE `adocao_ong` (
  `codigo_doacao_ong` int(11) NOT NULL,
  `nome_pet` varchar(40) DEFAULT NULL,
  `observacoes` varchar(500) DEFAULT NULL,
  `imagem1` varchar(100) NOT NULL,
  `imagem2` varchar(100) NOT NULL,
  `imagem3` varchar(100) NOT NULL,
  `fk_codigo_ong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adocao_ong`
--

INSERT INTO `adocao_ong` (`codigo_doacao_ong`, `nome_pet`, `observacoes`, `imagem1`, `imagem2`, `imagem3`, `fk_codigo_ong`) VALUES
(25, 'Cachorrinho ', 'Cachorrinho dócil, castrado a espera de um lar', 'c8209330127ff7131a09dc54c1beaf96.jpg', 'b2b6d68c0d93ceb58db2d9d8bff56429.jpg', '9fe0e0932ce83e4e455fe88e1bf7030e.jpg', 3),
(26, 'Gatinho Chico', 'O Chico é um gatinho super carinhoso que espera por um lar. É castrado e dócil', '1d726e6996defefef08d526b748ced25.jpg', '93b60c1a814ccee358272b93df827841.jpg', '451de982df829344c672c0f9ebef6c24.jpg', 3),
(27, 'Belinha', 'A cachorra belinha passou por maus tratos nas ruas mas agora que foi resgatada pela nossa Ong, ela esteve por bons cuidados e espera por uma casa para receber carinho e atenção.', 'c2f4c4239217fe903101fed7c717dd85.jpg', '', '', NULL),
(28, 'GATINHP', 'LINDO', 'b2631dea689fcdfab1910114c3ea3449.jpg', '', '', NULL),
(29, 'gatino', 'aaaaaaaaaaaaaa', 'c149f8205e2232c15a90ecf408a4fbbe.jpg', '93ecf41b379ba3c600a8750d255124e5.jpg', 'dbfe07e2e2af1b8ae0d500950a5e2f74.jpg', NULL),
(30, 'cu', 'aaaaaaaaaaa', '', '', '', 3),
(31, 'Cachorrinho', 'doguinho fofo lindo', 'f54c4aa4888bd485f6c4fec5efba80df.jpg', 'dc3a0614f10da6e21bb180a6062e2a16.jpg', '4ba9a2da2f760943fc6156e61c5f083b.jpg', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `desaparecidos`
--

CREATE TABLE `desaparecidos` (
  `codigo_desaparecido` int(11) NOT NULL,
  `nome_desaparecido` varchar(40) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `observacoes` varchar(400) DEFAULT NULL,
  `fk_desaparecidos_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `codigo_imagem` int(11) NOT NULL,
  `fk_codigo_adocao` int(11) NOT NULL,
  `nome_imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ong_doadores`
--

CREATE TABLE `ong_doadores` (
  `codigo_ong` int(11) NOT NULL,
  `nome_ong` varchar(80) NOT NULL,
  `cpf` varchar(18) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `rua` varchar(80) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `email_ong` varchar(100) DEFAULT NULL,
  `senha_ong` varchar(64) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ong_doadores`
--

INSERT INTO `ong_doadores` (`codigo_ong`, `nome_ong`, `cpf`, `estado`, `cidade`, `rua`, `bairro`, `cep`, `email_ong`, `senha_ong`, `telefone`) VALUES
(1, 'Ong do Frederico', '56789107623', 'AL', 'Maceió', 'Quadra K', 'Gruta de Lourdes', '57052-420', 'ongfrederico@gmail.com', '6ff3b2e51e864a8b2ddc48ca26ff6bf59e320bda1ba27568c079dfe16bdfa2d5', NULL),
(3, 'Ong dos gatinhos felizes', '199.333.830-60', 'RN', 'Mossoró', 'Rua Trajano Figueira', 'Santa Delmira', '59616-390', 'gatinhosxd@gmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '84 4445-5679'),
(4, 'Ong dos cachorrinhos', '111.222.333.44', 'SE', 'Aracaju', 'Rua Rafael de Aguiar', 'Pereira Lobo', '49050-660', 'dogguinhos@hotmail.com', 'e18e930483b04eb436848b7774ab4ee1ff7868551c0382a7d7145bef0046c06b', '11 48191432'),
(5, 'ONG', '111.122.345-67', 'SE', 'Aracaju', 'Rua Rafael de Aguiar', 'Pereira Lobo', '49050-660', 'rafa@gmail.com', 'c340e4845bc4f9cf9f28d6bcd2e31e689fa783f0bbe83e88b0572d1be42f61d8', '1111111111111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigo_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(80) DEFAULT NULL,
  `email_usuario` varchar(100) DEFAULT NULL,
  `senha_usuario` varchar(64) DEFAULT NULL,
  `cpf` varchar(18) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `rua` varchar(80) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `cpf`, `telefone`, `estado`, `cidade`, `rua`, `bairro`, `cep`, `foto`) VALUES
(1, NULL, 'rafinhadoboli@gmail.com', 'ca57e574da806685cf31cb9467c1689b4256a1863f8572c4efe58495694f6598', '12345678910', '11976422310', 'SP', 'São Paulo', 'Praça da Sé', 'Sé', '01001000', 'C:\\xampp\\htdocs\\sospet\\uploads\\adocao.png'),
(2, 'Frederico Aparecido', 'frederico@gmail.com', '5f2291f6c1877eb2dcb39b6e24bac8a0f842e9501154b89d49bb482e0db38062', '43265789117', '1198762418', 'SP', 'São Paulo', 'Praça da Sé', 'Sé', '01001000', ''),
(3, 'Frozen AParecido', 'rafa123@gmail.com', '13986db795e9d606ee6aa95ff9b4ab6696238db1e1e136f6d59848220084d052', '12356789013', '1198762418', 'TO', 'Araguaína', 'Rua I', 'Vila Aliança', '77813-830', ''),
(4, 'Aureliano Buendía', 'aureliano@hotmail.com', 'eee8c0b981c5eae855f7267867ff1f166f6c4383d181aeebf93c92ef5d6d24ea', '20350460829', '11 55554444', 'SE', 'Aracaju', 'Rua Rafael de Aguiar', 'Pereira Lobo', '49050-660', ''),
(5, 'José Arcádio Buendía', 'jose123@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '11122233355', '11 55559844', 'SE', 'Aracaju', 'Rua Rafael de Aguiar', 'Pereira Lobo', '49050-660', ''),
(6, 'Alek Pode Pa', 'alek@podepa.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '008.107.580-40', '11999999999', 'SE', 'Aracaju', 'Rua Rafael de Aguiar', 'Pereira Lobo', '49050-660', ''),
(7, 'rafaaaaaaaa', NULL, NULL, '122.334.567.89', '11 8927191', 'RN', 'Mossoró', 'Rua Trajano Figueira', 'Santa Delmira', '59616-390', ''),
(8, 'Úrsula Iguarán', NULL, NULL, '11122233345', '11 46719019', 'SP', 'Francisco Morato', 'Rua Santa Luzia', 'Residencial São Luis', '07996-040', ''),
(9, 'rafaaaaaaaaaaaaaaaaa', '123@hotmail.com', 'd05d97f1ae999570221aee8fa6e3747401d9f1847dba738686384dc761e8bd1d', '11245698101', '12 44216754', 'SE', 'Aracaju', 'Rua Rafael de Aguiar', 'Pereira Lobo', '49050-660', ''),
(10, 'Chico Science', 'chico@hotmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '112.456.234-90', '11 46719019', 'RN', 'Mossoró', 'Rua Trajano Figueira', 'Santa Delmira', '59616-390', ''),
(11, '', '', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', '', '', '', '', '', '', '', ''),
(12, 'Usuario Teste', 'teste@teste.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '012.345.678-90', '11 46719019', 'SE', 'Aracaju', 'Rua Rafael de Aguiar', 'Pereira Lobo', '49050-660', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_adota`
--

CREATE TABLE `usuario_adota` (
  `fk_codigo_ong` int(11) DEFAULT NULL,
  `fk_codigo_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adocao_ong`
--
ALTER TABLE `adocao_ong`
  ADD PRIMARY KEY (`codigo_doacao_ong`),
  ADD KEY `fk_cod_ong` (`fk_codigo_ong`);

--
-- Índices para tabela `desaparecidos`
--
ALTER TABLE `desaparecidos`
  ADD PRIMARY KEY (`codigo_desaparecido`),
  ADD KEY `fk_desaparecidos_usuario` (`fk_desaparecidos_usuario`);

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`codigo_imagem`),
  ADD KEY `fk_codigo_adocao` (`fk_codigo_adocao`);

--
-- Índices para tabela `ong_doadores`
--
ALTER TABLE `ong_doadores`
  ADD PRIMARY KEY (`codigo_ong`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email_ong`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo_usuario`),
  ADD UNIQUE KEY `email` (`email_usuario`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `usuario_adota`
--
ALTER TABLE `usuario_adota`
  ADD KEY `fk_codigo_ong` (`fk_codigo_ong`),
  ADD KEY `fk_codigo_usuario` (`fk_codigo_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adocao_ong`
--
ALTER TABLE `adocao_ong`
  MODIFY `codigo_doacao_ong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `desaparecidos`
--
ALTER TABLE `desaparecidos`
  MODIFY `codigo_desaparecido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `codigo_imagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ong_doadores`
--
ALTER TABLE `ong_doadores`
  MODIFY `codigo_ong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `adocao_ong`
--
ALTER TABLE `adocao_ong`
  ADD CONSTRAINT `adocao_ong_ibfk_1` FOREIGN KEY (`fk_codigo_ong`) REFERENCES `ong_doadores` (`codigo_ong`);

--
-- Limitadores para a tabela `desaparecidos`
--
ALTER TABLE `desaparecidos`
  ADD CONSTRAINT `desaparecidos_ibfk_1` FOREIGN KEY (`fk_desaparecidos_usuario`) REFERENCES `usuario` (`codigo_usuario`);

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_ibfk_1` FOREIGN KEY (`fk_codigo_adocao`) REFERENCES `adocao_ong` (`codigo_doacao_ong`);

--
-- Limitadores para a tabela `usuario_adota`
--
ALTER TABLE `usuario_adota`
  ADD CONSTRAINT `usuario_adota_ibfk_1` FOREIGN KEY (`fk_codigo_ong`) REFERENCES `ong_doadores` (`codigo_ong`),
  ADD CONSTRAINT `usuario_adota_ibfk_2` FOREIGN KEY (`fk_codigo_usuario`) REFERENCES `usuario` (`codigo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
