<?php

$paragraph = $_GET["paragraph"];

echo $paragraph;

?>


<p>
    La lunghezza del paragrafo è: 
    <?php
        echo  strlen ($_GET['paragraph']);
    ?>
</p>