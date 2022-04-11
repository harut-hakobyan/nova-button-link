
  ## Nova Button Link

Package for adding Linked button in Nova ( Index, Detail, View, Edit ).

### Installation

```bash
composer require customfield/button-link
```

### Usage

```php
use Customfield\ButtonLink\ButtonLink;
```
```php
public function fields(Request $request)
{
    return [
        ID::make('ID', 'id')->sortable(),
        Text::make('Name', 'name'),
        ButtonLink::make('Name')
                ->label("Label")
                ->link('your_url.com')
    ];
}
```

---

Adding a custom key

```php
Button::make('Name', 'attribute')
```

### Links
```php
Button::make('Text')->link('https://nova.laravel.com')
```

### Button Styles ( Classes )

You can set your own classes or bootstrap classes on button
```php
Button::make('Link')->buttonClasses('text-center'),
```
You can set your own classes or bootstrap classes on field
```php
Button::make('Link')->fieldClasses('text-center'),
```

You can set your own classes or bootstrap classes on field
```php
Button::make('Link')->fieldClasses('text-center'),
```
If you have many buttons, you can make them horizontal and vertical
```php
$fields = array();
$fields[] = ButtonLink::make('field_1')
        ->label("Manage")
        ->link('field_1_url')
        ->inline(true);
        
$fields[] = ButtonLink::make('field_2')
        ->label("Manage")
        ->link('field_2_url')
        ->inline(true);
        
    
public function fields(Request $request)
{
    return [
        new Panel('Services', fields),
    ];
}

```
// $fields = array() Its a global variable.

---

# Author

Hi 👋, Im Harut Hakobyan, creator of this Nova package

© 2022 GitHub, Inc.
