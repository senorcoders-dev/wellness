# sc_starter_theme
Senorcoders wordpress starter theme

## Getting Started

Install Grunt globally 

```
sudo npm install -g grunt-cli
```

Run NPM install

```
npm install
```

setup wp-config.php


## Code Guide

Inside of senorcoder theme this are the core folders

* inc - We are going to split the functions.php in several files under this directory
* template-parts - Here we are going to have all the parts of the site we can reuse (search forms, content layouts)
* src - Grunt works over this folder for compile and minify sass and js files 
* src/scss - Theme style
* src/js - Theme custom js file