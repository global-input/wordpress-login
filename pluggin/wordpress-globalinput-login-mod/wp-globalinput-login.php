<?php
/*
Plugin Name: GlobalInput Log in for Wordpress
Author: https://github.com/global-input/wordpress-login, Mod: 16.07.2018 DrTech76, making it self-installable
Description: Update of the GlobalInput Log in for Wordpress(https://github.com/global-input/wordpress-login) plugin, so it does not require manuyal wp-login replacement/editing, but it's self-installable through the wp dashboard

Version: Not Available
*/

class Wordpress_GlobalInput_LogIn
{
	private $templatesDir="";
	private $className="";
	private $template="";
	
	public function __construct($menu=null)
	{
		$this->templatesDir=dirname(__FILE__)."/templates";
		$this->className=get_class($this);
		$this->template=$this->templatesDir."/".$this->className."_includes.php";
		if(!session_id())
		{
			session_start();
		}

		if(!is_admin())
		{
			if(!is_user_logged_in())
			{
				add_action("login_head",array($this,"add_js"),1,10000);
			}
		}
	}
	
	public function __destruct(){}
	
	public function activate(){}
	
	public function deactivate(){}
	
	public function add_js()
	{
		if(file_exists($this->template))
		{
			ob_start();
			include($this->template);
			$js_includes=ob_get_clean();
			echo $js_includes;
			wp_enqueue_script($this->className."_login",plugins_url("js/".$this->className.".js",__FILE__),array("jquery"),null,true);
		}
	}
}

function Wordpress_GlobalInput_LogIn_load()
{
	if(!isset($GLOBALS["Wordpress_GlobalInput_LogIn"]))
	{
		$GLOBALS["Wordpress_GlobalInput_LogIn"] = new Wordpress_GlobalInput_LogIn();
	}
}

add_action("init",'Wordpress_GlobalInput_LogIn_load',1);

function Wordpress_GlobalInput_LogIn_activate()
{
	$o=new Wordpress_GlobalInput_LogIn();
	$o->activate();
}
register_activation_hook(__FILE__, "Wordpress_GlobalInput_LogIn_activate");

function Wordpress_GlobalInput_LogIn_deactivate()
{
	$o=new Wordpress_GlobalInput_LogIn();
	$o->deactivate();
}
register_deactivation_hook(__FILE__, "Wordpress_GlobalInput_LogIn_deactivate");
?>