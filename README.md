# Laravel Country-State-City Seeder

[![Packagist Version](https://img.shields.io/packagist/v/zalanihir/country-state-city?label=packagist&logo=packagist)](https://packagist.org/packages/zalanihir/country-state-city)

Lightweight Laravel package to seed Countries, States and Cities with model relationships and optional country flags.

<!-- Preview image (optional) -->

![Seeder preview](images/contry-state-city-seeder.png)

What you'll get:

- Seeders and migrations for Country, State and City models
- Pre-defined model relationships (Country -> State -> City)
- Optional ISO codes (iso2, iso3), numeric code, phone code and country flags

Why use it?

- Open source and free
- Easy to install and modify
- Works out of the box with Laravel

Requirements

- PHP 8.1+ (or the version required by your Laravel application)
- Laravel 9 / 10 / 11

Quick installation

Install via Composer:

```bash
composer require zalanihir/country-state-city
```

Register the service provider (only if your Laravel version requires manual registration):

- Laravel 9 / 10: add this to `config/app.php` providers array:

```php
\Nihir\CountryStateCity\CountryStateCityServiceProvider::class,
```

- Laravel 11: add this to `bootstrap/app/providers.php` (if applicable):

```php
\Nihir\CountryStateCity\CountryStateCityServiceProvider::class,
```

Publish package files and flags:

```bash
php artisan vendor:publish --provider="Nihir\CountryStateCity\CountryStateCityServiceProvider"
php artisan csc:publish-flags
```

Run migrations and seeders:

```bash
php artisan migrate
```

Add the seeder call to `DatabaseSeeder.php`:

```php
$this->call(CountryStateCityTableSeeder::class);
```

Then run:

```bash
php artisan db:seed
```

Notes

- If you already have Country/State/City models or migrations in your project, remove or rename them to avoid conflicts before running the package migrations.
- The package fetches flags from https://flagsapi.com/ (64px). If some flags are missing you can contribute missing images in the `flags/` folder.

Usage example (display flags):

```php
use App\Models\Country;

$countries = Country::all();

foreach ($countries as $country) {
    echo '<img src="'.asset('flags/'.$country->iso2.'.png').'" alt="'.$country->name.'" />';
}
```

Support

If you find issues or need help, email: <testnihir@gmail.com>

Connect with me

[![Twitter](https://img.shields.io/badge/Follow%20%40NihirZala-1DA1F2?style=social&logo=twitter)](https://twitter.com/NihirZala)
[![LinkedIn](https://img.shields.io/badge/Connect%20%40nihirzala-0077B5?style=social&logo=linkedin)](https://www.linkedin.com/in/nihirzala/)
[![Instagram](https://img.shields.io/badge/Follow%20%40inihirzala-ff69b4?style=social&logo=instagram)](https://www.instagram.com/inihirzala/)

Contributors

Thanks to everyone who contributed!

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/ZalaNihir">
        <img src="https://avatars.githubusercontent.com/u/157243660?v=4" width="100px;" alt="Nihir Zala" style="width: 100px; height:100px"/>
        <br />
        <sub><b>Zala Nihir</b></sub>
      </a>
    </td>
  </tr>
</table>

Want to contribute? See [CONTRIBUTING.md](CONTRIBUTING.md).
