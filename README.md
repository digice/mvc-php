# MVC #

### Model - View - Controller ###

_Version 2.0.1_

### Model ###

Subclass:
```php
class MyModel extends Model
```

Inherit methods:
```php
$instanceOfMyModel->assoc();
```
Returns an associative array (dictionary) of properties.

```php
$instanceOfMyModel->keys();
```
Returns a string array of keys.

### View ###

Subclass:
```php
class MyView extends View
```

Set protected properties from within class instance:
```php
public function __construct()
{
  $this->open = '<div>';
  $this->content = 'Content goes here.';
  $this->close = '</div>';
}
```

Alternatively implement setter for content from outside of class instance:
```php
$instanceOfMyView->setContent('Content goes here');
```

Get composed HTML string by calling:
```php
echo $instanceOfMyView->htm();
```

### Controller ###

Sublass:
```php
class MyController extends Controller
```

Set protected properties from within class instance:
```php
public function __construct()
{
  $this->model = new MyModel();
  $this->view = new MyView();
}
```

Access properties with getters:
```php
$instanceOfMyController->model();
$instanceOfMyController->view();
```


