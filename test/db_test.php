<html><body>
<?php

	$connect = mysql_connect( "mysql455.db.sakura.ne.jp", "saturday-league", "mizunoe1" );
	if( $connect == false )
	{
		die("MySQL connextion error");
	}
	mysql_set_charset( "utf8" );
	mysql_select_db( "naonosekicho" );

	$sql  = " SELECT * FROM TEAM";
	$res = mysql_query( $sql );
	while( $row = mysql_fetch_array( $res ) )
	{
		print("<p>" . $row["NAME"] . "</p>");
		//print("<p>" . $row["message"] . "</p>");
	}
	mysql_free_result($res);
	mysql_close();
?>
</body></html>
