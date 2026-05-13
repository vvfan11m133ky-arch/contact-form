<?php
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
$name = $_POST["name"];
$email = $_POST["email"];
$contactType = $_POST["contact-type"];
$detail = $_POST["detail"];
