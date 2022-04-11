
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

### Backend events

By default, clicking the button will trigger a backend event via ajax.

Adding a custom key

```php
Button::make('Name', 'attribute')
```

You register listeners in your EventServiceProvider

### Links
```php
Button::make('Text')->link('https://nova.laravel.com')
```

### Button Styles ( Classes )

You can set your own classes or bootstrap classes on button
```php
Button::make('Link')->buttonClasses('text-center'),
```
---
---

# Author

Hi 👋, Im Harut Hakobyan, creator of this Nova package

© 2022 GitHub, Inc.
