-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 03:37 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiit`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursedetail`
--

CREATE TABLE `coursedetail` (
  `id` int(11) NOT NULL,
  `regNo` varchar(100) NOT NULL,
  `courseTitle` varchar(255) NOT NULL,
  `courseDuration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resultdetail`
--

CREATE TABLE `resultdetail` (
  `id` int(11) NOT NULL,
  `regNo` varchar(100) NOT NULL,
  `task1` varchar(50) NOT NULL,
  `task2` varchar(50) NOT NULL,
  `task3` varchar(50) NOT NULL,
  `task4` varchar(50) NOT NULL,
  `task5` varchar(50) NOT NULL,
  `task6` varchar(50) NOT NULL,
  `maxMarks` varchar(100) NOT NULL,
  `obtMarks` varchar(100) NOT NULL,
  `dateTime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `fatherCNIC` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(2, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT '0',
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(85, 1, 0, 'Graphic program'),
(86, 1, 1, 'A spreadsheet'),
(87, 1, 0, 'Data Sheet'),
(88, 1, 0, 'None of these'),
(89, 2, 0, 'Hyperlink'),
(90, 2, 0, 'Index'),
(91, 2, 1, 'Transpose'),
(92, 2, 0, 'Rows'),
(93, 3, 0, 'Hyperlinked'),
(94, 3, 1, 'Placed in a word table'),
(95, 3, 0, 'Linked'),
(96, 3, 0, 'Embedded'),
(97, 4, 0, 'Insert'),
(98, 4, 0, 'Format'),
(99, 4, 1, 'Tools'),
(100, 4, 0, 'Data'),
(101, 5, 0, 'Insert'),
(102, 5, 0, 'Format'),
(103, 5, 0, 'Tools'),
(104, 5, 1, 'Data'),
(105, 6, 0, 'It can contain text and data'),
(106, 6, 0, 'It can be modified'),
(107, 6, 1, 'It can contain many sheets including worksheets and chart sheets'),
(108, 6, 0, 'You have to work hard to create it'),
(109, 7, 0, 'Lines and spaces'),
(110, 7, 0, 'Layers and planes'),
(111, 7, 1, 'Rows and columns'),
(112, 7, 0, 'Height and width'),
(113, 8, 1, 'Nested'),
(114, 8, 0, 'Round'),
(115, 8, 0, 'Sum'),
(116, 8, 0, 'Text'),
(117, 9, 1, 'PMT (payments)'),
(118, 9, 0, 'NPER (number of periods)'),
(119, 9, 0, 'PV (present value)'),
(120, 9, 0, 'All of above'),
(121, 10, 0, 'Pressing an arrow key'),
(122, 10, 0, 'Pressing the tab key'),
(123, 10, 1, 'Pressing the Esc key'),
(124, 10, 0, 'Clicking the enter button to the formula bar'),
(125, 11, 1, 'Pressing the Alt key'),
(126, 11, 0, 'Clicking the formula bar'),
(127, 11, 0, 'Pressing F2'),
(128, 11, 0, 'Double clicking the cell'),
(129, 12, 0, 'Pressing the Tab key'),
(130, 12, 0, 'Clicking the cell'),
(131, 12, 0, 'Pressing an arrow key'),
(132, 12, 1, 'All of above'),
(133, 13, 0, 'Right click on column and select Pick from list'),
(134, 13, 0, 'Use data â€“ text to columns menu item'),
(135, 13, 1, 'Left click on the gray column title button'),
(136, 13, 0, 'Pressing Ctrl + A on the keyboard'),
(137, 14, 0, 'Select column D'),
(138, 14, 1, 'Select column E'),
(139, 14, 0, 'Select columns E, F and G'),
(140, 14, 0, 'Select columns D, E, and F.'),
(141, 15, 0, 'Single-click the boundary to the left to the column heading'),
(142, 15, 1, 'Double click the boundary to the right of the column heading'),
(143, 15, 0, 'Press Alt and single click anywhere in the column'),
(144, 15, 0, 'All of above'),
(145, 16, 0, 'Special shapes like stars and banners '),
(146, 16, 0, 'Drawing objects like rectangles ovals'),
(147, 16, 0, 'Pictures'),
(148, 16, 1, 'All can be hyperlinks'),
(149, 17, 0, 'Split a worksheet into two panes'),
(150, 17, 1, 'View different rows and columns'),
(151, 17, 0, 'Edit the contents of a cell'),
(152, 17, 0, 'View different worksheets'),
(153, 18, 0, 'the entire worksheet is displayed'),
(154, 18, 0, 'the selected range is displayed'),
(155, 18, 0, 'the active portion of the worksheet is displayed'),
(156, 18, 1, 'a, b and c'),
(157, 19, 0, 'There is an error in the cell'),
(158, 19, 1, 'There is a comment associated with the cell'),
(159, 19, 0, 'The font color for text in the cell is red'),
(160, 19, 0, 'A formula cannot be entered into the cell'),
(161, 20, 0, ' Unfreeze panes command on the window menu'),
(162, 20, 1, 'Freeze panes command on the window menu'),
(163, 20, 0, 'Hold titles command on the edit menu'),
(164, 20, 0, 'Split command on the window menu'),
(165, 21, 0, '.jpg'),
(166, 21, 0, '.giv'),
(167, 21, 0, '.wav'),
(168, 21, 1, 'All of the above'),
(169, 22, 0, 'the slide layout option'),
(170, 22, 0, 'add a slide option'),
(171, 22, 0, 'outline view'),
(172, 22, 1, 'a presentation design template'),
(173, 23, 0, 'An action button that advances to the next slide'),
(174, 23, 1, 'An item on the slide that performs an action when clicked'),
(175, 23, 0, 'The name of a motion path'),
(176, 23, 0, 'All of above'),
(177, 24, 0, 'Clicking the new button on the standard toolbar'),
(178, 24, 0, 'Clicking file, new'),
(179, 24, 1, 'Clicking file open'),
(180, 24, 0, 'Pressing ctrl + N'),
(181, 25, 0, 'effects'),
(182, 25, 0, 'custom animations'),
(183, 25, 1, 'transitions'),
(184, 25, 0, 'present animations'),
(185, 26, 0, 'Highlighting'),
(186, 26, 1, 'Dragging'),
(187, 26, 0, 'Selecting'),
(188, 26, 0, 'Moving'),
(189, 27, 0, 'File, add a new slide'),
(190, 27, 1, 'Insert, New slide'),
(191, 27, 0, 'File Open'),
(192, 27, 0, 'File, New'),
(193, 28, 0, 'Vertical'),
(194, 28, 1, 'Landscape'),
(195, 28, 0, 'Portrait'),
(196, 28, 0, 'None of above'),
(197, 29, 0, 'Handout master'),
(198, 29, 0, 'Notes master'),
(199, 29, 1, 'Slide master'),
(200, 29, 0, 'All of the above'),
(201, 30, 1, 'Placeholders'),
(202, 30, 0, 'Object holders'),
(203, 30, 0, 'Auto layouts'),
(204, 30, 0, 'Text holders'),
(205, 31, 0, 'Next slide button'),
(206, 31, 0, 'Page up'),
(207, 31, 1, 'Ctrl + Home'),
(208, 31, 0, 'Ctrl + End'),
(209, 32, 0, 'Inclusion'),
(210, 32, 1, 'Attachment'),
(211, 32, 0, 'Reply'),
(212, 32, 0, 'Forward'),
(213, 33, 0, 'Slide show menu'),
(214, 33, 1, 'Rehearse timings button'),
(215, 33, 0, 'Slide transition button'),
(216, 33, 0, 'All of the above'),
(217, 34, 0, 'Alt + Click each slide'),
(218, 34, 0, 'Shift + drag each slide'),
(219, 34, 0, 'Shift + Click each slide'),
(220, 34, 1, 'Ctrl + Click each slide'),
(221, 35, 0, 'animation'),
(222, 35, 1, 'slide transition'),
(223, 35, 0, 'custom animation'),
(224, 35, 0, 'preset animation'),
(225, 36, 0, 'View, slide sorter'),
(226, 36, 0, 'View, slide'),
(227, 36, 1, 'View, slide show'),
(228, 36, 0, 'View outline'),
(229, 37, 1, 'Slides'),
(230, 37, 0, 'Custom shows'),
(231, 37, 0, 'Current slide'),
(232, 37, 0, 'All'),
(233, 38, 0, 'Slide show'),
(234, 38, 0, 'Slide sorter view'),
(235, 38, 0, 'Notes page view'),
(236, 38, 1, 'Outline view'),
(237, 39, 1, 'The space between the lines of text'),
(238, 39, 0, 'The height of the line'),
(239, 39, 0, 'The length of the line'),
(240, 39, 0, 'a and c'),
(241, 40, 0, 'The incorrect word appears in all capital letters'),
(242, 40, 1, 'The incorrect word has a wavy red line under it'),
(243, 40, 0, 'The incorrect word appears italicized'),
(244, 40, 0, 'The incorrect word appears bold'),
(245, 41, 1, '1 and 1'),
(246, 41, 0, '2 and 1'),
(247, 41, 0, '1 and 2'),
(248, 41, 0, '2 and 2'),
(249, 42, 1, '8 and 72'),
(250, 42, 0, '8 and 68'),
(251, 42, 0, '6 and 72'),
(252, 42, 0, '6 and 68'),
(253, 43, 0, 'Raised'),
(254, 43, 0, 'Outlined'),
(255, 43, 0, 'Conscript'),
(256, 43, 1, 'Superscript'),
(257, 44, 0, 'A Word'),
(258, 44, 0, 'An Entire Sentence'),
(259, 44, 0, 'Whole Document'),
(260, 44, 1, 'Any of the Above'),
(261, 45, 0, 'Carriage Return'),
(262, 45, 0, 'Enter'),
(263, 45, 0, 'Word Wrap'),
(264, 45, 1, 'None of the above'),
(265, 46, 0, 'Characters'),
(266, 46, 0, 'Formats'),
(267, 46, 0, 'Symbols'),
(268, 46, 1, 'All of the above'),
(269, 47, 0, 'To set tabs'),
(270, 47, 0, 'To set indents'),
(271, 47, 0, 'To change page margins'),
(272, 47, 1, 'All of the above'),
(273, 48, 1, 'On first page'),
(274, 48, 0, 'On alternate page'),
(275, 48, 0, 'On every page'),
(276, 48, 0, 'None of the above'),
(277, 49, 0, 'Down Cursor Key'),
(278, 49, 1, 'Enter Key'),
(279, 49, 0, 'Shift + Enter'),
(280, 49, 0, 'Ctrl + Enter'),
(281, 50, 0, 'It converts selected text into the next larger size of the same font'),
(282, 50, 0, 'It adds a line break to the document'),
(283, 50, 1, 'It makes the selected text bold'),
(284, 50, 0, 'It applies Italic formatting t the selected text'),
(285, 51, 0, 'Open the Print dialog box'),
(286, 51, 0, 'Update the current Web page'),
(287, 51, 0, 'Close the current window'),
(288, 51, 1, 'None of these'),
(289, 52, 0, 'dot'),
(290, 52, 1, 'doc'),
(291, 52, 0, 'dom'),
(292, 52, 0, 'txt'),
(293, 53, 0, 'Open the Print dialog box'),
(294, 53, 0, 'Update the current Web page'),
(295, 53, 1, 'Close the current window'),
(296, 53, 0, 'None of these'),
(297, 54, 0, 'F1'),
(298, 54, 0, 'F2'),
(299, 54, 1, 'F7'),
(300, 54, 0, 'F9'),
(301, 55, 0, 'To enhance the overall appearance of the document'),
(302, 55, 0, 'To mark the starting of a page'),
(303, 55, 0, 'To make large document more readable'),
(304, 55, 1, 'To allow page headers and footers to appear on document when it is printed'),
(305, 56, 0, 'Zero'),
(306, 56, 0, '2 rows and 1 column'),
(307, 56, 0, '2 rows and 2 column'),
(308, 56, 1, '1 row and 1 column'),
(309, 57, 1, 'CTRL+ RIGHT ARROW'),
(310, 57, 0, 'CTRL+ LEFT ARROW'),
(311, 57, 0, 'CTRL+ DOWN ARROW'),
(312, 57, 0, 'None of these'),
(313, 58, 1, '3'),
(314, 58, 0, '10'),
(315, 58, 0, '15'),
(316, 58, 0, '20'),
(317, 59, 1, '10'),
(318, 59, 0, '15'),
(319, 59, 0, '20'),
(320, 59, 0, 'Undefined'),
(321, 60, 0, 'A paragraph'),
(322, 60, 1, 'A sentence'),
(323, 60, 0, 'A word'),
(324, 60, 0, 'Entire document');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_duration`
--

CREATE TABLE `tbl_duration` (
  `id` int(11) NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_duration`
--

INSERT INTO `tbl_duration` (`id`, `duration`) VALUES
(1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_final`
--

CREATE TABLE `tbl_final` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `attempt` varchar(100) NOT NULL,
  `score` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_que`
--

CREATE TABLE `tbl_que` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `que` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_que`
--

INSERT INTO `tbl_que` (`id`, `quesNo`, `que`) VALUES
(23, 1, 'Excel is a:'),
(24, 2, 'What function displays row data in a column or column data in a row?'),
(25, 3, 'When you insert an Excel file into a Word document, the data are'),
(26, 4, 'Macros are â€œrunâ€ or executed from the â€¦.. menu'),
(27, 5, ' You can open the consolidate dialog box by choosing Consolidate from the â€¦.. menu'),
(28, 6, 'Each excel file is called a workbook because'),
(29, 7, 'How are data organized in a spreadsheet?'),
(30, 8, ' A function inside another function is called a â€¦.. function'),
(31, 9, 'Which function calculates your monthly mortgage payment?'),
(32, 10, 'Which of the following methods can not be used to enter data in a cell?'),
(33, 11, 'Which of the following methods cannot be used to edit the content of cell?'),
(34, 12, 'You can activate a cell by'),
(35, 13, 'Which of the following describes how to select all the cells in a single column?'),
(36, 14, 'To insert three columns between columns D and E you would'),
(37, 15, 'How do you change column width to fit the contents?'),
(38, 16, ' Hyperlinks cannot be'),
(39, 17, 'You can use the horizontal and vertical scroll bars to'),
(40, 18, 'when you print preview a worksheet'),
(41, 19, 'When you see a cell with a red triangle in the top right corner, what does this signify?'),
(42, 20, 'To hold row and column titles in places so that they do not scroll when you scroll a worksheet, click the'),
(43, 21, 'Which file format can be added to a PowerPoint show?'),
(44, 22, 'Which of the following should you use if you want all the slide in the presentation to have the same â€œlookâ€?'),
(45, 23, 'In PowerPoint the context of animations, what is a trigger?'),
(46, 24, 'You can create a new presentation by completing all of the following except'),
(47, 25, 'Special effects used to introduce slides in a presentation are called'),
(48, 26, 'What is the term used when you press and hold the left mouse key and more the mouse around the slide?'),
(49, 27, 'Which of the following should be used when you want to add a slide to an existing presentation?'),
(50, 28, 'which of the following is the default page setup orientation of slide in PowerPoint'),
(51, 29, 'Want your logo in the same position on every slide, automatically? Insert it on the'),
(52, 30, 'Objects on the slide that hold text are called'),
(53, 31, 'Which command brings you to the first slide in your presentation?'),
(54, 32, 'If you have a PowerPoint show you created and want to send using email to another friend you can add the show to your email message as a (an)'),
(55, 33, 'Which of the following can you use to add times to the slides in a presentation?'),
(56, 34, 'Which of the following allow you to select more than one slide in a presentation?'),
(57, 35, 'In Microsoft PowerPoint the entry effect as one slide replaces another in a show is called a (an)'),
(58, 36, 'When using PowerPoint, to play a PowerPoint show for previewing the show, select'),
(59, 37, 'Which of the following options in the printer dialog box would you select to print slides 5 and 12 in a presentation?'),
(60, 38, 'The power point view that displays only text (title and bullets) is:'),
(61, 39, 'Line spacing refers to'),
(62, 40, 'Which of the following uses the spelling and grammar feature to indicate an incorrect spelling?'),
(63, 41, 'The minimum number of rows and columns in MS Word document is'),
(64, 42, 'What is the smallest and largest font size available in Font Size tool on formatting toolbar?'),
(65, 43, 'A character that is raised and smaller above the baseline is known as'),
(66, 44, 'Selecting text means, selecting?'),
(67, 45, 'MS-Word automatically moves the text to the next line when it reaches the right edge of the screen and is called?'),
(68, 46, 'Using Find command in Word, we can search?'),
(69, 47, 'In MS-Word, for what does ruler help?'),
(70, 48, 'By default, on which page the header or the footer is printed?'),
(71, 49, 'Which key should be pressed to start a new paragraph in MS-Word?'),
(72, 50, 'What is the function of Ctrl + B in Ms-Word'),
(73, 51, 'What is the function of CTRL+R in MS-Word'),
(74, 52, 'What is the extension of files created in Ms-Word 97- 2003'),
(75, 53, 'In Microsoft Word shortcut key CTRL+W is used for'),
(76, 54, 'Which shortcut key is used to spell check in MS-Word'),
(77, 55, 'Why headers and footers used in MS -Word'),
(78, 56, 'The minimum number of rows and columns a word table can have is'),
(79, 57, 'In MS Word to move the insertion point to the beginning of the next word command used is'),
(80, 58, 'What is the default number of lines to drop for drop cap?'),
(81, 59, 'What is the maximum number of lines you can set for a drop cap?'),
(82, 60, 'Pressing F8 key for three times selects');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userPass` varchar(50) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userStatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursedetail`
--
ALTER TABLE `coursedetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultdetail`
--
ALTER TABLE `resultdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_duration`
--
ALTER TABLE `tbl_duration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_final`
--
ALTER TABLE `tbl_final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_que`
--
ALTER TABLE `tbl_que`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursedetail`
--
ALTER TABLE `coursedetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resultdetail`
--
ALTER TABLE `resultdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;

--
-- AUTO_INCREMENT for table `tbl_duration`
--
ALTER TABLE `tbl_duration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_final`
--
ALTER TABLE `tbl_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_que`
--
ALTER TABLE `tbl_que`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
