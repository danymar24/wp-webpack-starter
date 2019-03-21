# WP Theme Boilerplate using Webpack

## Configuration

To setup the database change the settings on wp-config.php (lines 21-38):
```php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-starter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

```

## Build Setup

``` bash
# cd into wp-content/themes/themes/wp-boiler-webpack
# change proxy location for browsersync in webpack.config.js file
# on line 38, change proxy: "localhost/site-path"
# CHANGE LINE BELOW
proxy: 'localhost/FOLDERNAME',

# install dependencies
npm install

# build public files
npm run build

# watch files with BrowserSync
npm run watch
