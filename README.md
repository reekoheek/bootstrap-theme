bootstrap-theme
===============

Bono Theme based on Twitter Bootstrap

# Install

Insert into require section of composer.json with dev-master version, currently
the theme does not provide stable version yet, only dev-master version available.


```
"reekoheek/bootstrap-theme": "dev-master"
```

Insert to config.php

```php
'bono.theme' => array(
    'class' => '\\ROH\\Theme\\BootstrapTheme',
    'overwrite' => true,
),
```

That's it
