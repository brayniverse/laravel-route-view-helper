# Laravel route view helper

[![Build Status](https://travis-ci.org/brayniverse/laravel-route-view-helper.svg)](https://travis-ci.org/brayniverse/laravel-route-view-helper)
[![Total Downloads](https://poser.pugx.org/brayniverse/laravel-route-view-helper/d/total.svg)](https://packagist.org/packages/brayniverse/laravel-route-view-helper)
[![Latest Stable Version](https://poser.pugx.org/brayniverse/laravel-route-view-helper/v/stable.svg)](https://packagist.org/packages/brayniverse/laravel-route-view-helper)
[![Latest Unstable Version](https://poser.pugx.org/brayniverse/laravel-route-view-helper/v/unstable.svg)](https://packagist.org/packages/brayniverse/laravel-route-view-helper)
[![License](https://poser.pugx.org/brayniverse/laravel-route-view-helper/license.svg)](https://packagist.org/packages/brayniverse/laravel-route-view-helper)

Syntactic sugar for those occasions when you only want to display a basic view.

This package adds a `Route::view()` helper method so you don't have to create a closure when all you are returning is a view.

## Installation

Begin by installing the package through Composer.

```bash
$ composer require brayniverse/laravel-route-view-helper
```

Then add the following to your providers array in `config/app.php`.

```php
Brayniverse\LaravelRouteViewHelper\ServiceProvider::class
```

## Usage

Normally you'd have to return a view in either a controller method or callback like the following: 

```php
public function contact()
{
  return view('contact');
}

// or

Route::get('/contact', function () {
  return view('contact');
});
```

Now you can do the same in one line.

```php
Route::view('/contact', 'contact');
```

## Credits

- [Christopher L Bray](https://github.com/brayniverse)
- [All Contributors](../../contributors)
