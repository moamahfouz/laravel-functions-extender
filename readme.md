## Laravel Extender

Extending Laravel Functionalities for arabic projects

## Installation

```bash
composer require moamahfouz/laravel-functions-extender
```

## Usage

```php 
use Moamahfouz\LaravelFunctionsExtender\LaravelFunctionsExtender;

$extender = new LaravelFunctionsExtender();
$extender->formatDateTimeToArabic($dateTimeValue);

// example
$extender->formatDateToArabic('2023-12-28'); 
// 28 ديسمبر 2023 

```

### Security

If you discover any security-related issues, please email [moa.mahfouz@gmail.com](mailto:moa.mahfouz@gmail.com) instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
