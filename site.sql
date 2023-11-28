-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2023 às 12:09
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
-- Banco de dados: `site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acordes`
--

CREATE TABLE `acordes` (
  `ID` int(11) NOT NULL,
  `Acorde` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acordes/cifra`
--

CREATE TABLE `acordes/cifra` (
  `id_cifra` int(11) NOT NULL,
  `id_numero` int(11) NOT NULL,
  `id_acorde` int(11) NOT NULL,
  `duração` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `id_artista` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `membros` varchar(255) NOT NULL,
  `nacionalidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chords_tab`
--

CREATE TABLE `chords_tab` (
  `id_cifra` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `song_title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `chord_notation` text NOT NULL,
  `tab_notation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Extraindo dados da tabela `chords_tab`
--

INSERT INTO `chords_tab` (`id_cifra`, `ID`, `song_title`, `artist`, `chord_notation`, `tab_notation`) VALUES
(10, 0, 'FELIz natal', 'papai noel', 'Um feliz Natal, um feliz Natal, e que Deus lhe\r\nGuarde próspero ano e felicidade\r\nUm feliz Natal, um feliz Natal, e que Deus lhe\r\nGuarde próspero ano e felicidade\r\nPor um Natal luz de um tempo novo,\r\nPor um Natal justo e amoroso\r\nPor um Natal lindo pro meu povo é o que quer meu coração\r\nPor um Natal luz de um tempo novo,\r\nPor um Natal justo e amoroso\r\nPor um Natal lindo pro meu povo é o que quer meu coraçãoooo\r\nUm feliz Natal, um feliz Natal, e que Deus lhe\r\nGuarde próspero ano e felicidade\r\nUm feliz Natal, um feliz Natal, e que Deus lhe\r\nGuarde próspero ano e felicidade\r\nPor um Natal luz de um tempo novo,\r\nPor um Natal justo e amoroso\r\nPor um Natal lindo pro meu povo é o que quer meu coraçãoooo\r\nPor um Natal luz de um tempo novo,\r\nPor um Natal justo e amoroso\r\nPor um Natal lindo pro meu povo é o que quer meu coraçãoooo\r\nFeliz Navidad Feliz Navidad Feliz Navidad\r\nPróspero anõ y felicidad\r\nFeliz Navidad Feliz Navidad Feliz Navidad\r\nPróspero anõ y felicida\r\nI wanna wish you a Merry Christmas,\r\nI wanna wish you a Merry Christmas,\r\nI wanna wish you a Merry Christmas,\r\nFrom the bottom of my heart!\r\nI wanna wish you a Merry Christmas,\r\nI wanna wish you a Merry Christmas,\r\nI wanna wish you a Merry Christmas,\r\nFrom the bottom of my heart\r\nUm feliz Natal, um feliz Natal, e que Deus lhe\r\nGuarde próspero ano y felicidade\r\nUm feliz Natal, um feliz Natal, e que Deus lhe', 'E A D B G e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `comentario` text NOT NULL,
  `data_publicacao` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `comentario`, `data_publicacao`) VALUES
(1, '123', 'test', '2023-11-21 09:11:20'),
(2, 'Gabruel', 'asaaa', '2023-11-23 14:38:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfis`
--

CREATE TABLE `perfis` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Nome_usuario` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Extraindo dados da tabela `perfis`
--

INSERT INTO `perfis` (`ID`, `Email`, `Senha`, `Nome`, `Nome_usuario`, `admin`) VALUES
(1, 'gabriel@gmail.com', '1234', 'Gabriel', 'Gabruel', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acordes`
--
ALTER TABLE `acordes`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `acordes/cifra`
--
ALTER TABLE `acordes/cifra`
  ADD PRIMARY KEY (`id_cifra`,`id_numero`),
  ADD KEY `id_acorde` (`id_acorde`);

--
-- Índices para tabela `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id_artista`);

--
-- Índices para tabela `chords_tab`
--
ALTER TABLE `chords_tab`
  ADD PRIMARY KEY (`id_cifra`),
  ADD KEY `id_autor` (`ID`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perfis`
--
ALTER TABLE `perfis`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acordes`
--
ALTER TABLE `acordes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `artista`
--
ALTER TABLE `artista`
  MODIFY `id_artista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `chords_tab`
--
ALTER TABLE `chords_tab`
  MODIFY `id_cifra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `perfis`
--
ALTER TABLE `perfis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `acordes`
--
ALTER TABLE `acordes`
  ADD CONSTRAINT `acordes_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `acordes/cifra` (`id_acorde`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `acordes/cifra`
--
ALTER TABLE `acordes/cifra`
  ADD CONSTRAINT `acordes/cifra_ibfk_1` FOREIGN KEY (`id_cifra`) REFERENCES `chords_tab` (`id_cifra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `artista_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `chords_tab` (`id_cifra`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
