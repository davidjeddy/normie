[!WARNING]
**⚠️ This project has been archived and is no longer maintained. ⚠️**

Github has shown it does not respect its users. Other have said it better than I can.

- https://www.theregister.com/2022/06/30/software_freedom_conservancy_quits_github/
- https://www.andrlik.org/dispatches/migrating-from-github-motivation/
- https://techresolve.blog/2025/12/27/looking-to-migrate-company-off-github-whats-the/
- https://lord.io/leaving-github/
- https://dev.to/alanwest/how-to-actually-migrate-from-github-to-codeberg-without-losing-your-mind-33bf>
> Development has moved to Codeberg:
> **➡️ https://codeberg.org/DavidJEddy/normie**
>
> Please update your remotes:
> ```bash
> git remote set-url origin https://codeberg.org/DavidJEddy/normie
> ```

---
# Normie

## Description
Normie is an attemp to normalize the standard PHP Libraries function parameter order for common use cases. The syntax works in the `searching for X in content Y`.

For function calls that do not return an assignable value Normie will return the resultant value.

In instances where callbacks are a parameter the callback will be the first parameter.

## Contributors
 - David J Eddy <me@davidjeddy.com>

## Example

## Install

Via [Composer](https://getcomposer.org):

    php composer.phar require davidjeddy/normie
    
## Library Under Development Setup

    php composer.phar install <New base project>
    git clone https://github.com/davidjeddy/normie.git ./library_under_dev
    ln -sfn -T ../../lib_under_dev/ ./vendor/davidjeddy/Normie

### String function parameter order
SPL: strpos  ( string $haystack  , mixed $needle  [, int $offset= 0  ] )

Normie: strpos  ( mixed $needle, string $haystack,  [, int $offset= 0  ] )


### Non returning function call
SPL: asort(), no return value

Normie: asort(), return array


### callback parameter
SPL: array_filter  ( array $input  [, callback $callback  ] )

Normie: array_filter  ( [ callback $callback  ], array $input )

## Usage

    <?php
    ...
    $return = \normie\stristr($what, $in_where);
    ...

    