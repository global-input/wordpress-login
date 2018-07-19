<?php
/*
Plugin Name: WP GlobalInput Login
Plugin URI: https://github.com/global-input/wordpress-login
Description: This enables the WordPress website to support the Global Input App (https://globalinput.co.uk/global-input-app/app). After activating the plugin, you should be able to see a QR code on top of the sign in form. When you scan the QR Code with your Global Input App, you can type on your mobile to fill in the Sign In form on your computer. After saving the form data upon the first time use, next time you can speed up the login process by selecting the data to fill in the form. This would allow you to set a very strong password to protect your website from password hacking and still can sign in securely and speedily using your mobile.
Version: 1.0.0
Author: Iterative Solution Limited
Author URI: https://iterativesolution.co.uk/
License:     MIT (Expat)
License URI:  https://opensource.org/licenses/MIT

Copyright 2018 Iterative Solution Limited

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

class IterativeSolution_GlobalInput_WPLogIn
{
	private $className="";
	public function __construct($menu=null)
	{
		$this->className=get_class($this);
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
		wp_enqueue_script($this->className."_qr",plugins_url("assets/js/qrcode.min.js",__FILE__),array("jquery"),null,false);
		wp_enqueue_script($this->className."_globalinputmessage",plugins_url("assets/js/globalinputmessage.min.js",__FILE__),array("jquery"),null,false);
		wp_enqueue_script($this->className."_login",plugins_url("assets/js/GlobalInput_WPLogIn.js",__FILE__),array("jquery"),null,true);
	}
}

function IterativeSolution_GlobalInput_WPLogIn_load()
{
	if(!isset($GLOBALS["IterativeSolution_GlobalInput_WPLogIn"]))
	{
		$GLOBALS["IterativeSolution_GlobalInput_WPLogIn"] = new IterativeSolution_GlobalInput_WPLogIn();
	}
}

add_action("init",'IterativeSolution_GlobalInput_WPLogIn_load',1);

function IterativeSolution_GlobalInput_WPLogIn_activate()
{
	$o=new IterativeSolution_GlobalInput_WPLogIn();
	$o->activate();
}
register_activation_hook(__FILE__, "IterativeSolution_GlobalInput_WPLogIn_activate");

function IterativeSolution_GlobalInput_WPLogIn_deactivate()
{
	$o=new IterativeSolution_GlobalInput_WPLogIn();
	$o->deactivate();
}
register_deactivation_hook(__FILE__, "IterativeSolution_GlobalInput_WPLogIn_deactivate");
?>
