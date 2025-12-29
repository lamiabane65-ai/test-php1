<?php
if (!isset($page)) {
    $page = "home"; 
}
require_once __DIR__ ."/templates/header.php";
require_once __DIR__."/controllers/".$page.".php";
require_once __DIR__ ."/templates/footer.php";
?>