<?php

session_start();

$_COOKIE = [null];
$_SESSION = [null];

header('location:index.php');
