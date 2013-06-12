<?

function db_connect()
{
	$result = mysql_connect('localhost', 'root', 'pass');
	if (!$result)
	{
		echo "Cannot connect";
   		return false;
	}

	$result = mysql_select_db("mysql");
	if (!$result)
	{
		echo "No database";
		return false;
	}
	//echo "it worked!";
	return $result;
}

?>
