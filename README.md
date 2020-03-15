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

You now have a place to store the following logics.

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
        if (! filter_var($address, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Invalid email here');
        }

        $this->address = $address;
    }

    public function domain()
    {
        // foo@example.com
        return Str::of(this->address)->after('@')->__toString();
    }

}

// now when $user->email, u get:
App\Email {
    address: "12312@123.net"
}
```

One more: a vacation model:

```php
class Vacation extends model
{
    protected $casts = [
        'schedule' => ScheduleCast::class
    ]
}

class ScheduleCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $Attributes)
    {
        // $user->email
        return new Schedule(
            $attributes['start'],
            $attributes['end']
        );
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return [
            'start' => $value->start,
            'end' => $value->end
        ];
    }
}

class Schedule
{
    public $start;

    public $end;

    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    } 

    public function nearingEnd()
    {
        return Carbon::parse($this->end)->lte(Carbon::tomorrow());
    }
}
```

## Ep 4 Route Custom Keys With Scoping

```php
Route::get('/posts/{post}', function (Post $post) {
    return $post;
});


// To track down a post by its slug instead of id until laravel 7, u should do: in the post model

public function getRouteKeyName()
{
    return 'slug';
}


// Now:in router file u can do:
Route::get('/posts/{post:slug}', function (Post $post) {
    return $post;
});

// Sometimes u want to scope a search, before if u go users/1/posts/1, u get the user_id = 2
Route::get('/users/{user}/posts/{post}', function (User $user, Post $post) {
    return $post;
});

// before, u must do:
Route::get('/users/{user}/posts/{post}', function (User $user, Post $post) {
    return $user->posts()->findOrFail($post->id);
});

// now you can use above, it works, or u can do it with slug
Route::get('/users/{user}/posts/{post:slug}', function (User $user, Post $post) {
    return $post;
});
```
