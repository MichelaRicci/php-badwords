<?php

$paragraph = $_GET["paragraph"];
$censored = $_GET["censored"];

?>

<p>
    <?php
    echo $paragraph;
    ?>
</p>


<p>
    La lunghezza del paragrafo è: 
    <?php
        echo strlen ($_GET['paragraph']);
    ?>
    caratteri
</p>


<?php 
    $censored = str_replace($censored, '***', $paragraph);
    echo $censored;
?>

