# What's New in Laravel 7

## Ep2 Fluent String Manipulation

### Str::of()

```php
echo Str::of('hello world')->title()->start('Begin')->slug('__')11
```

```php
$event = 'created_post'

// old:
// ucwords(str_replace('_', ' ', $event));

// now:
Str::of($event)->slug(' ')->title();


$inv = 'INV_1232141';

// echo str_replace('INV_', '', $inv);

Str::of($inv)->after('INV_')

$stub = <<<stub
    class {{ CLASS }}
    {

    }
    stub;

    $className = 'User';

    // $class = str_replace('{{CLASS}}', $className, $stub);

    // $class = '<?php ' . $class;

    // echo $class;

    echo Str::of($stub)
        ->replace('{{CLASS}}', $className)
        ->start("<?php\n\n");
```

## Ep3 Casting Eloquent Attributes to Value Objects

```php
// in User model:
protected $casts = [
    'email' => EmailCast::class
]


class EmailCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $Attributes)
    {
        // $user->email
        return new Email($value);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value->address;
    }
}

class Email
{
    public $address;

    public function __construct($address)
    {
        $this->address = $address;
    }
}

// now when $user->email, u get:
App\Email {
    address: "12312@123.net"
}
```
