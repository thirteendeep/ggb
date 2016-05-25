# Groots
> A frontend framework development starter-kit for Globalia projects

## Getting started
This starter-kit requires that you already have installed [Node.js](http://nodejs.org/), [Bower](http://bower.io/) and [Gulp](http://gulpjs.com/) globally on your local environment.

In Terminal, navigate to your project root directory and execute:

```shell
npm install
```

It will run *bower install* then *npm install* and finally *gulp initial*, to setup the whole package into your current directory.

If you are on a development or production server, you should run npm install with the security privileges of the user you're currently configuring:

```shell
sudo -u user npm install
```

If you are on a production server, you should add the production tag to npm install or any gulp commands.

```shell
npm install --prod
```

## Server dependencies

You will need the 2 following packages installed on your server:

- libjpeg62-dev (https://packages.debian.org/sid/libjpeg62-dev)

```shell
sudo apt-get install libjpeg62-dev
```

- libpng-dev (http://www.libpng.org/pub/png/libpng.html)

```shell
sudo apt-get install libpng-dev
```

## Build system

#### Configs

In build config folder you'll find three config files.

- `core.js` this is the main config file, it shouldn't be changed
- `project.js` this is the project config file, it is set globally for every project
- `user.default.js` this is the user specific options, you can duplicate this file and rename it `user.js` then modify it as you want (this file is ignored by git)

#### Bundle Tasks

Command&nbsp;line       | Description
----------------------- | -------------------------------------------
`gulp`                  | Default tasks, used for development
`gulp build`            | Build project, do default tasks but also concatene vendor files, download google fonts if needed and generate gui files and favicons
`gulp watch`            | Watch for modifications in your project files (CSS, JS, images, fonts and gui files) and run adequate single task
`gulp live`             | Watch files and enable livereload (you need to have [livereload browser extension](http://livereload.com/extensions/))
