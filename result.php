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
    $censoredParagraph = str_replace($censored, '***', $paragraph);
    $censoredParagraphLength = strlen($censoredParagraph);
?>

<p>
    <?php
    echo $censoredParagraph;
    ?>
</p>

<p>
    La lunghezza del paragrafo censurato è: 
    <?php
        echo $censoredParagraphLength;
    ?>
    caratteri
</p>
