-- Database: `signup_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `ID` INT PRIMARY KEY,
  `firstname` VARCHAR(20) NOT NULL,
  `lastname` VARCHAR(20) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `user_pwd` VARCHAR(20) NOT NULL,
  `user_uid` VARCHAR(50) NOT NULL
);

-- --------------------------------------------------------
