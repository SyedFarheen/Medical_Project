<?php

include_once 'config.php';

$_SESSION = array();

session_destroy();

header('Location: signin.php');
