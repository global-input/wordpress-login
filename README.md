# wordpress-globalinput-plugin

This repository contains the source code for the wordpress plugin to make your wordpress website support the [Global Input App](https://globalinput.co.uk/), so you can use your mobile to signing in on your website via a browser on your computer.

### Installation
download the wordpress-globalinput-plugin.zip, you can generate the zip file yourself from the source by running the command
  ```
    ./package.sh
  ```
Then in Plugins pages of your WordPress Admin console, click on "Add New" button, then click on "Upload Plugin", and then click on "Choose file". Finally select the zip to upload to your wordpress, and then activate the plugin.

### How to Use
1. Install the Global Input App[https://globalinput.co.uk/global-input-app/app] on your mobile.

2. Go to the login page <your-website-url>/wp-login.php
you will see a QR Code displayed above the Login Form

3. Scan the QR Code with your Global Input App.
  On your mobile, the login form will be displayed. When you type your credentials on your mobile, the form on your computer will also be filled in automatically.

4. Press "Save" button on your mobile to save it into the app.

5.  Logged out and try again the process from step 2.

6. This time "Matched" button will be displayed at the bottom of your mobile screen meaning the credential required is found.
7. Press the "Matched" button, select the data item, and press the "Select" button.
  this will send the selected data to the login form being displayed on your computer.
8. Press "Login" button on your mobile to log into your word press.
