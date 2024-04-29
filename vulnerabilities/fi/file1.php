<?php

$page[ 'body' ] .= "
<div class=\"body_padded\">
<h1>სერვისი: ფაილები ძიება</h1>
	<div class=\"vulnerable_code_area\">
		<h3>File 1</h3>
		<hr />
		Hello <em>" . dvwaCurrentUser() . "</em><br />
		Your IP address is: <em>{$_SERVER[ 'REMOTE_ADDR' ]}</em><br /><br />
		[<em><a href=\"?page=include.php\">back</a></em>]
	</div>

</div>\n";

?>
