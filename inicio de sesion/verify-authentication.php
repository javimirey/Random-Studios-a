<?php
  session_start();
  if (!isset($_SESSION['email'])) {
    header('location: inicio de sesion:html');
    exit();
  }
?>