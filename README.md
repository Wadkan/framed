# You got framed

## Story

You and your teammates got framed with crimes you didn't commit. It was a lot of work but you finally found out who was responsible.
Everyone of you agreed that the best revenge would be to create your own framework...

Your task is to create an MVC (Model-View-Controller) micro-framework with PHP.

## What are you going to learn?

- `PSRs` and `Autoloading`
- handle packages and dependencies
- structure the code better
- protect sensitive data with Apache’s `.htaccess`
- use PHP’s `“dollar-dollar”` to be a magician among developers

## Tasks

1. Make sure that your `composer.json` file is prepared and ready for action.
    - The `composer.json` file exists and contains all the requirements and properties.

2. Make sure that `PSR-4` Autoloading is available and working properly using `Composer`.
    - Autoloading is prepared using Composer.

3. Create a configuration file using `JSON` format that can store the different kinds of parameters (e.g. for a database connection). Make sure that every instance have the same configuration structure but can have different settings, without causing conflicts during a teamwork.
    - Configuration `JSON` file is created and the different settings won't cause any conflicts.

4. Make sure that the configuration file cannot be read from a web browser.
    - The configuration file is secured.

5. Create a centralized database connection which can be accessed throughout the framework. Use `PDO` for the task. Make sure it uses the previously created configuration file.
    - Centralized database connection is created.

6. Create a class for query results. Every selection must use this class for fetching data. It must contain at least three methods and all of them should be able to be used on any result or property:
  - `set()` for setting the value of a property
  - `get()` for getting the value of a property
  - `has()` check if the given property exists or not
    - Class for query results is created and has `set()`, `get()` and `has()` methods.

7. Create a query repository for the SQL statements which can be accessed throughout the framework. Use the previously created database connection.
    - Centralized query repository is created.

8. Create a generic logger that logs the main events of the application that uses your framework. Also, it should allow the developers fo use it for creating custom log messages.
    - Generic logger is created.

9. Pre-configure `BladeOne` as the primary template engine of your framework to be `plug 'n' play`. Use `Composer` for the installation process.
    - `BladeOne` is pre-configured and ready to use.

10. Create a class that helps you manage the different kinds of super globals you need (e.g. `$_REQUEST`, `$_SESSION`, etc).
    - Super global manager class is created.

11. [OPTIONAL] Armor your framework against other kinds of attacks. Create filters to only accept requests from specific `IP addresses` and/or `web browsers`. Make these easily configurable.
    - Filters for `IP addresses` and/or `web browsers` are created.

12. [OPTIONAL] Implement a `routing system` so that you won't have to worry about the different PHP files you have.
    - `Routing system` is implemented.

## General requirements

- During the development, always keep in mind that this must be an MVC structured framework.
- Use namespaces for every class you make.

## Hints

- With `Design Patterns`, try to focus on `Factory` and `Singleton` first
- You can centralize modules with `abstract classes` for the main elements of the framework's structure

## Background materials

- <i class="far fa-book-open"></i> [PHP Standard Recommendations (PSRs)](https://www.php-fig.org/psr/)
- <i class="far fa-exclamation"></i> [PHP namespaces](https://www.w3schools.com/php/php_namespaces.asp)
- <i class="far fa-exclamation"></i> [Basic usage of Composer](https://getcomposer.org/doc/01-basic-usage.md)
- <i class="far fa-book-open"></i> [Five common PHP design patterns](https://www.ibm.com/developerworks/library/os-php-designptrns/)
- <i class="far fa-book-open"></i> [Apache's .htaccess files](https://httpd.apache.org/docs/current/howto/htaccess.html)
- <i class="far fa-book-open"></i> [Deny access with .htaccess files](https://help.dreamhost.com/hc/en-us/articles/216363167-How-do-I-deny-access-to-my-site-with-an-htaccess-file-)
- <i class="far fa-exclamation"></i> [BladeOne Template Engine](https://www.larablocks.com/package/eftec/bladeone)
- <i class="far fa-video"></i> [Hide your PHP file extension](https://youtu.be/MbqHayiZa0I)
- <i class="far fa-candy-cane"></i> [Simple and elegant URL routing with PHP](https://steampixel.de/en/simple-and-elegant-url-routing-with-php/)
