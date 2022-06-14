<?php
$config_file = "config";

//if config file not exist; create
if(!file_exists($config_file))
{
	$fh = fopen($config_file, "w");
	if(!$fh)
	{
		die("cannot create file, try manually creating a file named <b>config</b> in this directory.");
	}
	fclose($fh);

	die("config file not found.<br/>creating config file<br/>file created<br/><a href=\"install.php\">Try the install again</a>");
}

//check file perms
if(!is_writable($config_file))
{
	die("please change permissions of config file to ");
}

if($_POST)
{
	$fh = fopen($config_file, "w");
	
	fwrite($fh, json_encode([
		"db_host" => $_POST['db_host'],
		"db_user" => $_POST['db_user'],
		"db_pass" => $_POST['db_pass'],
		"db_db" => $_POST['db_db'],
		"cap_sec_key" => $_POST['cap_sec_key'],
		"cap_site_key" => $_POST['cap_site_key']
	]));

	fclose($fh);

	include("Db.class.php");
	$db = new Db();
	$db->installTables();

	die("config file created. please delete this file (install.php).");
}
?>

<style>
body
{
	background-color: #000;
}

form section
{
    background-color: #ccc;
    border-radius: 1rem;
    padding: 1rem;
}

p.section_header
{
    border-bottom: 0.3rem solid #000;
    font-size: larger;
    color: #c00;
}

form section p label
{
	display: table;
}
</style>

<form method="post">
	<section>
		<p class="section_header">Database Configuration</p>
		<p>
			<label for="db_host">Database Host</label>
			<input type="text" id="db_host" name="db_host" placeholder="127.0.0.1" required />
		</p>
		
		<p>
			<label for="db_db">Database Name</label>
			<input type="text" id="db_db" name="db_db" placeholder="doxbin" required />
		</p>
		
		<p>
			<label for="db_user">Database User</label>
			<input type="text" id="db_user" name="db_user" placeholder="username" required />
		</p>
		
		<p>
			<label for="db_pass">Database Password</label>
			<input type="text" id="db_pass" name="db_pass" placeholder="password" required />
		</p>

		<p class="section_header">Captcha Configuration</p>
		<p><i>This is not required.</i></p>
		<p>
			<label for="cap_site_key">Google ReCaptcha Site Key</label>
			<input type="text" id="cap_site_key" name="cap_site_key" />
		</p>
		<p>
			<label for="cap_sec_key">Google ReCaptcha Secret Key</label>
			<input type="text" id="cap_sec_key" name="cap_sec_key" />
		</p>

		<p><button type="submit">Save Settings</button></p>
	</section>
</form>