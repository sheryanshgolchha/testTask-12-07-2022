<html>
<body>
	<h1>Welcome to task seven</h1>
	<p>Summarized price of all active attached products</p>
	<?php
		foreach($data as $d){
			echo $d->name.' - '.$d->total.'<br>';
		}
	?>
</body>
</html>