<?php
session_start();
echo "username is ". $_SESSION['username'];
echo "email is ". $_SESSION['email'];
?>