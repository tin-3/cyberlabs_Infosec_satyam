<?php

session_start();

header("location:home_.php");

session_unset();
session_destroy();

?>