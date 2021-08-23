<?php
    $parameters = array();
    $number = 0;
    if ($_SERVER['REQUEST_METHOD'] == "POST")
        $parameters = $_POST;
    else
        $parameters = $_GET;

    foreach($parameters as $parameterName=>$parameterValue)
    {
    
        echo "<h3>" . $number . "         " . $parameterName . ': ' . $parameterValue . "</h3>" . '<br>';
        $number = $number + 1;
    }
?>