
## Laravel Country, State, City Seeder Package

 Hi, I created a package for country, state & and city seeder. You can install and use it in your laravel project. If you are using this package then you can give it a star this package is free, In the future I Will add the country code &  phone initials.

## What is this library?

This is a library called CSC aka Country-State-City Seeders. While developing, I faced the issues so often that where can I get the seeder files? & how can I manage it? Is there a relationship or not?

So I googled & found some seeders files & with that help, I made this library which already has a relationship between their models.

## Why do you need this?

If your project needs the country state & city dropdown & you have no idea about how it works I already made the library for it. Here are some of the points.

- Open Source & Free

- Easy to install

- Easy to modify

- Models have already a relationship

## For Installation

- To install this package you have to install this package using composer.

## Note:

Make sure you do not have any country, state & city models or migrations then remove it other this will create conflicts.

# How to install it?

```bash
composer require zalanihir/country-state-city
```

## For Publishers

# For Laravel 10 or Laravel 9

you have to add the bellow line in ```app.php``` in ```providers``` section.

```bash
\Nihir\CountryStateCity\CountryStateCityServiceProvider::class,
```

# For Laravel 11

you have to add the bellow line in ```providers.php``` which is In the bootstrap folder.

```bash
\Nihir\CountryStateCity\CountryStateCityServiceProvider::class,
```

publishing command

```bash
php artisan vendor:publish --provider="Nihir\CountryStateCity\CountryStateCityServiceProvider"
```

The previous command publishes the files in your project.

Now you can simply run the following commands.

```bash
php artisan optimize:clear
php artisan config:cache
```

This will clear your caches

```bash
php artisan migrate
```

This will migrate the tables into databases.

Now add this line in your ```DataBaseSeeder.php``` file.

```bash
$this->call(CountryStateCityTableSeeder::class);
```

Now Simplay runs the following command for the seed of the database.

```bash
php artisan db:seed
```

The CountryModel, CityModel & StateModel has already relationships you do not have to worry about  relationships & more than that I updated the Country Model, Migration & DataProvider and I added the iso2, iso3, numcode & country phonecode & country Flags as well.


## Country Flags

In order to use the country flages you have to first get the flags by using bellow command.

```bash
php artisan csc:publish-flags
```

After the command you will see that in your public folder there is one more folder will be added named flags.So now you have to just use it Here I will give you a basic example of that how to use it you can customize it for sure as per your need.

```bash
use App\Models\Country;

$countries = Country::get();

@foreach ($countries as $country)
  <img  src="{{ asset('flags/'.$country->iso2.'.png') }}"  alt="{{ $country->name }}" />
@endforeach

```

## Friendly Note

if you have any query about this package face some error or need support to update simply mail me <a href="mailto:testnihir@gmail.com">testnihir@gmail.com</a>.

I get the all flags from the ```https://flagsapi.com/``` So the which size is 64 This would take alot time to manage it & some of countries's flags I did not get I will be updated soon if you want to update it & contribute in the project you can do it as well this will be vary helpfull for me. Thank you.

# Connect with me
[![Twitter URL](https://img.shields.io/badge/Follow%20%40NihirZala-1DA1F2?style=social&logo=twitter)](https://twitter.com/NihirZala)

[![LinkedIn URL](https://img.shields.io/badge/Connect%20%40nihirzala-0077B5?style=social&logo=linkedin)](https://www.linkedin.com/in/nihirzala/)

[![Instagram URL](https://img.shields.io/badge/Follow%20%40inihirzala-ff69b4?style=social&logo=instagram)](https://www.instagram.com/inihirzala/)

[![Email](https://img.shields.io/badge/testnihir@gmail.com-blue?style=social&logo=gmail)](mailto:testnihir@gmail.com)


## Contributors

Thank you to all the wonderful people who contributed to this project!

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/ZalaNihir">
        <img src="https://avatars.githubusercontent.com/u/157243660?v=4" width="100px;" alt="Nihir Zala" style="width: 100px; height:100px"/>
        <br />
        <sub><b>Zala Nihir</b></sub>
      </a>
    </td>
    <!-- Add more contributors as needed -->
  </tr>
</table>

Want to contribute? Check out our [Contributing Guidelines](CONTRIBUTING.md).

# Other Project

Check my Admin Panel

<a href="https://github.com/ZalaNihir/adminlte-laravel10" align="right"><img align="left" width="45%" src="https://github-readme-stats.vercel.app/api/pin/?username=ZalaNihir&repo=adminlte-laravel10&title_color=ffffff&text_color=ffffff&icon_color=0891b2&bg_color=000000&hide_border=true&locale=en" /></a>
