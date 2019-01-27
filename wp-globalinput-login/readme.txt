=== WP GlobalInput Login ===
Contributors: hewzulla, DrTech76
Tags: Global Input App, Mobile Sign In
Requires at least: 3.6
Tested up to: 5.0.2
Requires PHP: 4.0
Stable tag: trunk
License: MIT (Expat)
License URI: https://opensource.org/licenses/MIT

The plugin enables the WordPress website to support logging in, safely and securely, by scanning a QR code, using the Global Input App on your mobile.


== Description ==
"WP GlobalInput Login" plugin, enables the WordPress website to support the Global Input App(for more details see the GitHub repo at https://github.com/global-input/wordpress-login or at https://globalinput.co.uk). After activating the plugin, you should see a QR code on top of the sign in form. When you scan the QR Code with Global Input App, on your mobile device, you can type on your mobile to fill in the Sign In form on your computer. After saving the form data for the first time use, next time you can speed up the login process by selecting the data to fill in the form.
That would allow you to set a very strong password to protect your website from password hacking and still can sign in, securely and quickly using your mobile.

== Installation ==
There are no particular requirements.

= Manual Installation =

Download the plugin.zip either from the WordPress directory or the GitHub repo (https://github.com/global-input/wordpress-login).

Then install the plugin following one the two ways, as explained below:

A) Manual upload of the files
    1) Extract and upload the files from the zip into a directory inside your '/wp-content/plugins' directory. You can either choose your own name for that directory or let it create one using the name of the zip file.
    2) Log in to the WordPress admin dashboard and navigate to the "Plugins" page.
    3) Find the "WP GlobalInput Login" plugin in the list and click on the 'Activate' link for it.
    4) Once activated the plugin would be readily operational, no further setup is needed.


B) Upload of the files using the 'Add new' action of the 'Plugins' list
    1) Log in to the WordPress admin dashboard and navigate to the "Plugins" page.
    2) Click on the "Add New", and then on "Upload Plugin" buttons.
    3) Click on the "Choose file" button, navigate to the plugin zip file on your disk, select it and confirm, then click the "Install" button.
    4) Click on the "Activate Plugin" link.
    5) Once activated the plugin would be readily operational, no further setup is needed.


= Install from Wordpress Plugins directory =
1) Log in to the WordPress admin dashboard and navigate to the "Plugins" page.
2) Click on the "Add New"
3) Find the plugin name "WP GlobalInput Login" in the list and click its "Install Now" button.
4) Click on the "Activate Plugin" link.
5) Once activated the plugin would be readily operational, no further setup is needed.


== Frequently Asked Questions ==

= How to Use It =

1) Install the Global Input App on your mobile (https://globalinput.co.uk).
2) Load the login page /wp-login.php, which should display a QR Code above the Login Form
3) Scan the QR Code with your Global Input App.
4) Type your credentials on your mobile, and watch the form on your computer being filled.
5) Press the "Save" button on your mobile to save the credentials into your app.
6) Logged out and try again the process from step 2.
7) This time the "Matched" button will be displayed at the bottom of your mobile screen meaning that the credential data required is found.
8) Press the "Matched" button, select the data item, and press the "Select" button. This will send the selected data to the login form on your computer.
9) Press "Login" button on your mobile to sign in.


== Screenshots ==
1. login screen
2. global input app

== Changelog ==

= 1.2 =
* Upgraded depdencies

= 1.1 =
* Load Balancing on WebSocket server nodes to improve performance

= 1.0 =
* Initial plugin introduction

== Upgrade Notice ==

= 1.2 =
* Upgraded depdencies.

= 1.1 =
* Load Balancing on WebSocket server nodes to improve performance


= 1.0 =
* Initial plugin introduction
