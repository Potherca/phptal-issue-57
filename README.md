# PHPTAL issue #57

## Introduction

This repository contains code to accompany [issue #57](https://github.com/phptal/PHPTAL/issues/57)

A working version of this code is [hosted on Heroku](https://phptal-issue-57.herokuapp.com/).

The code in this repositoy has been found to work under both PHP 5.6 and PHP7.

## Development

In order to run or edit this code locally, run the commands below.

This assumes there is a version of [Composer](https://getcomposer.org/) installed globally.

    git clone https://github.com/Potherca/phptal-issue-57.git
    cd phptal-issue-57
    composer install
    php -S localhost:8080 -t web

This will clone the code in this repository, run composer to install the projects' dependency and start PHP's native HTTP server.

The example can now be opened in the browser at [http://localhost:8080](http://localhost:8080).

## License

The code in this repository has been licensed under the [GPL-3.0+ License](./LICENSE)