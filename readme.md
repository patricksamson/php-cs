# Preflight
1. The following should be installed globally via composer (or another means)
    - `friendsofphp/php-cs-fixer` (minimum version 2.14)

2. Clone `kirschbaum-development/php-cs` locally
3. `cd kirschbaum-development/php-cs`
4. `composer install`

# IDE Configuration
## PHPStorm
#### Inspections (fixer does not run, only highlights violations)
1. Set the correct php cs fixer binary in:
    - Language & Frameworks -> PHP -> Quality tools
2. Place the KDG custom .php_cs configuration file in your home directory
3. Within phpstorm, go to:
    - Settings -> Editor -> Inspections -> PHP -> Quality tools
    - Make sure PHP CS Fixer validation is checked
    - In the right hand pane, after selecting this option, click the browse (`...`) button and select the .php_cs file previously saved in your home directory
    - Ensure PHP Code Sniffer validation is also set to this Coding Standard in its right pane
    - Click Apply and OK
#### File Watcher (fixer runs on save action)
1. In PHPStorm, create a file watcher (under "Preferences->Tools")
2. Uncheck all of the "Advanced Options"
3. Edit the following settings:
```
Name: PHP Style fixer
File type: PHP
Scope: Current File
Path: /{your-global-composer-directory}/vendor/friendsofphp/php-cs-fixer/php-cs-fixer
Arguments: fix $FileDir$/$FileName$ --verbose --config={path-to-your-root-php-cs-dir}/php-cs/.php_cs
```
## VS Code
1. Install PHP CS Fixer extension
2. Configure Extension, in `Settings as JSON`
    ```
    "php-cs-fixer.executablePath": "/path/to/kirschbaum-development/php-cs/vendor/bin/php-cs-fixer",
    "php-cs-fixer.config": ".php-cs;.php-cs.dist;local-clone/php_cs/.php_cs",
    "php-cs-fixer.onsave": true,
    ```
