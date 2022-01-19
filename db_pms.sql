-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/

-- Host: 127.0.0.1
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

-- Database: `db_pms`
-- Table structure for table `tbl_users`

CREATE TABLE `tbl_users` (
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `phone` int(10) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;