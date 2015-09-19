# Simple PHP Framework
This project is a super-simplistic framework that serves content from PHP files. It is meant as a learning tool for beginning web developers.

## Using the Framework
Use the following steps to use the framework on your local machine or web server:
- Download this project into the document root of your web server
- Change *config/app.config.php* to include your website or company name
- Add the pages of your site as PHP files to the *pages* directory (*pages/home.php* is provided for you)
- Start your web server
- Visit *localhost/simplephp/pagename* in a browser to see your site

## Fragments
To update the navigation, header or footer, edit the corresponding files in the *fragments* directory.

## Styling
All static assets (e.g. images, videos, CSS, JavaScript, fonts, etc) should be placed in the *assets* directory. Add your own styling to *app.css* and your own JavaScript to *app.js*