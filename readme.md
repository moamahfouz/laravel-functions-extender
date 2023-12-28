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
