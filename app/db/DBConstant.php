<?php
namespace shareimage\db;

//MySql
final class DBConstant
{
    //***************************** 连接数据库 *****************************
    const SERVER_NAME = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
//    const USERNAME = "zjwdb_6199004";
//    const PASSWORD = "Zj123456";

    //***************************** 数据库 *****************************
    const DB = "shareimage";
    const IS_DB_EXIST = "drop database if exists " . DB;
    const CREATE_DB = "create database " . DB;
    const USE_DB = "use " . DB;

    //***************************** 数据库表 *****************************
    const IS_TABLE_EXIST = "drop table if exists ";
    const TABLE_USER = "User";
    const TABLE_IMAGE = "Iamge";

    const TABLE_USER_CR = "CREATE TABLE User (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
    )";

    const TABLE_IMAGE_CR = "CREATE TABLE Iamge (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    path VARCHAR(30) NOT NULL,
    data VARCHAR(30) NOT NULL
    )";

    // INSERT INTO USER (username,PASSWORD) VALUES ("kele","123"), ("wang","234")
    // DELETE FROM USER WHERE id=7;
    // UPDATE USER SET username="kele" WHERE id=8


    //***************************** 类型 *****************************
    const INSERT = "1";
    const UPDATE = "2";
    const DELETE = "3";
}

?>