<?php
/**
 * A multiple environment handler for Codeigniter.
 *
 * @author Chris Santala <csantala@gmail.com>
 *
 * Configuration
 * 1. place this file in application/config
 * 2. add require('master_config.php'); to application/config/config.php and application/config/database.php
 * 2.1 make the following changes to database.php:
$db['default']['hostname'] = $config['dbhostname'];
$db['default']['username'] = $config['dbusername'];
$db['default']['password'] = $config['dbpassword'];
$db['default']['database'] = $config['dbname'];
 * 3. set production, staging, and local domains below.
 * 4. set database variables for each environment.
 *
 */

# ALL ENVIRONMENTS
# set variables here to span all environments.


# PRODUCTION ENVIRONMENT
if(strpos($_SERVER['SERVER_NAME'], '[domain]') === 0) {

	# env name
	$config['env'] = 'production';

	# database settings for production
	$config['dbhostname']	= "";
	$config['dbusername']	= "";
	$config['dbpassword']	= "";
	$config['dbname']	= "";

	# suppress all errors
	error_reporting(0);

	# STAGING ENVIRONMENT AS SUBDIRECTORY OF PRODUCTION
	# good for using the same SSL key as production
	if (strpos($_SERVER['REQUEST_URI'], '[path]') === 0) {

		# env name
		$config['env']	= 'altstaging';

		# database settings for staging
		$config['dbhostname']	= "";
		$config['dbusername']	= "";
		$config['dbpassword']	= "";
		$config['dbname']	= "";

		# suppress all errors
		error_reporting(0);
	}
}
# STAGING ENVIRONMENT
elseif (strpos($_SERVER['SERVER_NAME'], '[staging domain]') === 0) {

	$config['env']	= 'staging';

	# database settings for staging
	$config['dbhostname']	= "";
	$config['dbusername']	= "";
	$config['dbpassword']	= "";
	$config['dbname']	= "";

	# report all errors
	error_reporting(E_ALL);
}
# LOCAL ENVIRONMENT
elseif (strpos($_SERVER['SERVER_NAME'], '[dev domain]') === 0) {

	# env name
	$config['env']	= 'local';

	# database settings for local
	$config['dbhostname']	= "";
	$config['dbusername']	= "";
	$config['dbpassword']	= "";
	$config['dbname']	= "";

	# report all errors
	error_reporting(E_ALL);
}
else die('Please set server location in system/application/config/master_config.php. Currently at: '.$_SERVER['SERVER_NAME']);