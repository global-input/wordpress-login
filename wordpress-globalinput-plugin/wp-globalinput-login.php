<?php
/*
Plugin Name: Wordpress Log-in with Global Input App
Plugin URI: https://github.com/global-input/wordpress-login
Description: Safe Wordpress Log-in through GlobalInput App. For more details see the GitHub repo at https://github.com/global-input/wordpress-login or at https://globalinput.co.uk
Version: 1.0
Author: Iterative Solution Limited
Author URI: https://iterativesolution.co.uk/
License:     MIT (Expat)
License URI:  https://opensource.org/licenses/MIT

Copyright 2018 Iterative Solution Limited

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

class Wordpress_GlobalInput_LogIn
{
	private $templatesDir="";
	private $className="";
	private $template="";

	public function __construct($menu=null)
	{
		$this->templatesDir=dirname(__FILE__)."/assets/templates";
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
			wp_enqueue_script($this->className."_login",plugins_url("assets/js/".$this->className.".js",__FILE__),array("jquery"),null,true);
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
