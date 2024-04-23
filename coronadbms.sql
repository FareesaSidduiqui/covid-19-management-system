
CREATE TABLE `admintbl` (
  `AdminID` int(11) primary key,
  `AdminName` varchar(120) DEFAULT NULL,
  `MobileNumber` int(11) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL
) ;

describe `admintbl`;
--
-- Table structure for table `tblpatients`
--

CREATE TABLE `patientstbl` (
  `patientID` int(11) primary key,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailAddress` varchar(50) DEFAULT NULL,
  `FullAddress` varchar(255) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `MobileNumber` int(11) DEFAULT NULL,
  `Gender` varchar(25) DEFAULT NULL,
  `Symptoms` varchar(30) DEFAULT NULL
) ;
describe `patientstbl`;

--
-- Table structure for table `tblphlebotomist`
--

CREATE TABLE `phlebotomisttbl` (
  `phlebotomistID` int(11) primary key,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` varchar(100) DEFAULT NULL
);

describe `phlebotomisttbl`;

--
-- Table structure for table `tbltestrecord`
--

CREATE TABLE `testrecordtbl` (
  `testrecordID` int(11) primary key,
  `patientID`int(11) ,
  `TestType` varchar(100) DEFAULT NULL,
  `TestTimeSlot` varchar(120) DEFAULT NULL,
  `ReportStatus` varchar(100) DEFAULT NULL,
  `FinalReport` varchar(150) DEFAULT NULL,
  `ReportUploadTime` varchar(200) DEFAULT NULL,
  `phlebotomistID` varchar(100) NOT NULL
 --  foreign key(patientID) references `patientstbl`(patientID) ,
 -- foreign key(phlebotomistID) references `phlebotomisttbl`(phlebotomistID)
) ;

describe `testrecordtbl`;

--
-- Table structure for table `reporttrackingtbl`
--

CREATE TABLE `reporttrackingtbl` (
  `reporttrackingID` int(11) primary key,
  `Remark` varchar(255) DEFAULT NULL,
  `Status` varchar(120) DEFAULT NULL,
  `testrecordID` int(11) not null
 /*foreign key(testrecordID) references `testrecordtbl`(testrecordID)*/
);
describe `reporttrackingtbl`;

--
-- Dumping data in table `admintbl`
--
INSERT INTO  `admintbl`(`AdminID`, `AdminName`, `MobileNumber`, `Email`, `Password`) VALUES
(1, 'Admin', 1234567890, 'admin@gmail.com', 'f925916e2');

-- ---------------------------------------------------------------------------------------------------------------------------

--
-- Dumping data for table `patientstbl`
--

INSERT INTO `patientstbl` (`patientID`, `FullName`,`EmailAddress`,`FullAddress`,`DateOfBirth`, `MobileNumber`, `Gender`, `Symptoms`) VALUES
(1, 'Anusha khan', 'anushakhan99@yahoo.com','45700 Islamabad PAkistan', '1999-02-01',1234567890,'Male','Feeling Weak,Cold'),
(2, 'Sam', 'sam@gmail.com', 'MEHMOODABAD 75460 Karachi PAkistan ','1990-05-09',6547893210,'Male','Fever,Feeling Weak'),
(3, 'Sara','sara@yahoo.com',' 547 Hyderabad Hafizabad PAkistan','2000-04-11', 655597413,'Female','Cold' ),
(4, 'Ghazal khan','ghazal.khan@yahoo.com','A-1234 Lahore PAkistan','2005-01-08', 24598520125,'Female','Difficulty in breadth,Cold'),
(5, 'Asmita Ali','asmita.ali11@gmail.com','H 37334 Karachi PAkistan','2007-06-01',2536987410,'Female','Fever,Feeling Weak');


-- ---------------------------------------------------------->   end insertion  <------------------------------------------------------------------------------------

--
-- Dumping data for table `phlebotomisttbl`
--

INSERT INTO `phlebotomisttbl` (`phlebotomistID`, `FullName`, `MobileNumber`) VALUES
(3,'Amar', 9876543212),
(4,'Rahul', 8529631470),
(5,'Sanya', 1234567890);

-- --------------------------------------------------------
--
-- Dumping data for table `reporttrackingtbl`
--

INSERT INTO `reporttrackingtbl` (`reporttrackingID`, `Remark`, `Status`,`testrecordID`) VALUES
(1, 'The Phlebotomist is on the way for collection.', 'On the Way for Collection','1'),
(2, 'Sample collection.', 'Sample Collected','4'),
(3, 'Sample sent to the lab.', 'Sent to Lab','1'),
(4, 'Report uploaded.', 'Delivered','1'),
(5, 'The phlebotomist is on the way to sample collection.', 'On the Way for Collection','1'),
(6, 'Sample collected successfully.', 'Sample Collected','1'),
(7, 'Sample sent to the lab.', 'Sent to Lab','1'),
(8, 'Report uploaded.', 'Delivered','1'),
(9, 'On the way for sample collection.', 'On the Way for Collection','4'),
(10, 'Sample sent to lab', 'Sent to Lab','5'),
(11, 'The phlebotomist is on the way to sample collection', 'Delivered','2');

-- --------------------------------------------------------

--
-- Dumping data for table `testrecordtbl`
--

INSERT INTO `testrecordtbl` (`testrecordID`, `patientID`, `TestType`, `TestTimeSlot`, `ReportStatus`, `FinalReport`, `ReportUploadTime`,`phlebotomistID` ) VALUES
(1, 1, 'Antigen', '2021-05-01T04:05', 'Delivered', '2c86e2aa7eb4cb4db70379e28fab9b521620331308.pdf', '07-05-2021 01:31:48 AM', '3'),
(2, 2,'RT-PCR', '2021-05-01T05:10', 'Delivered', '2c86e2aa7eb4cb4db70379e28fab9b521620363440.pdf', '07-05-2021 10:27:20 AM', '5'),
(3, 3, 'RT-PCR', '2021-05-05T14:40', 'Assigned', NULL, '27-04-2021 19:10:30PM','4'),
(4, 4,'CB-NAAT', '2021-05-15T14:22', NULL, NULL,'2021-05-08 05:49:46AM', '4'),
(5, 5,'CB-NAAT', '2021-05-20T19:00', NULL, 'pending', '2021-05-08 09:25:50','3');


select*from `admintbl`;
select*from `patientstbl`;
select*from `phlebotomisttbl`;
select*from `reporttrackingtbl`;
select*from `testrecordtbl`;

COMMIT;

-------------- AUTO_INCREMENT for dumped tables -----------------------------
--

--
----------------------------- AUTO_INCREMENT for table `tbladmin`-----------------------
--
ALTER TABLE `admintbl`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
----------------------------- AUTO_INCREMENT for table `tblpatients`---------------------
--
ALTER TABLE `patientstbl`
  MODIFY `patientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-------------------------- AUTO_INCREMENT for table `tblphlebotomist`-------------------------
--
ALTER TABLE `phlebotomisttbl`
  MODIFY `phlebotomistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
------------------------ AUTO_INCREMENT for table `tblreporttracking`----------------------------
--
ALTER TABLE `reporttrackingtbl`
  MODIFY `reporttrackingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-------------------------- AUTO_INCREMENT for table `tbltestrecord`-----------------------
--
ALTER TABLE `testrecordtbl`
  MODIFY `testrecordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


/*DELIMITER //
CREATE PROCEDURE delete_AdminTbl_Record(in id int)
begin
delete `AdminID`, `AdminName`, `MobileNumber`, `Email`, `Password` from `admintbl` where `AdminID`=id;
END //DELIMITER ;
--
----- deleting 'patienttbl' records -----------
--
DELIMITER //
CREATE PROCEDURE delete_PatientTbl_Record(in id int)
begin
delete `patientID`,`FullName`,`EmailAddress` ,`FullAddress`,`DateOfBirth`,`MobileNumber` ,`Gender` ,`Symptoms` from `patienttbl` where `patientID`=id;
END //DELIMITER ;

DELIMITER //
CREATE PROCEDURE delete_phlebotomistTbl_Record(in id int)
begin
delete `phlebotomistID`,`FullName`,`MobileNumber` from `patienttbl` where `phlebotomistID`=id;
END //DELIMITER ;

DELIMITER //
CREATE PROCEDURE delete_test_Record(in id int)
begin
delete `testrecordID`,`testrecordID`,`patientID`,`TestType`,`TestTimeSlot` ,`ReportStatus`,`FinalReport`,`ReportUploadTime`,`phlebotomistID`
from `testrecordtbl` where `testrecordID`=id;
END //DELIMITER ;


DELIMITER //
CREATE PROCEDURE delete_ReporttrackingTbl_Record(in id int)
begin
delete `reporttrackingID`, `reporttrackingID`,`Remark` ,`Status`,`testrecordID`
from `reporttrackingtbl` where `reporttrackingID`=id;
END //DELIMITER ;
*/



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
