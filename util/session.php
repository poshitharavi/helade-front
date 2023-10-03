<?php
session_start();
$sessionAvailable = false;
if (isset($_SESSION['heladeUserId'])) {
    $sessionAvailable = true;
}