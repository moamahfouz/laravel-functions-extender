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

### Functions table

| Function | Description | example |
| --- | --- | --- |
| `formatDateToArabic()` | format date to arabic | 28 ديسمبر 2023 |
| `formatDateTimeToArabic()` | format date time to arabic | 28 ديسمبر 2023 12:00  |
| `formatDateTimeToArabicWithAmPm()` | format date time to arabic | 28 ديسمبر 2023 12:00 صباحاً |


### Security

If you discover any security-related issues, please email [moa.mahfouz@gmail.com](mailto:moa.mahfouz@gmail.com) instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
