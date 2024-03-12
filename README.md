
# Push notification for APP


[![Latest Version](https://img.shields.io/github/v/tag/rahul-kulchandu2/push-notification-app
)](https://github.com/rahul-kulchandu2/push-notification-app/tags)
[![Latest Version](https://img.shields.io/packagist/dt/kulchandu/push-notification-app
)](https://packagist.org/packages/kulchandu/push-notification-app)


## Introduction

This is a notification service using firebase for applications of IOS/Android

## Installation Documentation

run composer require kulchandu/push-notification-app

## Publish the vendors

php artisan vendor:publish

## Usage
 FCMService::send(
            'token',
            [
            'title' => 'Title',
            'body'  => 'Body',
            ],
            ['page' => 'page']
        );

## License

Laravel Push notification for APP is open-sourced software licensed under the [MIT license](LICENSE.md).

Thank you for considering contributing to Push notification for APP!
