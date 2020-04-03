### Uflash the simple notification

### Copyright

Inspired by Mercuryseries Flashy  .

###Installation
First, pull in the package through Composer.

Run ```  composer require hugueso/uflash  ```

And then, if using Laravel 5, include the service provider within ```config/app.php```.
```
'providers' => [
    Hugueso\Uflash\UflashServiceProvider::class,
];
```
And, for convenience, add a facade alias to this same file at the bottom:

```
'aliases' => [
   'Uflash' => Hugueso\Uflash\Uflash::class,
];

```
### Usage
Within your controllers
```
use Uflash ;

public function index()
{
    Uflash::message('Welcome Hugueso!', 'http://your-link.io');

    return redirect()->back() ;
}

```
You may also do:
- ``` Uflash::info('your Message', 'http://your-link.com') ```
- ``` Uflash::dark('your Message', 'http://your-link.com') ```
-  ``` Uflash::danger('your Message', 'http://your-link.com') ```

Alternatively, again, if you're using Laravel, you may reference the flashy() helper function, instead of the facade. Here's an example:
```

public function logout()
{
    Auth::logout();

    flashy()->info('You Message.', 'http://your-link.com');

    return redirect()->to('home');
}
``` 

if you want, you may use (or modify) the views that are included with this package. Simply append to your layout view:

```  @include('uflash::message') ```

### Exemple

```

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<div class="container">

    <p>Welcome to your website...</p>
</div>

<script src="//code.jquery.com/jquery.js"></script>
@include('uflash::message')
</body>
</html>

```
If you need to modify the flash message partials, you can run:

``` php artisan vendor:publish ```

>This package has jQuery has dependency. 



