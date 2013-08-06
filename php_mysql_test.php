<html>
	<body>
		<?php
			$link = mysql_connect('localhost','root','cwkjsw80');
			mysql_select_db('opentutorials');
			$result = mysql_query('SELECT * from topic');
			echo mysql_result($result,1);
		?>
	</body>
</html>