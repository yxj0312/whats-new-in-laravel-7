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
