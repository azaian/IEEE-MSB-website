<?php

/**
* main class that contain common functions
*/

// vars of data base



//data base class


class classes
{

	protected $database; //data base object




	protected function connect_db()
	{
		try
			{
				$this->database= new database();
			}
		catch(Exception $exc)
			{
					echo $exc->getmessage();
			}
	}


	protected function close_db()
{
	$this->database->close();
}
}





?>