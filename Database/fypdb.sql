-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 02:07 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fypdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `proposalft`
--

CREATE TABLE IF NOT EXISTS `proposalft` (
  `Pid` int(200) NOT NULL,
  `Lecturer_Name` varchar(100) NOT NULL,
  `Department` varchar(1000) NOT NULL,
  `Domain` varchar(1000) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `PArea` varchar(1000) NOT NULL,
  `Synopsys` varchar(1000) NOT NULL,
  `Planguaget` varchar(1000) NOT NULL,
  `Framework` varchar(1000) NOT NULL,
  `Hardware` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposalft`
--

INSERT INTO `proposalft` (`Pid`, `Lecturer_Name`, `Department`, `Domain`, `Title`, `PArea`, `Synopsys`, `Planguaget`, `Framework`, `Hardware`) VALUES
(1, '', 'fgh', 'zsdrgs', 'xg', 'xgfh', 'zsdgfz', '', 'zsgdsg', 'zsdgsg'),
(2, '', 'SWE', 'Project', 'dsrgszdre', 'zergz', '  zdrggfgh', '', 'laravel', '  zrgdrsg'),
(3, '', 'SWE', 'Project', 'xdgzxsd', 'xxhdfthx', '  xcbxd', '', 'laravel', '  zdrhgxd'),
(4, '', '', '', '', '', '', '', '', ''),
(5, '', 'SWE', 'Project', 'xdgzxsd', 'xxhdfthx', '  xcbxd', '', 'laravel', '  zdrhgxd'),
(6, '', 'SWE', 'Project', 'xdgzxsd', 'xxhdfthx', '  xcbxd', '', 'laravel', '  zdrhgxd'),
(7, '', 'SWE', 'Project', 'xdgzxsd', 'xxhdfthx', '  xcbxd', '', 'laravel', '  zdrhgxd'),
(8, '', 'SWE', 'Project', 'zsrgz', 'dfgzd', '  zdrfgz', '', 'laravel', '  zdfg'),
(9, '', 'SWE', 'Project', 'zsrgz', 'dfgzd', '  zdrfgz', '', 'codeigniter', '  zdfg'),
(10, '', 'SWE', 'Project', 'zsrgz', 'dfgzd', '  zdrfgz', 'cpp,java,', 'codeigniter', '  zdfgzfg'),
(11, '', 'SWE', 'Project', 'Final Year project Submission', 'FYP', 'Final Year project Submission will be automatically.', 'php,mysql,', 'codeigniter', '  No Hardware'),
(12, '', 'SWE', 'Project', 'Habijabi', 'no idea', '  No need', 'php,cs,c,python,ruby,cpp,java,js,mysql,oracle,', 'cakephp', '  No  Hardware needed. Thank you '),
(13, 'Robin', 'SWE', 'Project', 'fdhnjcygfmj', 'cgyjcfty', '  tygcjgfyjyg', 'python,ruby,cpp,', 'codeigniter', '  ygcjygfj'),
(14, 'Robin', 'CSE', 'Thesis', 'xdfhsxr', 'hxsrthdsr', '  xsfthxdsrh', 'php,cs,c,python,', 'spring', '  xdrtfhxdrth'),
(15, 'samira', 'SWE', 'Project', 'rfhdxr', 'drfthdrh', '  srdthx', 'php,cs,c,python,ruby,cpp,java,js,mysql,oracle,', 'cakephp', '  drthjnycmf'),
(16, 'samira', 'SWE', 'Project', 'rfhdxr', 'drfthdrh', '  srdthx', 'php,cs,c,python,ruby,cpp,java,js,mysql,oracle,', 'cakephp', '  drthjnycmf'),
(17, 'samira', 'SWE', 'Project', 'rfhdxr', 'drfthdrh', '  srdthx', 'php,cs,c,python,ruby,cpp,java,js,mysql,oracle,', 'cakephp', '  drthjnycmf'),
(18, 'samira', 'SWE', 'Project', 'rfhdxr', 'drfthdrh', '  srdthx', 'php,cs,c,python,ruby,cpp,java,js,mysql,oracle,', 'cakephp', '  drthjnycmf'),
(19, 'samira', 'SWE', 'Project', 'dfbgdrt', 'dfbxsdbfd', '  zfbdz', '', 'laravel', '  dzbrsb'),
(20, 'samira', 'SWE', 'Project', 'dfbgdrt', 'dfbxsdbfd', '  zfbdz', '', 'laravel', '  dzbrsb'),
(21, 'samira', 'SWE', 'Project', 'dfbgdrt', 'dfbxsdbfd', '  zfbdz', '', 'laravel', '  dzbrsb'),
(22, 'samira', 'SWE', 'Project', 'dfbgdrt', 'dfbxsdbfd', '  zfbdz', '', 'laravel', '  dzbrsb'),
(23, 'samira', 'SWE', 'Project', 'dfbgdrt', 'dfbxsdbfd', '  zfbdz', '', 'laravel', '  dzbrsb'),
(24, 'samira', 'SWE', 'Project', 'dfbgdrt', 'dfbxsdbfd', '  zfbdz', '', 'laravel', '  dzbrsb'),
(25, 'samira', 'SWE', 'Project', 'dfbgdrt', 'dfbxsdbfd', '  zfbdz', '', 'laravel', '  dzbrsb'),
(26, 'samira', 'SWE', 'Project', 'dfbgdrt', 'dfbxsdbfd', '  zfbdz', '', 'laravel', '  dzbrsb'),
(27, '', 'SWE', 'Project', 'dfbgdrt', 'dfbxsdbfd', '  zfbdzgfxnx', '', 'cakephp', 'gfnxdfgnxfn'),
(28, 'samira', 'SWE', 'Project', 'pofgih-0rt', '''stjea', '  ;rtj9ash', 'php,python,', 'laravel', '  ''drtjs-0 '),
(29, 'samira', 'CSE', 'Thesis', 'uigyuiogu', 'il;hopiho', '  gbuuipgh89h', 'php,python,oracle,', 'codeigniter', '  klio['),
(30, 'habib', 'CSE', 'Project', 'fgg', 'gdf', '  dfgdf', 'php,', 'laravel', '  ffdfsd'),
(31, 'habib', 'BBA', 'Project', 'rewrewr', 'werwe', '  werewr', 'php,', 'laravel', '  ewrewr'),
(32, 'habib', 'BBA', 'Project', 'rewrewr', 'werwe', '  werewr', 'php,', 'laravel', '  ewrewr'),
(33, 'habib', 'BBA', 'Project', 'rewrewr', 'werwe', '  werewr', 'php,', 'laravel', '  ewrewr'),
(34, 'habib', 'BBA', 'Project', 'rewrewr', 'werwe', '  werewr', 'php,', 'laravel', '  ewrewr');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Id` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Mobile1` varchar(100) NOT NULL,
  `Mobile2` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `imglink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `Email`, `Id`, `Gender`, `User`, `Mobile1`, `Mobile2`, `Password`, `imglink`) VALUES
('Paris Bala', 'paris123@gmail.com', '123', 'male', 'Student', '12345', '12345', '7815696ecbf1c96e6894b779456d330e', '5e5744df1cd36016d7ab3d6fee67a370.PNG'),
('samira', 'samira@gmail.com', '123123', 'female', 'teacher', '6345634534', '34534534', 'c4ca4238a0b923820dcc509a6f75849b', 'ed23629f1f97745921b5415f71a9669f.JPG'),
('asds', 'islam519@outlook.com', '1234', 'male', 'Student', '1234', '1234', '7815696ecbf1c96e6894b779456d330e', '3486df4f30b91fa74b659ef622ec5a0f.PNG'),
('hasan', 'h@gmail.com', '12434', 'male', 'Student', '234234', '2342342', 'c4ca4238a0b923820dcc509a6f75849b', '42daf62b31737245bb7a6d54dc5f8abb.JPG'),
('Qazi Nasrin Nipa', 'nipa@gmail.com', '132-35-111', 'female', 'teacher', '01521434135', '01776337044', 'c4ca4238a0b923820dcc509a6f75849b', 'b240feafe4e58ed3295ee9e5a238191c.jpg'),
('Reazul', 'reazulswe@gmail.com', '132-35-519', 'male', 'Student', '01521434135', '01853826670', '202cb962ac59075b964b07152d234b70', 'e6a52e6e452db5af21fded98162b45da.JPG'),
('paris bala ', 'paris@gmail.com', '1322434', 'male', 'Student', '53453534', '345345345', 'c4ca4238a0b923820dcc509a6f75849b', '34b0169f31f0453eb439531df9e7ead1.jpg'),
('habib', 'habib@gmail.com', '134-35-987', 'male', 'teacher', '5345455', '34534534', 'c4ca4238a0b923820dcc509a6f75849b', '069295aafa057ba1d864a9adfc9516c8.PNG'),
('Robin', 'robin@gmail.com', '42134321', 'male', 'Student', '5463', '565354634', 'c4ca4238a0b923820dcc509a6f75849b', 'bed6554efda69c43d68b2bc319e35803.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration_st`
--

CREATE TABLE IF NOT EXISTS `registration_st` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Id` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `User` varchar(100) NOT NULL,
  `cgpa10` varchar(10) NOT NULL,
  `cgpa11` varchar(10) NOT NULL,
  `Mobile1` varchar(100) NOT NULL,
  `Mobile2` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `imglink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_st`
--

INSERT INTO `registration_st` (`Name`, `Email`, `Id`, `Gender`, `User`, `cgpa10`, `cgpa11`, `Mobile1`, `Mobile2`, `Password`, `imglink`) VALUES
('fdsfsd', 'asas@gmail.com', '132-35-659', 'male', 'student', '4', '3', '54654654', '5546546', '0cc175b9c0f1b6a831c399e269772661', '9daab065f5213a3e597c58b30de9ceee.PNG'),
('Reazul', 'reazual@gmail.com', '9997888', 'male', 'student', '4', '3', '435435', '345', 'c4ca4238a0b923820dcc509a6f75849b', '436f96c043d3686fea4f7f4448b549ec.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proposalft`
--
ALTER TABLE `proposalft`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration_st`
--
ALTER TABLE `registration_st`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proposalft`
--
ALTER TABLE `proposalft`
  MODIFY `Pid` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
