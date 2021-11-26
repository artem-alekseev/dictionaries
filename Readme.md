## Installing

### Composer

How install package

```
composer require artem-alekseev/dictionaries:1.*
```

## Usage

### Make Dictionary

Use laravel artisan command
```
php artisan make:dictionary NameDictionary
```
In dictionary
```php
class NameDictionary extends Dictionary
{
    const ONE = 1;
    const TWO = 2;
    
    public static function getDictionary(): array
    {
        return [
            self::ONE => 'One',
            self::TWO => 'Two',
        ];
    }
}
```

### Use in code

```php
echo NameDictionary::ONE; // out 1
echo NameDictionary::getValueData($this->id); // id = 2 // out 'Two'
echo NameDictionary::getRange(); // out [1,2] use in validation
echo NameDictionary::getStringRange(); // out '1,2' use in validation
echo NameDictionary::getDictionary() // out [1 => 'One', 2 => 'Two'] use in selector form field
```

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details