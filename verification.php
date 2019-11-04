<?php

session_start();

$_SESSION['name'] = $_POST['loginname'];

header('location:index.php');