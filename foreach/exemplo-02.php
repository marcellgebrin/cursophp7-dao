<form>

	<input type="text" name="nome">
	<input type="data" name="nascimento">
	<input type="submit" value="ok">

</form>
<?php

if (isset($_GET)) {

    foreach ($_GET as $key => $value) {
    	   
    	echo "Nome do campo: " . $key . "<br>";
	    echo "Valor do campo: " . $value;
	    echo "<hr>";

    }

}

?>	
