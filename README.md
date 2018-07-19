# wordpress-globalinput-plugin

This repository contains the source code for a WordPress plugin, which enables the WordPress website to support the [Global Input App](https://globalinput.co.uk/global-input-app/app). After activating the plugin, you should see a QR code on top of the sign in form. When
you scan the QR Code with your [Global Input App](https://globalinput.co.uk/global-input-app/app), you can type on your mobile to fill in the Sign In form on your computer. After saving the form data on the first time use, next time you can speed up the login process by selecting the data to fill in the form.

You can now set a very strong password to protect your website from password hacking and still can login very quickly using your mobile.  


### Installation
This plugin is available in the WordPress official plugin directory as "WP GlobalInput Login", you can search "GlobalInput Login" in the plugin page to locate the plugin.

You can also download the [WordPress-global input-plugin.zip](https://github.com/global-input/wordpress-login/blob/master/wp-globalinput-login.zip), or you can generate the zip file yourself from the source files by running the following command after cloning the repository on your local disk.
  ```
    ./package.sh
  ```
Above script contains a single line zip command to re-create the ```wp-globalinput-login.zip``` file from the files in the ```wp-globalinput-login``` folder.

Then install the the plugin you have built yourself via the "Plugins" page on your WordPress Admin console: (1)click on the "Add New" button. (2) Click on the "Upload Plugin", (3) Click on the "Choose file" button. (4)Select the zip

After activating the plugin, you can try it by follow the following steps.

### How to Use It
1. Install the [Global Input App](https://globalinput.co.uk/global-input-app/app) on your mobile.

2. Load the login page <your-website-url>/wp-login.php, which should display a QR Code above the the Login Form

3. Scan the QR Code with your Global Input App.

4. Type your credentials on your mobile, and watch the form on your computer being filled.

5. Press the "Save" button on your mobile to save the credentials into your app.

5.  Logged out and try again the process from step 2.

6. This time the "Matched" button will be displayed at the bottom of your mobile screen meaning that the credential data required is found.

7. Press the "Matched" button, select the data item, and press the "Select" button. This will send the selected data to the login form on your computer.

8. Press "Login" button on your mobile to sign in.
