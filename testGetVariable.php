<?php
if (isset($_GET["devName"])){
    echo "<h2>Developer Name: ". $_GET["devName"]. "</h2>";
}

if (isset($_GET["skill"])){
    echo "<h2>Skill: ". $_GET["skill"]."</h2>";
}
?>