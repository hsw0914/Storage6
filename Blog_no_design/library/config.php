<?php
// 세션 시작
session_start();
mb_internal_encoding('UTF-8');

// 필수 파일 로드
require('function.php');
require('db.php');

// 변수 지정
$isUser = !!v($_SESSION['idx']);
$db = new DB('mysql:host=localhost;dbname=20170401;charset=utf8', 'root', '');