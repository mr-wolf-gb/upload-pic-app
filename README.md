<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel Zip Media Upload Demo

This Laravel demo application showcases a basic implementation for uploading ZIP media files and storing information about them in the database.

## Features

- Upload ZIP files containing media (images, videos, etc.)
- Validate uploaded file type and size
- Store file information in the database

## Installation

- Clone this repository.
- Run `composer install` to install dependencies.
- Copy `.env.example` to `.env` and configure database credentials.
- Run `php artisan migrate` to create the database table.
- (Optional) Configure additional settings like storage location in .env

## Usage

- Start the development server: `php artisan serve`
- Access the application in your browser (usually http://localhost:8000).
- Use the form to upload a ZIP file containing your media.
- Uploaded file information will be stored in the database.

#### Commands

```bash
# Clear all stored medias
php artisan clear:store-media
```

```bash
# Clear specific stored medias
php artisan clear:store-media --collection=USER-PICS
```

```bash
# Extract uploaded zip file
php artisan store:medias --path=newZip-June-4066
```

## Note:

This is a basic demo and does not include extra functionality. It serves as a starting point for understanding file uploads and database storage in Laravel.
