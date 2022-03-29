# Chloe Bonifacio's Portfolio

Version 1.0 of my personal portfolio built with Laravel. Project currently only has the front-end code of the site, without any functionalities.

## Screenshots

![App Screenshot](https://chloebonifacio.000webhostapp.com/images/portfolioMockup.png)

## Built With

- Laravel 7
- HTML
- CSS
- Bootstrap 5

## Features

- Fully responsive
- Styled with Bootstrap and CSS with easy to customize colors
- Code is used blade templating for layout

## Installation

You can get a copy of the code by:
- Downloading the zip
- Git Clone

```bash
    git clone <url-of-repo> <your-folder-name>
```

## Prerequisites

Before being able to run the project ensure that you have the following:
- PHP 7.2.0 and above
- Apache Server
- Composer

## Install

After cloning, navigate to the project folder:
```bash
    cd <your-folder-name>
```

To install the site, run the following commands:

```bash
  rm -rf vendor && composer update -v
  cp .env.example .env && php artisan key:generate
```


    