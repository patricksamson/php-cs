# Preflight
1. The following should be installed globally via composer (or another means)
    - `friendsofphp/php-cs-fixer` (minimum version 2.14)

2. Clone `kirschbaum-development/php-cs` locally
# IDE Configuration
## PHPStorm
1. In PHPStorm, create a file watcher (under "Preferences->Tools")
2. Uncheck all of the "Advanced Options"
3. Edit the following settings:
```
Name: PHP Style fixer
 File type: PHP
Path: /{your-global-composer-directory}/vendor/friendsofphp/php-cs-fixer/php-cs-fixer
Arguments: fix --verbose --config={your-web-apps-root-directory}/php-cs/.php_cs
```

## VS Code
1. Install PHP CS Fixer extension
2. Configure Extension, in `Settings as JSON`
    ```
    "php-cs-fixer.config": ".php-cs;.php-cs.dist;local-clone/php_cs/.php_cs",
    "php-cs-fixer.onsave": true,
    ```
