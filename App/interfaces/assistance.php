<?php 
error_reporting (0);		
?>
<script src="js/functions-actions-petition.js"></script>
<div>
<div id="form-action">
<div id="cont-title">
<h1>Registro de Asistencia</h1>
</div>
<form action="asset/sendCrud.php"  class="forms"id="form-assistance" method="post">

<input type="number" id="identificacion"name="identificacion"/>
<?php

date_default_timezone_set ("America/Bogota");
?>
<input name="fecha" type="hidden" id="fecha" value="<?PHP echo date("Y-m-d"); ?>">
<input name="hora" type="hidden" id="hora" value="<?PHP echo date("H"); ?>">
<input type="hidden" name="send-assistance" value="this"/>
<input type="submit" id="send-assistance" name="send-assistance"/> 

<div id="response"></div>

</form>
</div>
</div>





