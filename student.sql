SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `extra1` (
 `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`adm_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `extra2` (
 `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`adm_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `extra3` (
 `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`adm_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `extra_cirr` (
 `adm_no` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
 `fssn` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
 `act_nam` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
 KEY `adm_no` (`adm_no`),
 KEY `fssn` (`fssn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `faculty` (
 `fname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
 `fssn` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`fssn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `last_entry` (
 `id` int(1) NOT NULL,
 `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`adm_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `stud_adm` (
 `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `act_nam` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `fac_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
 `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `img` mediumblob,
 `year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
 `twnvill` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
 `dob` date NOT NULL,
 `gen` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
 `religion` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
 `caste` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
 `comunit` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
 `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `f_ed_qua` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
 `f_add_pin` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
 `ph_no` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
 `cls_adm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `cls_sec` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
 `grop_adm` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
 `med_adm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `dat_adm` date NOT NULL,
 PRIMARY KEY (`adm_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `stud_id` (
 `adm_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`adm_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains ID for All Students';

CREATE TABLE `user` (
 `utype` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
 `eid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `pwd` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
 `mpwd` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
 PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;