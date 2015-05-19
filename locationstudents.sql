-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2015 às 17:19
-- Versão do servidor: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `locationstudents`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
`ID_ALUNO` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TIPOLOGRADOURO` varchar(12) NOT NULL,
  `NOMELOGRADOURO` varchar(100) NOT NULL,
  `NUMERO` varchar(10) NOT NULL,
  `BAIRRO` varchar(100) NOT NULL,
  `CIDADE` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ID_ALUNO`, `NOME`, `CPF`, `EMAIL`, `TIPOLOGRADOURO`, `NOMELOGRADOURO`, `NUMERO`, `BAIRRO`, `CIDADE`) VALUES
(1, 'HAELIO MARCIO GOMES FERREIRA', '02765801338', 'haelioferreira@yahoo.com.br', 'RUA', 'CENTO E ONZE', '61', 'CONJUNTO ESPERANCA', 'FORTALEZA'),
(2, 'FABIO MOURA BRASIL', '04763784734', 'fabiomoura.ads@gmail.com', 'RUA', 'CENTO E NOVE', '61', 'CONJUNTO ESPERANCA', 'FORTALEZA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
 ADD PRIMARY KEY (`ID_ALUNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
MODIFY `ID_ALUNO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
