-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 11:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemkalibrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alat`
--

CREATE TABLE `tbl_alat` (
  `id_alat` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_alat` varchar(100) DEFAULT NULL,
  `no_seri_alat` varchar(100) DEFAULT NULL,
  `type_alat` varchar(100) DEFAULT NULL,
  `merek_alat` varchar(100) DEFAULT NULL,
  `interval_kalibrasi_alat` int(11) DEFAULT NULL,
  `waktu_kalibrasi_alat` varchar(100) DEFAULT NULL,
  `keterangan_alat` varchar(100) DEFAULT NULL,
  `kondisi_alat` varchar(100) DEFAULT NULL,
  `status_alat` varchar(11) DEFAULT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `divisi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alat`
--

INSERT INTO `tbl_alat` (`id_alat`, `id_user`, `nama_alat`, `no_seri_alat`, `type_alat`, `merek_alat`, `interval_kalibrasi_alat`, `waktu_kalibrasi_alat`, `keterangan_alat`, `kondisi_alat`, `status_alat`, `id_divisi`, `divisi`) VALUES
(1255, 185, 'KWH Digital', '-', 'KWH Digital', 'Actaris -', NULL, NULL, NULL, 'BP', NULL, 410, 'General Affairs'),
(1359, 185, 'Tensi Meter', '-', 'Tensi Meter', 'Nova Riester  ', NULL, NULL, NULL, 'BP', NULL, 410, 'General Affairs'),
(1360, 185, 'Tensi Meter', '-', 'Tensi Meter', 'Nova Riester -', NULL, NULL, NULL, 'RB', NULL, 410, 'General Affairs'),
(1361, 185, 'Tensi Meter', '-', 'Tensi Meter', 'Nova Riester  ', NULL, NULL, NULL, 'BP', NULL, 410, 'General Affairs'),
(1362, 185, 'Timbangan Bayi', '-', 'Timbangan Bayi', '-', NULL, NULL, NULL, 'BP', NULL, 410, 'General Affairs'),
(2237, 185, 'Digital Earth Tester', '-', 'Digital Earth Tester', 'Kyoritsu 4105A', NULL, NULL, NULL, 'BP', NULL, 410, 'General Affairs'),
(2671, 185, 'Power Logger', '-', 'Power Logger', 'Hioki PW3360-20', NULL, NULL, NULL, 'BP', NULL, 390, 'Quality Assurance'),
(3209, 185, 'Attenuator Interconnect Kit', '-', 'Attenuator Interconnect Kit', 'Agilent 11716A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3210, 185, 'Manual Attenuator ', '-', 'Manual Attenuator ', 'Agilent 8494B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3211, 185, 'Manual Attenuator ', '-', 'Manual Attenuator ', 'Agilent 8496B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3212, 185, 'Multimeter Digital', '10055007960', 'Multimeter Digital', 'Sanwa CD800A', NULL, NULL, NULL, 'RR', NULL, NULL, NULL),
(3213, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Yokogawa 720', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3214, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Yokogawa 720', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3215, 185, 'RF Power Meter', '13311', 'RF Power Meter', 'Boonton 4531', NULL, NULL, NULL, 'RR', NULL, NULL, NULL),
(3216, 185, 'Multi Function Calibrator', '-', 'Multi Function Calibrator', 'Powertek MC 140', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3217, 185, 'Radius Gage', '-', 'Radius Gage', 'Mitutoyo 186-902 Range 0,5MM-13MM ', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3218, 185, 'Screw Pitch Gage ', '-', 'Screw Pitch Gage ', 'Mitutoyo 188-101', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3219, 185, 'Digital Phosphor Oscilloscope', '-', 'Digital Phosphor Oscilloscope', 'Tektronix  ', NULL, NULL, NULL, 'RR', NULL, NULL, NULL),
(3220, 185, 'Digitall Storage Oscilloscope', 'EJ150795', 'Digitall Storage Oscilloscope', 'GW Instek GDS-2204', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3221, 185, 'Oscilloscope ', '-', 'Oscilloscope ', 'Yokogawa 701311-F-HE/B5/P2', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3222, 185, 'Oscilloscope ', '-', 'Oscilloscope ', 'Yokogawa 701311-F-HE/B5/P2', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3223, 185, 'Fieldfox RF Analiyzer', '-', 'Fieldfox RF Analiyzer', 'Agilent N9912A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3224, 185, 'Handheld Spectrum Analyzer', '-', 'Handheld Spectrum Analyzer', 'BK Precision 2652A', NULL, NULL, NULL, 'RR', NULL, NULL, NULL),
(3225, 185, 'Spectrum Analyzer', '101087', 'Spectrum Analyzer', 'Rohde & Schwarz FSL6-Model 16', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3226, 185, 'USB Power Sensor', '-', 'USB Power Sensor', 'Signal Hound 50dB 6Ghz', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3227, 185, 'Abs Digimatic Caliper ', '-', 'Abs Digimatic Caliper ', 'Mitutoyo 500-171-20 Range 0-150MM', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3228, 185, 'Abs Digimatic Caliper ', '-', 'Abs Digimatic Caliper ', 'Mitutoyo 500-173 Range 0-300MM', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3229, 185, 'Digimatic Micrometer', '-', 'Digimatic Micrometer', 'Mitutoyo 293-145 Range 0-25MM', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3230, 185, 'Function Generator', 'EJ851511', 'Function Generator', 'GW Instek GFG-3015', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3231, 185, 'Function Generator', '-', 'Function Generator', 'Hewlett Packard  ', NULL, NULL, NULL, 'RR', NULL, NULL, NULL),
(3232, 185, 'Function Generator', 'DG4E163652069', 'Function Generator', 'Rigol DG 4162', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3233, 185, 'Ground System Portable', '-', 'Ground System Portable', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3234, 185, 'High Voltage Probe', '-', 'High Voltage Probe', 'Fluke Model 80K-6', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3235, 185, 'High Voltage Probe', '-', 'High Voltage Probe', 'Fluke Model 80K-6', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3236, 185, 'LCR Meter', 'WK140835', 'LCR Meter', 'GW Instek LCR-8101G', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3237, 185, 'LCR Meter', 'LR53536C', 'LCR Meter', 'Hewlett Packard HP 4261A', NULL, NULL, NULL, 'RR', NULL, NULL, NULL),
(3238, 185, 'Scope Corder', '-', 'Scope Corder', 'Yokogawa DL750P', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3239, 185, 'Thickness Gauge', '-', 'Thickness Gauge', 'Mitutoyo 184-303S', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3240, 185, 'True RMS Multimeter', '16540141', 'True RMS Multimeter', 'Fluke 179', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3241, 185, 'Vector Signal Generator', '101448', 'Vector Signal Generator', 'Rohde & Schwarz RS SMJ100A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3242, 185, 'Vernier Caliper', '-', 'Vernier Caliper', 'Mitutoyo 530-119 Range 1-300MM', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3243, 185, 'Vernier Caliper', '-', 'Vernier Caliper', 'Mitutoyo 530-312 Range 1-150MM', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3244, 185, 'Vibration Test Machine', '-', 'Vibration Test Machine', 'Fujian Super Power BS-100', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3245, 185, 'Timbangan Digital ', '-', 'Timbangan Digital ', 'Alexa 150KG', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3246, 185, 'Timbangan Digital ', '-', 'Timbangan Digital ', 'Quattro 1.5KG', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3602, 185, 'Attenuator', '-', 'Attenuator', 'Hewlett Packard HP 11708A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3603, 185, 'Audio Analyzer', '2818A04504', 'Audio Analyzer', 'Hewlett Packard HP 8903B', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3604, 185, 'Audio Analyzer', '2818A04456', 'Audio Analyzer', 'Hewlett Packard HP 8903B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3605, 185, 'Audio Analyzer', '3011A12591', 'Audio Analyzer', 'Hewlett Packard HP 8903B', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3606, 185, 'Counter', 'B 020920', 'Counter', 'Tektronix DC 508 A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3607, 185, 'Counter', 'B 020927', 'Counter', 'Tektronix DC 508 A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3608, 185, 'Dial Gage Tester', '70883', 'Dial Gage Tester', 'Mitutoyo 170-260', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3609, 185, 'Dial Test Indicator', '669579', 'Dial Test Indicator', 'Mitutoyo 513-904', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3610, 185, 'Digital Signal Generator', 'F-0062', 'Digital Signal Generator', 'Wandel & Goltermann PDG-3', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3611, 185, 'Digital Volt meter', '2943A22469', 'Digital Volt meter', 'Hewlett Packard HP 3456A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3612, 185, 'Earth Tester', '-', 'Earth Tester', 'Yokogawa 3235', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3613, 185, 'G ohm, Resistance', '7D00932', 'G ohm, Resistance', 'Gossen 2', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3614, 185, 'G ohm, Resistance', '144517', 'G ohm, Resistance', 'Hioki ER-309', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3615, 185, 'Microwave Counter / Power Meter', '3009 A 01077', 'Microwave Counter / Power Meter', 'Hewlett Packard HP 5347A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3616, 185, 'Modulation Analyzer', '2751A04872', 'Modulation Analyzer', 'Hewlett Packard HP 8901A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3617, 185, 'Multimeter', '6A8595', 'Multimeter', 'Sanwa 501-ZX-TR', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3618, 185, 'Multimeter', '7040016', 'Multimeter', 'Sanwa 501-ZX-TR', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3619, 185, 'Multimeter Digital', '1652A15676', 'Multimeter Digital', 'Hewlett Packard HP 3476B', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3620, 185, 'Multimeter Digital', 'B 027436', 'Multimeter Digital', 'Tektronix DM 501 A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3621, 185, 'Multimeter Digital', 'B 027318', 'Multimeter Digital', 'Tektronix DM 501 A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3622, 185, 'Power Meter', '2101A11450', 'Power Meter', 'Hewlett Packard HP 435A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3623, 185, 'Universal Counter', '3145A15228', 'Universal Counter', 'Hewlett Packard HP 5335A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3624, 185, 'Voltmeter Electronic', 'M08548', 'Voltmeter Electronic', 'Anritsu ML69A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3625, 185, 'Angle Gauge Block', '-', 'Angle Gauge Block', 'Kuroda 8508', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3626, 185, 'Bor Gauge', '707285', 'Bor Gauge', 'Mitutoyo 511-203', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3627, 185, 'Bor Gauge', '744767', 'Bor Gauge', 'Mitutoyo 511-210', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3628, 185, 'Calibration Generator', 'B 047145', 'Calibration Generator', 'Tektronix PG 506', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3629, 185, 'Calibrator', 'SP 4270000', 'Calibrator', 'Fluke 5100 B', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3630, 185, 'Caliper Checker', '10031', 'Caliper Checker', 'Mitutoyo 515-551', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3631, 185, 'Carpenter Square', '-', 'Carpenter Square', 'Stanley 45-600', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3632, 185, 'Color TV Patern Generator', 'LO 636591', 'Color TV Patern Generator', 'Philips PM 5418 TDSI', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3633, 185, 'Current Shunt ', '1539011', 'Current Shunt ', 'Fluke A40A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3634, 185, 'DC Voltage Standard', '-', 'DC Voltage Standard', 'Fluke 732B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3635, 185, 'Decade Capasitor', '6067', 'Decade Capasitor', 'General Radio 1412 BC', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3636, 185, 'Dial Caliper', '-', 'Dial Caliper', 'Mitutoyo 505-635-50', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3637, 185, 'Dial Caliper', '-', 'Dial Caliper', 'Mitutoyo 505-648-50', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3638, 185, 'Digital Latch', 'B 031146', 'Digital Latch', 'Tektronix DL 2', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3639, 185, 'Distorsiometre Automatique', '-', 'Distorsiometre Automatique', 'LEA EHD50S', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3640, 185, 'Dokumenting Proccess Calibrator', '1609301', 'Dokumenting Proccess Calibrator', 'Fluke 744', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3641, 185, 'Down Converter', 'B 011635', 'Down Converter', 'Tektronix TDC 8', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3642, 185, 'Frequency Combination Generator', '2438A02578', 'Frequency Combination Generator', 'Hewlett Packard HP 8406A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3643, 185, 'Frequency Counter', '1724A04650', 'Frequency Counter', 'Hewlett Packard HP 5340A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3644, 185, 'Gauge Blocks', '20514', 'Gauge Blocks', 'Mitutoyo 516-516', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3645, 185, 'Graplate Stand', '-', 'Graplate Stand', 'Mitutoyo 517-206', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3646, 185, 'High Meter Resistance', '2510J08499', 'High Meter Resistance', 'Hewlett Packard HP 4329A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3647, 185, 'Holtest', '-', 'Holtest', 'Mitutoyo 368-906', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3648, 185, 'Ilumination Level', '-', 'Ilumination Level', 'Msimpson 408', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3649, 185, 'Knife Edge Straight Edges', '-', 'Knife Edge Straight Edges', 'Mitutoyo 970-101', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3650, 185, 'Low Pass Filter', '-', 'Low Pass Filter', 'Tektronix 015 - 0352', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3651, 185, 'Low Pass Filter', '-', 'Low Pass Filter', 'Tektronix 015 - 0352', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3652, 185, 'Low Pass Filter', '-', 'Low Pass Filter', 'Tektronix 015 - 0352', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3653, 185, 'Magnetic Stand', '4251791', 'Magnetic Stand', 'Mitutoyo 7011S', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3654, 185, 'Magnetic Stand', '723994', 'Magnetic Stand', 'Mitutoyo 7011S', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3655, 185, 'Magnetic Stand', '-', 'Magnetic Stand', 'Mitutoyo 7012', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3656, 185, 'Measurement Thickness Material', '-', 'Measurement Thickness Material', 'Dermitron D9E055+21PRO', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3657, 185, 'Measuring Receiver', '3226A03402', 'Measuring Receiver', 'Hewlett Packard HP 8902A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3658, 185, 'Microwave Converter', '2914A01581', 'Microwave Converter', 'Hewlett Packard HP 11793A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3659, 185, 'Microwave Frequency Counter', '2728A00877', 'Microwave Frequency Counter', 'Hewlett Packard HP 5350B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3660, 185, 'Mistar / Steel Rule', '-', 'Mistar / Steel Rule', 'Mitutoyo  ', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3661, 185, 'Mistar / Steel Rule', '-', 'Mistar / Steel Rule', 'Mitutoyo 182-105', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3662, 185, 'Mistar / Steel Rule', '-', 'Mistar / Steel Rule', 'Mitutoyo 182-309', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3663, 185, 'Multi Produk Calibrator', '1582001', 'Multi Produk Calibrator', 'Fluke 5500 A, 300 Mhz Scup Option', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3664, 185, 'Noise Figure Meter', '2812A00986', 'Noise Figure Meter', 'Hewlett Packard HP 8970B', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3665, 185, 'Optic E/O Converter', 'R 010178', 'Optic E/O Converter', 'Tektronix OR - 502', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3666, 185, 'Optic E/O Converter', 'R 010129', 'Optic E/O Converter', 'Tektronix OT - 502', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3667, 185, 'Optical Flat', '-', 'Optical Flat', 'Mitutoyo 158-118', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3668, 185, 'Optical Parallel', '-', 'Optical Parallel', 'Mitutoyo 157-903', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3669, 185, 'Pattern Generator', 'B 010306', 'Pattern Generator', 'Tektronix TPG 625', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3670, 185, 'PCM Digital Signal Analyzer', 'F-0033', 'PCM Digital Signal Analyzer', 'Wandel & Goltermann PDA-3', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3671, 185, 'Power Module', 'B 010979', 'Power Module', 'Tektronix TM 503 A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3672, 185, 'Power Module', 'B 037163', 'Power Module', 'Tektronix TM 506', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3673, 185, 'Power Module', 'B 037170', 'Power Module', 'Tektronix TM 506', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3674, 185, 'Power Module', 'B 037164', 'Power Module', 'Tektronix TM 506', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3675, 185, 'Power Module Calibrasi Generator', 'B 012932', 'Power Module Calibrasi Generator', 'Tektronix TM 5006 A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3676, 185, 'Probe RTD PRT 100 Ohm', 'E 00435', 'Probe RTD PRT 100 Ohm', 'Davis Instruments TT 73414', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3677, 185, 'Probe RTD PRT 100 Ohm', 'E00283', 'Probe RTD PRT 100 Ohm', 'Davis Instruments TT 73418', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3678, 185, 'Programmable AC Voltage Stand', '27-594', 'Programmable AC Voltage Stand', 'Valhalla 2703', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3679, 185, 'Programmable AC-DC Current Calibration', '10-837', 'Programmable AC-DC Current Calibration', 'Valhalla 2500 EP', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3680, 185, 'Programmable Calibration Generator', 'B 011322', 'Programmable Calibration Generator', 'Tektronix CG 5011', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3681, 185, 'Pulse/Function Generator', '3134G14939', 'Pulse/Function Generator', 'Hewlett Packard HP 8116A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3682, 185, 'Pulse Generator', '2608G05151', 'Pulse Generator', 'Hewlett Packard HP 8082A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3683, 185, 'Pulse Generator', 'B 045708', 'Pulse Generator', 'Tektronix PG 502', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3684, 185, 'Radius Gage', '-', 'Radius Gage', 'Mitutoyo 186-105', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3685, 185, 'Reference Multimeter', '158062018', 'Reference Multimeter', 'Fluke 508A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3686, 185, 'Screw Pitch Gage', '-', 'Screw Pitch Gage', 'Mitutoyo 188-151', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3687, 185, 'Sensor Module', '3124A01537', 'Sensor Module', 'Hewlett Packard HP 11722A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3688, 185, 'Sensor Module', '3111A04275', 'Sensor Module', 'Hewlett Packard HP 11792A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3689, 185, 'Signal Audio Generator', '-', 'Signal Audio Generator', 'Tektronix ASG 100', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3690, 185, 'Signal Generator', '2815U04196', 'Signal Generator', 'Hewlett Packard HP 8656B', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3691, 185, 'Signal Generator', '3315U03921', 'Signal Generator', 'Hewlett Packard HP 8657B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3692, 185, 'Surface Roughness Tester', '601654', 'Surface Roughness Tester', 'Mitutoyo 178-215', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3693, 185, 'Telegraph Signal Analyzer', 'FNR.AL/US 000', 'Telegraph Signal Analyzer', 'Siemens 2 H 3', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3694, 185, 'Tracking Generator', 'B 011482', 'Tracking Generator', 'Tektronix TR 503', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3695, 185, 'Transceiver Interface', '2801A00684', 'Transceiver Interface', 'Hewlett Packard HP 8954A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3696, 185, 'UHF Tunable Down Converter p.I 1450-2', 'B 0104/1', 'UHF Tunable Down Converter p.I 1450-2', 'Tektronix TDC 2', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3697, 185, 'Video Measurement Set', 'B 040647', 'Video Measurement Set', 'Tektronix VM 700A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3698, 185, 'Oscilloscope', 'B 021657', 'Oscilloscope', 'Tektronix 2235 A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3699, 185, 'Oscilloscope', 'B 024007', 'Oscilloscope', 'Tektronix SC 504', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3700, 185, 'Control Square', '-', 'Control Square', 'Mitutoyo 916-102', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3701, 185, 'CPU Controller', '6346A40060', 'CPU Controller', 'Hewlett Packard HP 2240A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3702, 185, 'Dial Indicator', '21678', 'Dial Indicator', 'Mitutoyo 2000/0.01-10', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3703, 185, 'Dial Indicator', '883263', 'Dial Indicator', 'Mitutoyo 2110-70', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3704, 185, 'Fhase Detector', '-', 'Fhase Detector', 'Hioki  ', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3705, 185, 'Level Meter', 'M83961', 'Level Meter', 'Anritsu ML424 A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3706, 185, 'Power Sensor', '3318A83195', 'Power Sensor', 'Hewlett Packard HP 8481A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3707, 185, 'Power Sensor', '-', 'Power Sensor', 'Hewlett Packard HP 8481D', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3708, 185, 'Spectrum Analyzer', '2736A07250', 'Spectrum Analyzer', 'Hewlett Packard HP 3580A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3709, 185, 'Spectrum Analyzer', 'B 010145', 'Spectrum Analyzer', 'Tektronix 2795', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3710, 185, 'Switch/Control Unit', '2719A29464', 'Switch/Control Unit', 'Hewlett Packard HP 3488A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3711, 185, 'Video Receiver', 'HFL 56679', 'Video Receiver', 'Scientific 75301', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3712, 185, 'Broadband Sampling Voltmeter', '1722A06176', 'Broadband Sampling Voltmeter', 'Hewlett Packard HP 3406A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3713, 185, 'Coaxial Resistor', '2358', 'Coaxial Resistor', 'Bird 8166', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3714, 185, 'Combination Set', '-', 'Combination Set', 'Mitutoyo 180-907', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3715, 185, 'Communication Receiver', '1070165', 'Communication Receiver', 'Kenwood R-1000', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3716, 185, 'Curent Transformer', '-', 'Curent Transformer', '3VA-5/9', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3717, 185, 'Curve Tracer', 'B 339102', 'Curve Tracer', 'Tektronix 576', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3718, 185, 'Data Analyzer', '301513', 'Data Analyzer', 'Tektronix 308', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3719, 185, 'Decade Inductance Box', '1916I13', 'Decade Inductance Box', 'Time Electronics 1053', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3720, 185, 'Decade Resistance Box', 'N5343L29-1966', 'Decade Resistance Box', 'Yokogawa RV 61', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3721, 185, 'Digimatic Height Gage', '-', 'Digimatic Height Gage', 'Mitutoyo 192-662', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3722, 185, 'Elec-Scoper', '-', 'Elec-Scoper', 'Hioki 3123', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3723, 185, 'Gauge Block Accessoris', '144517', 'Gauge Block Accessoris', 'Mitutoyo 516-601', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3724, 185, 'Gauge Block Service Kit', '-', 'Gauge Block Service Kit', 'Mitutoyo 516-650', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3725, 185, 'Indicating Micrometer', '71047', 'Indicating Micrometer', 'Mitutoyo 510-101', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3726, 185, 'Insertion Test Signal Gnerator', 'B 033547', 'Insertion Test Signal Gnerator', 'Tektronix 1411', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3727, 185, 'Inside Micrometer', '79609', 'Inside Micrometer', 'Mitutoyo 145-185', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3728, 185, 'Isolation Messer', '-', 'Isolation Messer', 'Rohde & Schwarz  ', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3729, 185, 'LCR Meter ', '2147J01866', 'LCR Meter ', 'Hewlett Packard HP 4274A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3730, 185, 'LCR Meter ', '2830J04733', 'LCR Meter ', 'Hewlett Packard HP 4275A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3731, 185, 'Leveled Sine Wave Generator', 'B 068615', 'Leveled Sine Wave Generator', 'Tektronix SG 503', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3732, 185, 'Leveled Sine Wave Generator', 'B 012233', 'Leveled Sine Wave Generator', 'Tektronix SG 504', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3733, 185, 'Magnifying Lens', '-', 'Magnifying Lens', 'Waldman STK 215', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3734, 185, 'Micrometer Outside', '-', 'Micrometer Outside', 'Mitutoyo  ', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3735, 185, 'Micrometer Outside', '8110727', 'Micrometer Outside', 'Mitutoyo 193-111', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3736, 185, 'Micrometer Stand', '-', 'Micrometer Stand', 'Mitutoyo 156-101', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3737, 185, 'Q Meter', '1839J03893', 'Q Meter', 'Hewlett Packard HP 4342A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3738, 185, 'Signal Synth. Generator', '3315U03922', 'Signal Synth. Generator', 'Hewlett Packard HP 8657B', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3739, 185, 'Signal Synth. Generator', '3212A01796', 'Signal Synth. Generator', 'Hewlett Packard HP 8673B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3740, 185, 'Signature Analyzer', '2314A04018', 'Signature Analyzer', 'Hewlett Packard HP 5006A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3741, 185, 'Standard Freq.Quartz Oscillator', '2128A00809', 'Standard Freq.Quartz Oscillator', 'Hewlett Packard HP 105A', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3742, 185, 'Standard Resistor', 'N 5023J1', 'Standard Resistor', 'Yongnuo -', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3743, 185, 'Standard Resistor', 'N 5023K134', 'Standard Resistor', 'Yongnuo -', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3744, 185, 'Standard Resistor', 'N 5023M161', 'Standard Resistor', 'Yongnuo -', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3745, 185, 'SWR Meter', '1750A08305', 'SWR Meter', 'Hewlett Packard HP 415E', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3746, 185, 'Television Demodulator', '906', 'Television Demodulator', 'Barco VSD 1', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3747, 185, 'Television Demodulator', 'B 020236', 'Television Demodulator', 'Tektronix 1450-2', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3748, 185, 'TV Demodulator', '-', 'TV Demodulator', 'Tektronix 1450-2', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3749, 185, 'Test Oscillator', '1807U01690', 'Test Oscillator', 'Hewlett Packard HP 651 B', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3750, 185, 'Time Mark Generator', 'B 038078', 'Time Mark Generator', 'Tektronix TG 501', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3751, 185, 'Time Mark Generator', 'B 038092', 'Time Mark Generator', 'Tektronix TG 501', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3752, 185, 'Universal Bevel /Protractor Set Bevel', '-', 'Universal Bevel /Protractor Set Bevel', 'Mitutoyo 187-901', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(3753, 185, 'UTI 325 R', '55554', 'UTI 325 R', 'Mathilda  ', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3754, 185, 'Video Noise Generator', 'B 010171', 'Video Noise Generator', 'Tektronix 1434', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3755, 185, 'Video Signal Corector', '300279/030', 'Video Signal Corector', 'Rohde & Schwarz A V E F', NULL, NULL, NULL, 'RR', NULL, NULL, NULL),
(3756, 185, 'Watt Ampvoltmeter', '-', 'Watt Ampvoltmeter', 'VAW Voltawatt -', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(3757, 185, 'Wide Band Synthesizer', 'M 38886', 'Wide Band Synthesizer', 'Anritsu MG40C', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(4093, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Sanwa CD800', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(4094, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Sanwa CD800', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(4095, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Sanwa CD801', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(4383, 185, 'Audio & Modulation  Analyzer', '-', 'Audio & Modulation  Analyzer', 'Ramsey Com3010', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4384, 185, 'Audio & Modulation  Analyzer', '-', 'Audio & Modulation  Analyzer', 'Ramsey Com3010', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4386, 185, 'Dummy Load', '-', 'Dummy Load', 'Bird 50 T-FN', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(4387, 185, 'G ohm, Resistance', '-', 'G ohm, Resistance', 'Prostat PAS-105 Test Kit', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(4388, 185, 'Power Devider Combiner', '-', 'Power Devider Combiner', 'Meca 802.8-1', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4389, 185, 'Power Devider Combiner', '-', 'Power Devider Combiner', 'Meca 802.8-1', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4390, 185, 'SMD Counter', '-', 'SMD Counter', 'NamA Korea i-Magic 3 In 1 Counter', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(4391, 185, 'Signal Generator', '-', 'Signal Generator', 'Rigol DG5252, 2Ch, 250 MHz', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4392, 185, 'Sonic Belt Tension Device', '-', 'Sonic Belt Tension Device', 'Gates GR-2570', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4393, 185, 'Spectrum Analizer', '-', 'Spectrum Analizer', 'Rigol DSA815TG, 100HZ RBW Tracking Generator', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4394, 185, 'Spectrum Analizer', '-', 'Spectrum Analizer', 'Rigol DSA815TG, 100HZ RBW Tracking Generator', NULL, NULL, NULL, 'BT', NULL, NULL, NULL),
(4395, 185, 'Spectrum Analizer', '-', 'Spectrum Analizer', 'Rigol DSA815TG, 100HZ RBW Tracking Generator', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4396, 185, 'Spectrum Analizer', '-', 'Spectrum Analizer', 'Rigol DSA815TG, 100HZ RBW Tracking Generator', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4397, 185, 'Controller Electric Screwdriver', '1509190003', 'Controller Electric Screwdriver', 'Sehan FT-30D', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4398, 185, 'Controller Electric Screwdriver', '1505190002', 'Controller Electric Screwdriver', 'Sehan FT-30D', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4399, 185, 'Controller Electric Screwdriver', '1509190001', 'Controller Electric Screwdriver', 'Sehan FT-30D', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4400, 185, 'Eeprom Universal Programmer', '-', 'Eeprom Universal Programmer', 'Elnec Smartprog2', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4401, 185, 'SWR & Power Meter', '-', 'SWR & Power Meter', 'Daiwa CN-801 HP3', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4402, 185, 'SWR & Power Meter', '-', 'SWR & Power Meter', 'Daiwa CN-801 HP3', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4403, 185, 'Torque Tester', '-', 'Torque Tester', 'EZ-Torq H101', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(4404, 185, 'Wrist Strap Tester', '-', 'Wrist Strap Tester', 'Exso WST-698', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(4405, 185, 'Thermometer', '-', 'Thermometer', 'Fluke 52 II', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5334, 185, 'Test Picture', '-', 'Test Picture', 'Keithley 8006', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5335, 185, 'Solar Cell Tester', '-', 'Solar Cell Tester', 'Zuhai Gmee Solar -', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5517, 185, 'Programmable Elektro Meter', '-', 'Programmable Elektro Meter', 'Keithley 617', NULL, NULL, NULL, 'RB', NULL, 399, 'Production Operation'),
(5518, 185, 'Programmable Voltage Source', '-', 'Programmable Voltage Source', 'Keithley 230', NULL, NULL, NULL, 'RB', NULL, 399, 'Production Operation'),
(5519, 185, 'Quad Voltage Source', '-', 'Quad Voltage Source', 'Keithley 213', NULL, NULL, NULL, 'RB', NULL, 399, 'Production Operation'),
(5520, 185, 'Source Measure Current', '-', 'Source Measure Current', 'Keithley 238', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5521, 185, 'Source Measure Unit', '-', 'Source Measure Unit', 'Keithley 236', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5522, 185, 'Source Measure Voltage ', '-', 'Source Measure Voltage ', 'Keithley 237', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5523, 185, 'Trigger Controller', '-', 'Trigger Controller', 'Keithley 2361', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5524, 185, 'Trigger Controller', '-', 'Trigger Controller', 'Keithley 8006', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5699, 185, 'Attenuator', '1323190', 'Attenuator', 'Bird 50-T-MN', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5700, 185, 'Attenuator', '1323191', 'Attenuator', 'Bird 50-T-MN', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5701, 185, 'Multimeter Digital', '07MI69181', 'Multimeter Digital', 'Sanwa CD771', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5702, 185, 'Network Analizer 3,2Ghz', '131000010', 'Network Analizer 3,2Ghz', 'Protek A333', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5703, 185, 'Element Watt Meter', '-', 'Element Watt Meter', 'Bird 5E', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5704, 185, 'Element Watt Meter', '-', 'Element Watt Meter', 'Bird 10E', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5705, 185, 'Element Watt Meter', '-', 'Element Watt Meter', 'Bird 25E', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5706, 185, 'Element Watt Meter', '-', 'Element Watt Meter', 'Bird 50E', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5707, 185, 'Element Watt Meter', '-', 'Element Watt Meter', 'Bird 500E', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5708, 185, 'Element Watt Meter', '-', 'Element Watt Meter', 'Bird 1000E', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5709, 185, 'Portable Wattmeter', '134800721', 'Portable Wattmeter', 'Bird 4431', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5710, 185, 'Portable Wattmeter', '134602369', 'Portable Wattmeter', 'Bird 4431', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5711, 185, 'TV Analizer', '103555', 'TV Analizer', 'Rohde & Schwarz ETL SERIES', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5712, 185, 'Digital Microscope Video Inspection', '-', 'Digital Microscope Video Inspection', 'CaltexSystem RX-100-BGA-DS20S', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5713, 185, 'High Precision Calibration Kit', '-', 'High Precision Calibration Kit', 'Transcom DC to 3GHz N Type', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5714, 185, 'Video Encoder', 'HS-027654', 'Video Encoder', 'Hoseo DME-8624S', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5715, 185, 'Video Encoder', 'HS-027092', 'Video Encoder', 'Hoseo DME-9624H', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5716, 185, 'Oscilloscope ', 'C012063', 'Oscilloscope ', 'Tektronix TDS 2014-C', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5717, 185, 'Oscilloscope', '-', 'Oscilloscope', 'Tektronix TDS 3052-C', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5718, 185, 'Oscilloscope ', '-', 'Oscilloscope ', 'Tektronix TDS 3052-C', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5719, 185, 'AC/DC Clamp meter', '14670070', 'AC/DC Clamp meter', 'Fluke 376', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5720, 185, 'AC/DC Clamp meter', '19850556', 'AC/DC Clamp meter', 'Fluke 376', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5721, 185, 'AC/DC Clamp meter', '40797', 'AC/DC Clamp meter', 'Kyoritsu 2004', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5722, 185, 'Analog TV Analysis', '-', 'Analog TV Analysis', 'Rohde & Schwarz ETL-K202 2112.0433.02', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5723, 185, 'Cam Grip', '-', 'Cam Grip', 'Imada GP-30', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5724, 185, 'LCR Meter ', 'EO160226', 'LCR Meter ', 'GW Instek 8101G', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5725, 185, 'LCR Meter', 'I.07482', 'LCR Meter', 'Lutron 9083', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5726, 185, 'Microskop', 'A6221494', 'Microskop', 'Dinolite AM4515ZT', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5727, 185, 'RF Preselector', '-', 'RF Preselector', 'Rohde & Schwarz ETL-B203', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5728, 185, 'SK Pin Gauge Set', '-', 'SK Pin Gauge Set', 'Fokuteikougu -', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5729, 185, 'Testing Device', '-', 'Testing Device', 'Alpro KPI, for KP Module', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5730, 185, 'Testing Device', '-', 'Testing Device', 'Alpro KPI, for UNUR Testing', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5731, 185, 'Testing Device', '-', 'Testing Device', 'Alpro REI, for RE Module', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5732, 185, 'Testing Device', '-', 'Testing Device', 'Alpro TS512, for Fast Axle Counting', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5733, 185, 'Testing Device', '-', 'Testing Device', 'Alpro UPI, for UP Module', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5734, 185, 'Testing Device', '-', 'Testing Device', 'Alpro ZANAPI, for ZANAP Module', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5735, 185, 'Vertical Manual Lever', '322886', 'Vertical Manual Lever', 'Imada SVL-1000N', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5736, 185, 'Video Patern Generator', 'C022471', 'Video Patern Generator', 'Tektronix SPG300', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5737, 185, 'Wire Grip', '-', 'Wire Grip', 'Imada FW-12', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5738, 185, 'Coating Thickness Tester', '-', 'Coating Thickness Tester', 'Extech Instrument CG204', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5755, 185, 'Light Meter', '-', 'Light Meter', 'Extech Instrument EA30', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5756, 185, 'Frequency Meter', '1823112411030005', 'Frequency Meter', 'BK Precision 1823A', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5757, 185, 'Coating Thickness Gauge', '-', 'Coating Thickness Gauge', 'Time Instrument TT210', NULL, NULL, NULL, 'RB', NULL, 410, 'General Affairs'),
(5821, 185, 'Multimeter Digital', '11250112', 'Multimeter Digital', 'Prova True RMS 903', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5822, 185, 'Multi Function Calibrator', '413011', 'Multi Function Calibrator', 'Powertek MC 140', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5823, 185, 'Scope Corder', '91PC13725', 'Scope Corder', 'Yokogawa DL850EV', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5824, 185, 'AC/DC Clamp meter', '26470215', 'AC/DC Clamp meter', 'Fluke 376', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5825, 185, 'Digital Force Gauge', '334512', 'Digital Force Gauge', 'Imada ZTS-1000N', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(5826, 185, 'High Potential Dielectric Strenght Tester', '29275', 'High Potential Dielectric Strenght Tester', 'Megger 230425-07', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5827, 185, 'Insulation Tester kit', '2800020', 'Insulation Tester kit', 'Fluke FLK-1555', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5828, 185, 'Temperature Humidity Meter', '2418208', 'Temperature Humidity Meter', 'Fluke 971', NULL, NULL, NULL, 'BT', NULL, 398, 'Product Engineering'),
(5829, 185, 'Thermal Camera', '63924905', 'Thermal Camera', 'FLIR E5', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5830, 185, 'True RMS Multimeter', '18620057', 'True RMS Multimeter', 'Fluke 289', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(5831, 185, 'True RMS Multimeter', '24930094', 'True RMS Multimeter', 'Fluke 289', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(6114, 185, 'Thermohygrometer', '-', 'Thermohygrometer', 'Extech Instrument EX-022', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(6115, 185, 'Thermohygrometer', '-', 'Thermohygrometer', 'Extech Instrument EX-022', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(6116, 185, 'Thermohygrometer', '-', 'Thermohygrometer', 'Extech Instrument EX-022', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(6163, 185, 'Timbangan Digital', '113730046', 'Timbangan Elektronik', 'Ishida SJ-620E', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(6177, 185, 'Timbangan Elektronik', '-', 'Timbangan Digital ', 'Quattro Macs-C', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(6178, 185, 'Thermohygrometer', '-', 'Thermohygrometer', 'Extech Instrument EX-022', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(6191, 185, 'Thermohygrometer', '-', 'Thermohygrometer', 'Extech Instrument EX-022', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(6239, 185, 'Thermohygrometer', '-', 'Thermohygrometer', 'Extech Instrument EX-022', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(6317, 185, 'Thermohygrometer', '-', 'Thermohygrometer', 'Extech Instrument EX-022', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(6372, 185, 'Timbangan Gabahan', '-', 'Timbangan Gabahan', '500 Kg', NULL, NULL, NULL, 'RR', NULL, NULL, NULL),
(6816, 185, 'Multimeter', '-', 'Multimeter', 'Sanwa -', NULL, NULL, NULL, 'BP', NULL, 388, 'Information System & Cyber Security'),
(6817, 185, 'Multimeter', '-', 'Multimeter', 'Sanwa -', NULL, NULL, NULL, 'BP', NULL, 388, 'Information System & Cyber Security'),
(6818, 185, 'Multimeter', '-', 'Multimeter', 'Sanwa -', NULL, NULL, NULL, 'BP', NULL, 388, 'Information System & Cyber Security'),
(6819, 185, 'Environment Monitoring System', '-', 'Environment Monitoring System', 'NTI Environmux 16D', NULL, NULL, NULL, 'BP', NULL, 388, 'Information System & Cyber Security'),
(6820, 185, 'Multi Fungtion Tester', '-', 'Multi Fungtion Tester', 'Krisbow KW065-574', NULL, NULL, NULL, 'BP', NULL, 388, 'Information System & Cyber Security'),
(6821, 185, 'Optical Light Source', '-', 'Optical Light Source', 'Exfo ELS-50-23BL-LSA-89-RB', NULL, NULL, NULL, 'BP', NULL, 388, 'Information System & Cyber Security'),
(6822, 185, 'Optical Power Meter', '-', 'Optical Power Meter', 'Exfo EPM-53-PMA-22-RB', NULL, NULL, NULL, 'BP', NULL, 388, 'Information System & Cyber Security'),
(6938, 185, 'Accu Tester Digital', '-', 'Accu Tester Digital', 'OPT FY119', NULL, NULL, NULL, 'BP', NULL, 388, 'Information System & Cyber Security'),
(6939, 185, 'Accu Tester Digital', '-', 'Accu Tester Digital', 'OPT FY119', NULL, NULL, NULL, 'BP', NULL, 388, 'Information System & Cyber Security'),
(7094, 185, 'Insulation Tester', '-', 'Insulation Tester', 'Kyoritsu 3124', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7162, 185, 'Dummy Load', '1336', 'Dummy Load', 'Bird 8173, 300 W-50 Ohm', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7163, 185, 'Power Meter', '2702A15631', 'Power Meter', 'Hewlett Packard HP 435A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7164, 185, 'Service Monitor', '601075', 'Service Monitor', 'Ramsey Com3010', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7165, 185, 'Thruline Watt Meter', '060500168', 'Thruline Watt Meter', 'Bird Model 43', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7166, 185, 'Arbitrary', '-', 'Arbitrary', 'GW Instek SFG 830', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7167, 185, 'Frequency Counter', '-', 'Frequency Counter', 'Hewlett Packard HP 5385A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7168, 185, 'Microwave Frequency Counter', '-', 'Microwave Frequency Counter', 'Hewlett Packard HP 5342A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7169, 185, 'Oscilloscope', 'US 35035143', 'Oscilloscope', 'Hewlett Packard HP 54602B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7170, 185, 'Oscilloscope', '7075826', 'Oscilloscope', 'Hitachi V 552', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7171, 185, 'Oscilloscope', '211621742100018', 'Oscilloscope', 'Iwatsu SS 7821A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7172, 185, 'Oscilloscope ', 'C012832', 'Oscilloscope ', 'Tektronix TDS 2022-C', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7173, 185, 'Spectrum Analyzer', '108092051', 'Spectrum Analyzer', 'Aeroflex Weinshcel IFR 2399C', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7174, 185, 'Spektrum Analyzer', '26486A14772', 'Spektrum Analyzer', 'Hewlett Packard HP 8566B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7175, 185, 'Spektrum Analyzer', '100601', 'Spektrum Analyzer', 'Rohde & Schwarz 9 Khz - 3 Mhz', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7176, 185, 'Function Generator', '-', 'Function Generator', 'GW Instek A180840', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7177, 185, 'Function Generator', 'US 34007122', 'Function Generator', 'Hewlett Packard HP 33120A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7178, 185, 'LCR Meter', '40702020031', 'LCR Meter', 'GW Instek LCR 814', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7179, 185, 'SWR & Power Meter', '-', 'SWR & Power Meter', 'Daiwa CN-801 HP3', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7180, 185, 'SWR Analyzer', '-', 'SWR Analyzer', 'Universal Radio Inc. MFJ 259 B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7181, 185, 'Synthesized Sweepers ', '-', 'Synthesized Sweepers ', 'Hewlett Packard HP 8341B / 10 Mhz-20 Ghz', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7182, 185, 'Test Receiver ', '342.4020.53', 'Test Receiver ', 'Rohde & Schwarz 20-1000Mhz', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(7405, 185, 'Laser Range Finder', '-', 'Laser Range Finder', 'Weizhou Type 00-1181-9002', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8199, 185, 'Earth Tester', '7C9113', 'Earth Tester', 'Sanwa -', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8200, 185, 'Modulation Analizer', '2052A01016', 'Modulation Analizer', 'Hewlett Packard HP 8901A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8201, 185, 'Multimeter Digital', '6095001', 'Multimeter Digital', 'Fluke 25', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8202, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'APPA 95', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8203, 185, 'Network Analizer 3,2Ghz', '-', 'Network Analizer 3,2Ghz', 'Hewlett Packard HP 8753B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8204, 185, 'Thruline Watt Meter', '9277', 'Thruline Watt Meter', 'Bird -', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8205, 185, 'Thruline Watt Meter', '12721', 'Thruline Watt Meter', 'Bird -', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8206, 185, 'Thruline Watt Meter', '9153', 'Thruline Watt Meter', 'Bird -', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8207, 185, 'Thruline Watt Meter', '264', 'Thruline Watt Meter', 'Bird -', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8208, 185, 'Upgrade TV Analizer', '-', 'Upgrade TV Analizer', 'Rohde & Schwarz ATL', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8209, 185, 'PAL Insertion Generator', 'B061936', 'PAL Insertion Generator', 'Tektronix VITS 201', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8210, 185, 'Slide Thermostat', '23310309/53', 'Slide Thermostat', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8211, 185, 'Sweep Generator', '863249/007', 'Sweep Generator', '0KHz-60KHz', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8212, 185, 'Sweep Generator', '11100413', 'Sweep Generator', 'Leader LSW251', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8213, 185, 'Sweep Generator', '11100431', 'Sweep Generator', 'Leader LSW251', NULL, NULL, NULL, 'RB', NULL, NULL, NULL),
(8214, 185, 'Sweep Generator', '0907649', 'Sweep Generator', 'Leader LSW251', NULL, NULL, NULL, 'RB', NULL, NULL, NULL),
(8215, 185, 'Sweep Generator', '1110419', 'Sweep Generator', 'Leader LSW251', NULL, NULL, NULL, 'RB', NULL, NULL, NULL),
(8216, 185, 'Sweep Oscillator', '274909966', 'Sweep Oscillator', 'Hewlett Packard HP 8350B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8217, 185, 'Sweep Oscillator', '3116A 15524', 'Sweep Oscillator', 'Hewlett Packard HP 8350B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8218, 185, 'Synth. Level Generator', 'MO 4241', 'Synth. Level Generator', 'Anritsu MG442A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8219, 185, 'Termaline Dummy Load', '271', 'Termaline Dummy Load', 'Bird 6735-300', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8220, 185, 'Termaline Dummy Load', '27881', 'Termaline Dummy Load', 'Bird 150 Watt', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8221, 185, 'Termaline Dummy Load', '27883', 'Termaline Dummy Load', 'Bird 150 Watt', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8222, 185, 'Termaline Dummy Load', '27843', 'Termaline Dummy Load', 'Bird 150 Watt', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8223, 185, 'Termaline Dummy Load', '255', 'Termaline Dummy Load', 'Bird 300 Watt', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8224, 185, 'Termaline Dummy Load', '2352', 'Termaline Dummy Load', 'Bird 300 Watt', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8225, 185, 'Termaline Dummy Load', '271', 'Termaline Dummy Load', 'Bird 1200 Watt', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8226, 185, 'Thruline Line Selection', '12721', 'Thruline Line Selection', 'Bird -', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8227, 185, 'UHF/VHF Signal Meter BT', '5435', 'UHF/VHF Signal Meter BT', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8228, 185, 'Frequency Counter', '2052A07494', 'Frequency Counter', 'Hewlett Packard HP 5340A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8229, 185, 'Frequency Counter', '2730A2958', 'Frequency Counter', 'Hewlett Packard HP 5385A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8230, 185, 'Frequency Counter', '2730A2966', 'Frequency Counter', 'Hewlett Packard HP 5385A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8231, 185, 'Pattern Generator', 'B020619', 'Pattern Generator', 'Tektronix TSG 111', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8232, 185, 'Pattern Generator', 'B031709', 'Pattern Generator', 'Tektronix TSG 131A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8233, 185, 'Signal Generator', '2816A01837', 'Signal Generator', 'Hewlett Packard HP 8642B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8234, 185, 'Video Measurement Set', 'B040641', 'Video Measurement Set', 'Tektronix VM 700A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8235, 185, 'Distorsion meter', '3070118', 'Distorsion meter', 'Kenwood HM250', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8236, 185, 'Envelope Delay Measuring Set', 'M60994009', 'Envelope Delay Measuring Set', 'Shibasoku TD20B2', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8237, 185, 'FM Linier Detector', 'M44526', 'FM Linier Detector', 'Anritsu MS61A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8238, 185, 'Oscilloscope', 'B060145', 'Oscilloscope', 'Tektronix 456B', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8239, 185, 'Spectrum Analyzer', '78020396', 'Spectrum Analyzer', 'Chung Hang 1GM', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8240, 185, 'VNA Master', '-', 'VNA Master', 'Anritsu  MS2028C - 002', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8241, 185, 'AC/DC Clamp meter', '-', 'AC/DC Clamp meter', 'Hioki  3100', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8242, 185, 'AC/DC Clamp meter', '-', 'AC/DC Clamp meter', 'Hioki  3100', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8243, 185, 'AC/DC Clamp meter', '-', 'AC/DC Clamp meter', 'Hioki  3100', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8244, 185, 'Function Generator ', '16015', 'Function Generator ', 'Hewlett Packard -', NULL, NULL, NULL, 'BP', NULL, NULL, NULL);
INSERT INTO `tbl_alat` (`id_alat`, `id_user`, `nama_alat`, `no_seri_alat`, `type_alat`, `merek_alat`, `interval_kalibrasi_alat`, `waktu_kalibrasi_alat`, `keterangan_alat`, `kondisi_alat`, `status_alat`, `id_divisi`, `divisi`) VALUES
(8245, 185, 'Function Generator ', '2374A09426', 'Function Generator ', 'Hewlett Packard HP 3314A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8246, 185, 'Fusion Splicer', '-', 'Fusion Splicer', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8247, 185, 'Fusion Splicer', '-', 'Fusion Splicer', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8248, 185, 'S Parameter Test Set', '2729A02497', 'S Parameter Test Set', 'Hewlett Packard HP 85046A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8249, 185, 'Mini OTDR', '-', 'Mini OTDR', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8250, 185, 'Optical Light Source', '-', 'Optical Light Source', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8251, 185, 'Optical Light Source', '-', 'Optical Light Source', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8252, 185, 'Optical Power Meter', '-', 'Optical Power Meter', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8253, 185, 'Optical Power Meter', '-', 'Optical Power Meter', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8254, 185, 'OTDR', '-', 'OTDR', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8255, 185, 'OTDR', '-', 'OTDR', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8256, 185, 'Outside Plant Test Kit', '-', 'Outside Plant Test Kit', 'Exfo FBK-52', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8257, 185, 'Outside Plant Test Kit', '-', 'Outside Plant Test Kit', 'Exfo FBK-52', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8258, 185, 'Outside Plant Test Kit', '-', 'Outside Plant Test Kit', 'Exfo FBK-52', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8259, 185, 'Outside Plant Test Kit', '-', 'Outside Plant Test Kit', 'Exfo FBK-52', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8260, 185, 'SWR Meter', '2709AA10803', 'SWR Meter', 'Hewlett Packard HP 415E', NULL, NULL, NULL, 'RB', NULL, NULL, NULL),
(8261, 185, 'TV Demodulator', '863391/021', 'TV Demodulator', 'Rohde & Schwarz RS AMPS', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8262, 185, 'TV/Radio Test Receiver', 'M44426', 'TV/Radio Test Receiver', 'Anrisu MS61A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8263, 185, 'Variable Attentuator Optic', '-', 'Variable Attentuator Optic', '-', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8264, 185, 'Pemancar FM', '-', 'Pemancar FM', '100 Watt', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8265, 185, 'Selective Level Meter', '2509A01684', 'Selective Level Meter', 'Hewlett Packard HP 3586A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8490, 185, 'Insulation Tester', '-', 'Insulation Tester', 'Kyoritsu 3005A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8491, 185, 'Insulation Tester', '-', 'Insulation Tester', 'Kyoritsu 3125A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8545, 185, 'Laser Distance Meter', '-', 'Laser Distance Meter', 'Fluke 414', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8546, 185, 'Multimeter', '-', 'Multimeter', 'Fluke 189', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8547, 185, 'Multimeter', '-', 'Multimeter', 'Fluke 87-V', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(8771, 185, 'True RMS Multimeter', '16490057', 'True RMS Multimeter', 'Fluke 289', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(8996, 185, 'Attenuator Set', '-', 'Attenuator Set', 'Aeroflex Weinshcel AS-18', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(8997, 185, 'GPS', '-', 'GPS', 'Garmin GPS Map 62s', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(8998, 185, 'GPS', '-', 'GPS', 'Garmin GPS Map 62s', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(8999, 185, 'GPS', '-', 'GPS', 'Garmin 60Csx', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9000, 185, 'Laser Distance Meter', '-', 'Laser Distance Meter', 'Fluke 414', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9001, 185, 'Laser Distance Meter', '-', 'Laser Distance Meter', 'Fluke 419D', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9002, 185, 'Microwave Adapter', '-', 'Microwave Adapter', 'Agilent 8472B-001', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9003, 185, 'Multimeter', '-', 'Multimeter', 'Fluke 189', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9004, 185, 'Multimeter', '-', 'Multimeter', 'Fluke 87-V', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9005, 185, 'RF power meter', '15501', 'RF power meter', 'Boonton 4531/4532', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9006, 185, 'MXG Analog Signal Generator', 'MY50145639', 'MXG Analog Signal Generator', 'Agilent N5181A', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9007, 185, 'Oscilloscope ', '22482609', 'Oscilloscope ', 'Fluke 190 Series II 190-202', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9008, 185, 'Peak Power Sensor', '-', 'Peak Power Sensor', 'Boonton 57318', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9009, 185, 'AC/DC Clamp meter', '-', 'AC/DC Clamp meter', 'Kyoritsu 2033', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9010, 185, 'AC/DC Clamp meter', '-', 'AC/DC Clamp meter', 'Kyoritsu 2033', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9040, 185, 'Distance Laser Meter ', '-', 'Distance Laser Meter ', 'Leica Disto D5', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9041, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Krisbow KW06-305', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9042, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Krisbow KW06-305', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9043, 185, 'Handheld Spectrum Analyzer', '-', 'Handheld Spectrum Analyzer', 'Anritsu MS2724C, 9KHZ-20GHZ', NULL, NULL, NULL, '-', NULL, NULL, NULL),
(9674, 185, 'Microskop', '-', 'Microskop', 'Dinolite AM2111', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(9756, 185, 'Digital Caliper', '-', 'Digital Caliper', 'Mitutoyo 300mm', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(9758, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Keysight 34465A, 6 1/2 Digit', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(9759, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Keysight 34465A, 6 1/2 Digit', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(9760, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Keysight 34465A, 6 1/2 Digit', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(9761, 185, 'Multimeter Digital', '-', 'Multimeter Digital', 'Keysight 34465A, 6 1/2 Digit', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(9773, 185, 'ESD Tester', '-', 'ESD Tester', 'Bakon BK698A', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9774, 185, 'ESD Tester', '-', 'ESD Tester', 'Bakon BK698A', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9776, 185, 'Digital Force Gauge', '-', 'Digital Force Gauge', 'Lutron FG-5005', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9777, 185, 'Thermometer', '-', 'Thermometer', 'Hakko FG 100-4, Soldering Tester', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9778, 185, 'Thermometer', '-', 'Thermometer', 'Hakko FG 100-4, Soldering Tester', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9779, 185, 'Thermometer', '-', 'Thermometer', 'Krisbow KW0600280, Infra Red -50° to 280° C', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9833, 185, 'Insulation Tester', '-', 'Insulation Tester', 'Hioki IR 4057', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(9834, 185, 'DC Mili Ohm Meter', '-', 'DC Mili Ohm Meter', 'GW Instek GOM 802', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(9845, 185, 'Handheld Digital Microscope', '-', 'Handheld Digital Microscope', 'Dinolite AM73915 Series', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(9846, 185, 'Handheld Digital Microscope', '-', 'Handheld Digital Microscope', 'Dinolite AM73915 Series', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(9847, 185, 'Handheld Digital Microscope', '-', 'Handheld Digital Microscope', 'Dinolite AM73915 Series', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(9848, 185, 'Handheld Digital Microscope', '-', 'Handheld Digital Microscope', 'Dinolite AM73915 Series', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(9934, 185, 'Insulation Tester', NULL, 'Insulation Tester', 'Kyoritsu KEW 3128', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(9939, 185, 'MicroScanner2 Cable Verifier', '-', 'MicroScanner2 Cable Verifier', 'Fluke  Networks MS2-100', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(9957, 185, 'RF Attenuator', '-', 'RF Attenuator', 'Pasternack 30 dB 200 Watt Up to 3 GHz', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9958, 185, 'RF Attenuator', '-', 'RF Attenuator', 'Pasternack 30 dB 200 Watt Up to 3 GHz', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9959, 185, 'RF Attenuator', '-', 'RF Attenuator', 'Pasternack 30 dB 200 Watt Up to 3 GHz', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9960, 185, 'RF Attenuator', '-', 'RF Attenuator', 'Pasternack 30 dB 200 Watt Up to 3 GHz', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9961, 185, 'RF Attenuator Set', '-', 'RF Attenuator Set', 'Pasternack 2x3 dB 300 Watt', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9962, 185, 'Dummy Load', '-', 'Dummy Load', 'Pasternack 200 Watt Up to 3 GHz', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(9963, 185, 'Dummy Load', '-', 'Dummy Load', 'Pasternack 200 Watt Up to 3 GHz', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(10131, 185, 'Relay Tester', '-', 'Relay Tester', 'MRD RelayDoc BR930', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(10185, 185, 'Bonding Tester', '18-0010', 'Bonding Tester', 'Amptec Research 620LK-P5', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(10214, 185, 'Multifunction Tester', '-', 'Multifunction Tester', 'GoldTool TCT-2690', NULL, NULL, NULL, 'BP', NULL, 388, 'Information System & Cyber Security'),
(10217, 185, 'Network Auto Tester', '-', 'Network Auto Tester', 'Fluke  LRAT 2000', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10218, 185, 'Networks Net Tool', '-', 'Networks Net Tool', 'Fluke  NTS2PRO', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10219, 185, 'Cable IQ Qualification Tester', '-', 'Cable IQ Qualification Tester', 'Fluke  CIQ-100', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10220, 185, 'MicroScanner2 Cable Verifier', '-', 'MicroScanner2 Cable Verifier', 'Fluke  MS2-KIT', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10223, 185, 'Spektrum Analyzer', '1846080', 'Spektrum Analyzer', 'Anritsu S362E', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10224, 185, 'Asesoris Temperature Tracker', '-', 'Asesoris Temperature Tracker', 'Solder Star Option', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(10231, 185, 'Tracker', '-', 'Tracker', 'Huntron 3200S', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(10239, 185, 'Power Meter', '-', 'Power Meter', 'Bird 4421', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(10267, 185, 'Temperature Tracker', '-', 'Temperature Tracker', 'Solder Star Pro-6 Channel (R-0625P)', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(10282, 185, 'Tracker', '-', 'Tracker', 'Huntron 3200S', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(10283, 185, 'Microskop', '-', 'Microskop', 'Euromex DZ.5040', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(10302, 185, 'Oscilloscope', '-', 'Oscilloscope', 'Keysight DSOX4022A', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(10303, 185, 'Oscilloscope', '-', 'Oscilloscope', 'Keysight DSOX2022A', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(10311, 185, 'ScopeCorder', NULL, 'ScopeCorder', 'Yokogawa DL350', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10312, 185, 'ScopeCorder', NULL, 'ScopeCorder', 'Yokogawa DL350', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10313, 185, 'Digital Earth Tester', NULL, 'Digital Earth Tester', 'Yokogawa EY200', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10314, 185, 'Isolation Module', '-', 'Isolation Module', 'Yokogawa High-Voltage 1 MS/s 16-Bit 720268', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10315, 185, 'Isolation Module', '-', 'Isolation Module', 'Yokogawa High-Voltage 1 MS/s 16-Bit 720268', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10316, 185, 'Isolation Module', '-', 'Isolation Module', 'Yokogawa High Speed 100/MS/s 12 bit 720211', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10317, 185, 'Insulation Tester', '-', 'Insulation Tester', 'Yokogawa MY40', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10318, 185, 'Isolation Module', '-', 'Isolation Module', 'Yokogawa 4 CH 1 MS/s 16 720254', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10536, 185, 'Temperature Logger', '-', 'Temperature Logger', 'Hioki LR5011', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(10702, 185, 'Digital Humidity', '-', 'Digital Humidity', 'Lutron HT-3006A', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10703, 185, 'Imaging IR Thermometer', '-', 'Imaging IR Thermometer', 'Flir TG165', NULL, NULL, NULL, 'BP', NULL, NULL, NULL),
(10929, 185, 'Relay Doc', 'RD-TB-0064', 'Relay Doc', 'MRD BR930', NULL, NULL, NULL, 'BP', NULL, 398, 'Product Engineering'),
(11028, 185, 'Monocrystalline Solar Modul Standar', '-', 'Monocrystalline Solar Modul Standar', 'CNBM Solar Len280WP', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(11029, 185, 'Monocrystalline Solar Modul Standar', '-', 'Monocrystalline Solar Modul Standar', 'CNBM Solar Len220WP', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(11030, 185, 'Monocrystalline Solar Modul Standar', '-', 'Monocrystalline Solar Modul Standar', 'CNBM Solar Len220WP', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(11031, 185, 'Monocrystalline Solar Modul Standar', '-', 'Monocrystalline Solar Modul Standar', 'CNBM Solar Len220WP', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(11032, 185, 'Monocrystalline Solar Modul Standar', '-', 'Monocrystalline Solar Modul Standar', 'CNBM Solar Len220WP', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(11033, 185, 'Polycrystalline Solar Modul Standar', '-', 'Polycrystalline Solar Modul Standar', 'CNBM Solar Len270WP', NULL, NULL, NULL, 'BP', NULL, 399, 'Production Operation'),
(11192, 185, 'Transportation Data Loger', '-', 'Transportation Data Loger', 'Shinyei Testing Machinery DER-1000', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(11349, 185, 'Special To Type Equipment', '-', 'Special To Type Equipment', 'Aselsan', NULL, NULL, NULL, 'BT', NULL, 399, 'Production Operation'),
(11383, 185, 'OTDR', '-', 'OTDR', 'Yokogawa -', NULL, NULL, NULL, 'BP', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divisi`
--

CREATE TABLE `tbl_divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_divisi`
--

INSERT INTO `tbl_divisi` (`id_divisi`, `nama_divisi`) VALUES
(388, 'Information System & Cyber Security'),
(390, 'Quality Assurance'),
(398, 'Product Engineering'),
(399, 'Production Operation'),
(410, 'General Affairs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `nama_dokumen` varchar(500) DEFAULT NULL,
  `file_dokumen` varchar(500) DEFAULT NULL,
  `id_pengajuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dokumen`
--

INSERT INTO `tbl_dokumen` (`id_dokumen`, `nama_dokumen`, `file_dokumen`, `id_pengajuan`) VALUES
(1, 'Dokumen 1', 'Data Alat Sistem Kalibrasi.pdf', 16),
(2, 'Dokumen 2', 'Data Alat Sistem Kalibrasi - Copy.pdf', 16),
(3, 'Dokumen 3', 'Tugas.pptx', 17),
(4, 'Administrasi Umum', 'Administrasi_Umum_2021-10-06_17-00-25.jpg', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id_history` int(11) NOT NULL,
  `id_pengajuan` int(11) DEFAULT NULL,
  `keterangan_history` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kondisi`
--

CREATE TABLE `tbl_kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `nama_kondisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kondisi`
--

INSERT INTO `tbl_kondisi` (`id_kondisi`, `nama_kondisi`) VALUES
(1, 'BP (Baik Pakai)'),
(2, 'BT (Baik Tidak Dipakai)'),
(3, 'RR (Rusak Ringan)'),
(4, 'RB (Rusak Berat)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lab`
--

CREATE TABLE `tbl_lab` (
  `id_lab` int(11) NOT NULL,
  `nama_lab` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lab`
--

INSERT INTO `tbl_lab` (`id_lab`, `nama_lab`) VALUES
(1, 'Lab Manga'),
(2, 'Lab 1'),
(4, 'Lab 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `id_notif` int(11) NOT NULL,
  `notif_status` varchar(100) DEFAULT NULL,
  `notif_messages` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembatalan`
--

CREATE TABLE `tbl_pembatalan` (
  `id_pembatalan` int(11) NOT NULL,
  `id_pengajuan` int(11) DEFAULT NULL,
  `keterangan_pembatalan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembatalan`
--

INSERT INTO `tbl_pembatalan` (`id_pembatalan`, `id_pengajuan`, `keterangan_pembatalan`) VALUES
(3, 16, 'asd'),
(4, 16, 'asdasd'),
(5, 14, 'szcd'),
(6, 14, 'sdf'),
(7, 17, 'sdv'),
(8, 20, 'testing'),
(9, 18, 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_pengaju` varchar(500) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal_pengajuan` varchar(100) DEFAULT NULL,
  `selesai_pengajuan` varchar(50) DEFAULT NULL,
  `status_pengajuan` int(11) DEFAULT NULL,
  `deskripsi_pengajuan` varchar(500) DEFAULT NULL,
  `divisi_pengaju` varchar(100) DEFAULT NULL,
  `lab` int(11) DEFAULT NULL,
  `harga_lab` varchar(100) DEFAULT NULL,
  `is_available` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `nama_pengaju`, `id_user`, `tanggal_pengajuan`, `selesai_pengajuan`, `status_pengajuan`, `deskripsi_pengajuan`, `divisi_pengaju`, `lab`, `harga_lab`, `is_available`) VALUES
(7, 'Haidir', 189, '2021-10-04', NULL, 1, 'Pengajuan 1', 'General Affairs', 1, NULL, NULL),
(8, 'Haidir', 189, '2021-10-04', NULL, 1, 'Pengajuan 3', 'General Affairs', 3, NULL, NULL),
(9, 'dfsgsdfg', 189, '2021-10-04', NULL, 1, 'gdgfdg', 'General Affairs', 4, NULL, NULL),
(10, 'Testing 1', 189, '2021-10-04', NULL, 1, 'Tes', 'General Affairs', 2, NULL, NULL),
(11, 'Hadi', 189, '2021-10-04', NULL, 1, 'Pengajuan 1', 'General Affairs', 3, NULL, NULL),
(12, 'Testing', 189, '2021-10-04', NULL, 1, 'Menjadi VM MKOP BANGTEK', 'General Affairs', 1, NULL, NULL),
(13, 'Testing', 189, '2021-10-04', NULL, 0, 'tes', 'General Affairs', NULL, NULL, 0),
(14, 'Mus', 189, '2021-10-04', NULL, 5, 'keterangan', 'General Affairs', NULL, NULL, 1),
(15, 'MUS', 189, '2021-10-04', NULL, 0, 'Ket', 'General Affairs', 0, NULL, 0),
(16, 'dsfds', 189, '2021-10-04', NULL, 5, 'fsdfs', 'General Affairs', 2, '300000', 1),
(17, 'ghgdfh', 189, '2021-10-04', NULL, 5, 'dfhdfgh', 'General Affairs', NULL, NULL, 1),
(18, 'Administrasi Umum', 189, '2021-10-04', NULL, 11, 'Menjadi VM MKOP BANGTEK', '399', NULL, NULL, 1),
(19, 'Haidir', 189, '2021-10-06', NULL, 1, 'tes', '399', NULL, NULL, 1),
(20, 'Haidir', 189, '2021-10-06', NULL, 5, 'Testing', '399', 1, '100000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan_alat`
--

CREATE TABLE `tbl_pengajuan_alat` (
  `id_pengajuan_alat` int(11) NOT NULL,
  `id_pengajuan` int(11) DEFAULT NULL,
  `id_alat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuan_alat`
--

INSERT INTO `tbl_pengajuan_alat` (`id_pengajuan_alat`, `id_pengajuan`, `id_alat`) VALUES
(7, 10, 1255),
(8, 10, 1359),
(9, 10, 1362),
(10, 11, 1255),
(11, 11, 1359),
(12, 11, 1360),
(13, 11, 1361),
(14, 11, 1362),
(15, 11, 2237),
(16, 11, 5757),
(17, 14, 1255),
(18, 14, 1360),
(19, 14, 1361),
(20, 14, 2237),
(21, 14, 1255),
(22, 14, 1360),
(23, 14, 1361),
(24, 14, 2237),
(25, 14, 1255),
(26, 14, 1360),
(27, 14, 1361),
(28, 14, 2237),
(29, 15, 1255),
(30, 15, 1362),
(31, 15, 5757),
(32, 16, 1255),
(33, 16, 1359),
(34, 16, 1360),
(35, 16, 1361),
(36, 16, 1362),
(37, 16, 2237),
(38, 19, 1255),
(39, 19, 1359),
(40, 19, 1360),
(41, 20, 3219),
(42, 20, 3223);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan_lab`
--

CREATE TABLE `tbl_pengajuan_lab` (
  `id_pengajuan_lab` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `harga` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuan_lab`
--

INSERT INTO `tbl_pengajuan_lab` (`id_pengajuan_lab`, `id_pengajuan`, `id_lab`, `harga`) VALUES
(1, 16, 1, '200000'),
(2, 16, 2, '300000'),
(3, 15, 2, '400000'),
(4, 19, 1, '200000'),
(5, 20, 2, '300000'),
(6, 20, 1, '100000'),
(7, 20, 1, '300000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(100) DEFAULT NULL,
  `role_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `nama_status`, `role_status`) VALUES
(10, 'Sedang dikaji ulang / review', 'Awal'),
(11, 'Pengajuan di batalkan', 'Pembatalan'),
(12, 'Selesai', NULL),
(13, 'Sedang proses kalibrasi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `id_type` int(11) NOT NULL,
  `nama_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`id_type`, `nama_type`) VALUES
(1, 'PC Built Up'),
(2, 'Televisi LCD Besar'),
(3, 'Smart TV');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_fullname` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_phone` varchar(100) DEFAULT NULL,
  `user_divition` varchar(100) DEFAULT NULL,
  `user_account` varchar(20) DEFAULT NULL,
  `user_slug` varchar(500) DEFAULT NULL,
  `user_status` varchar(50) DEFAULT NULL,
  `isAccount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `user_password`, `user_fullname`, `user_email`, `user_phone`, `user_divition`, `user_account`, `user_slug`, `user_status`, `isAccount`) VALUES
(185, 'admin', 'c861f6de4bfff0aeaa608e85a3a659d865bc5c6f', 'Administrator', 'haidirmustofa22@gmail.com', '6285790829138', 'Tanpa Divisi', 'Aktif', 'c861f6de4bfff0aeaa608e85a3a659d865bc5c6fc861f6de4bfff0aeaa608e85a3a659d865bc5c6f', 'Admin', 1),
(189, 'haidir', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'Testing', 'haidir@smkdigitalservice.com', '085790829138', '399', 'Aktif', NULL, 'Member', 0),
(190, 'sri.wahyuni', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'Sri Wahyuni', 'haidirmustofa22@gmail.com', '085790829138', '399', 'Aktif', NULL, 'Member', NULL),
(191, 'dsfdsaf', '4c286e182bc4d1832a8739b18c19ecaf9262c37a', 'fasdfd', 'asdfghjkl@gmail.com', '085790829138', '410', 'Aktif', NULL, 'Member', NULL),
(192, 'haidir.mustofa', '4a8a9fc31dc15a4b87bb145b05db3ae0bf2333e4', 'Rutin REKINTEK', 'haidirmustofa22@gmail.com', '085790829138', '399', 'Aktif', NULL, 'Member', NULL),
(193, 'fsdfasdf', '4c86a2393d8ab56e2f21dd516fcbfbc0aec3a2c3', 'ds', 'haidirmustofa22@gmail.com', '085790829138', '390', 'Tidak Aktif', NULL, 'Admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alat`
--
ALTER TABLE `tbl_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_kondisi`
--
ALTER TABLE `tbl_kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `tbl_pembatalan`
--
ALTER TABLE `tbl_pembatalan`
  ADD PRIMARY KEY (`id_pembatalan`);

--
-- Indexes for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tbl_pengajuan_alat`
--
ALTER TABLE `tbl_pengajuan_alat`
  ADD PRIMARY KEY (`id_pengajuan_alat`);

--
-- Indexes for table `tbl_pengajuan_lab`
--
ALTER TABLE `tbl_pengajuan_lab`
  ADD PRIMARY KEY (`id_pengajuan_lab`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alat`
--
ALTER TABLE `tbl_alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11873;

--
-- AUTO_INCREMENT for table `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27519;

--
-- AUTO_INCREMENT for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kondisi`
--
ALTER TABLE `tbl_kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pembatalan`
--
ALTER TABLE `tbl_pembatalan`
  MODIFY `id_pembatalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_pengajuan_alat`
--
ALTER TABLE `tbl_pengajuan_alat`
  MODIFY `id_pengajuan_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_pengajuan_lab`
--
ALTER TABLE `tbl_pengajuan_lab`
  MODIFY `id_pengajuan_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
