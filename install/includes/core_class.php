<?php

class Core {

	// Function to validate the post data
	function validate_post($data)
	{
		// valid email address?
		if ( ! filter_var($data['email'], FILTER_VALIDATE_EMAIL))
		{
		     return FALSE;
		}

		/* Validating the hostname, the database name and the username. The password is optional. */
		return !empty($data['hostname']) && !empty($data['password_admin']) && !empty($data['username']) && !empty($data['database']) && !empty($data['base_url']);
	}

	// Function to show an error
	function show_message($type,$message)
	{
		return $message;
	}

	// Function to write the config file
	function write_config($data)
	{
		// Return value
		$return = FALSE;

		// database.php path
		$database_template 	= 'config/database.php';
		$database_output 	= '../application/config/database.php';

		// config.php path
		$config_template = 'config/config.php';
		$config_output = '../application/config/config.php';

		// index.php path
		$index_template = 'config/index.php';
		$index_output = '../index.php';

		// Open database file
		$database_file = file_get_contents($database_template);

		$database_new  = str_replace("%HOSTNAME%", $data['hostname'], $database_file);
		$database_new  = str_replace("%USERNAME%", $data['username'], $database_new);
		$database_new  = str_replace("%PASSWORD%", $data['password'], $database_new);
		$database_new  = str_replace("%DATABASE%", $data['database'], $database_new);

		// Write the new database.php file
		$database_handle = fopen($database_output, 'w+');

		// Chmod the file, in case the user forgot
		@chmod($database_output, 0777);

		// Verify file permissions
		if (is_writable($database_output))
		{
			// Write the file
			if (fwrite($database_handle, $database_new))
			{
				$return = TRUE;
			}
			else
			{
				$return = FALSE;
			}
		}
		else
		{
			$return = FALSE;
		}

		// Chmod the file, in case the user forgot
		@chmod($database_output, 0644);

		// Open config file
		$config_file = file_get_contents($config_template);

		$config_new  = str_replace("%BASE_URL%", $data['base_url'], $config_file);

		// Write the new config.php file
		$config_handle = fopen($config_output, 'w+');

		// Chmod the file, in case the user forgot
		@chmod($config_output, 0777);

		// Verify file permissions
		if (is_writable($config_output))
		{
			// Write the file
			if (fwrite($config_handle, $config_new))
			{
				$return = TRUE;
			}
			else
			{
				$return = FALSE;
			}
		}
		else
		{
			$return = FALSE;
		}

		// Chmod the file, in case the user forgot
		@chmod($config_output, 0644);

		// Open index file
		$index_new = file_get_contents($index_template);

		// Write the new index.php file
		$index_handle = fopen($index_output, 'w+');

		// Chmod the file, in case the user forgot
		@chmod($index_output, 0777);

		// Verify file permissions
		if (is_writable($index_output))
		{
			// Write the file
			if (fwrite($index_handle, $index_new))
			{
				$return = TRUE;
			}
			else
			{
				$return = FALSE;
			}
		}
		else
		{
			$return = FALSE;
		}

		// Chmod the file, in case the user forgot
		@chmod($index_output, 0644);

		return $return;
	}
}