<?php
function sayHelloLater(){
    return "This is return";
}

function sayGoodbyeNow(){
    echo "This is echo <hr>";
}

$hello = sayHelloLater(); // "Hello" returned and stored in $hello 
$goodbye = sayGoodbyeNow(); // "Goodbye" is echo'ed and nothing is returned

echo $hello; // "Hello" is echo'ed
echo $goodbye; // nothing is echo'ed

echo "<hr>";
echo $goodbye; // It has nothig output value, because its already blank

?>
