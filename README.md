# WP Theme Boilerplate using Webpack

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
