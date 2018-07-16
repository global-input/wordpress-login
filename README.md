# wordpress-globalinput-plugin

This repository contains the source code for the WordPress plugin to make your WordPress website support the [Global Input App](https://globalinput.co.uk/), so you can use your mobile to sign in on your website via a browser on your computer.

### Installation
download the [WordPress-global input-plugin.zip](https://github.com/global-input/wordpress-login/blob/master/wordpress-globalinput-plugin.zip), or you can generate the zip file yourself from the source by running the following command
  ```
    ./package.sh
  ```
Above command re-create the ```wordpress-global-input-plugin.zip``` file from the files in the ```wordpress-globalinput-plugin``` folder.

Then in Plugins page of your WordPress Admin console, click on the "Add New" button, then click on the "Upload Plugin", and then click on the "Choose file" button. Finally select the zip to upload it to your WordPress instance, and then activate the plugin.

### How to Use It
1. Install the Global Input App[https://globalinput.co.uk/global-input-app/app] on your mobile.

2. Go to the login page <your-website-url>/wp-login.php
you will see a QR Code displayed above the Login Form

3. Scan the QR Code with your Global Input App.
  On your mobile, the login form will be displayed. When you type your credentials on your mobile, the form on your computer will also be filled in automatically.

4. Press the "Save" button on your mobile to save it into the app.

5.  Logged out and try again the process from step 2.

6. This time the "Matched" button will be displayed at the bottom of your mobile screen meaning the credential required is found.
7. Press the "Matched" button, select the data item, and press the "Select" button.
  this will send the selected data to the login form being displayed on your computer.
8. Press "Login" button on your mobile to log into your word press.
