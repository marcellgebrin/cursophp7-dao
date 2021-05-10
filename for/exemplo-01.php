<?php

for ($i = 0; $i <= 5000; $i+=5){
    if ($i > 200 and $i < 800) continue;
    //esse break se executado, sai do for e vai executar a linha 10
    if ($i === 900) break;

	echo $i . "<br>";
}

?>
