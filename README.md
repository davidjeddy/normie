# Normie

## Badges
[![Latest Stable Version](https://poser.pugx.org/davidjeddy/normie/v/stable?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![Total Downloads](https://poser.pugx.org/davidjeddy/normie/downloads?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![Latest Unstable Version](https://poser.pugx.org/davidjeddy/normie/v/unstable?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![License](https://poser.pugx.org/davidjeddy/normie/license?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)

[![Monthly Downloads](https://poser.pugx.org/davidjeddy/normie/d/monthly?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![Daily Downloads](https://poser.pugx.org/davidjeddy/normie/d/daily?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![composer.lock](https://poser.pugx.org/davidjeddy/normie/composerlock?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)

[![Build Status](https://semaphoreci.com/api/v1/davidjeddy/normie/branches/master/badge.svg)](https://semaphoreci.com/davidjeddy/normie)

## Description
Normie is an attempt to normalize the standard PHP Libraries function parameter order for common use cases. The syntax works in the `searching for X in content Y`.

This library DOES NOT over ride the SPL functions, instead this added `norm_` to the beginning of the function call. 

In instances where callbacks are a parameter the callback will be the first parameter.

## Contributors
 - David J Eddy <me@davidjeddy.com>

## Example

## Install

Via [Composer](https://getcomposer.org):

    php composer.phar require davidjeddy/Normie
    
## Library Under Development Setup

    php composer.phar install <New base project>
    git clone https://github.com/davidjeddy/normie.git ./library_under_dev
    ln -sfn -T ../../lib_under_dev/ ./vendor/davidjeddy/Normie


## Testing / Quality Tools

Install the required development packaged

    php composer.phar install --dev -vvv -o
    
##### phpunit


    ./vendor/bin/phpunit --bootstrap vendor/autoload.php ./tests

##### php-cs-fixer

    php ./vendor/bin/php-cs-fixer fix ./src

##### phpcs

    php ./vendor/bin/phpcbf -p ./src/

##### phpmd

    php ./vendor/bin/phpcbf -pw ./src/
    
##### phpstan

    ./vendor/bin/phpstan analyse ./src

##### phploc

    ./vendor/bin/phploc ./src

##### phpcpd
    
    ./vendor/bin/phpcpd ./src

##### phpmnd

    ./vendor/bin/dephpend metrics ./src

##### churn

    ./vendor/bin/churn run src

##### phpcf

    ./vendor/bin/phpcf ./src

##### phpmetrics

    php ./vendor/bin/phpmetrics ./src
    
## Examples
Function parameter order examples.

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
    
    namespace Your\Class\Name;
    
    ...
    use Normie\Array;
    use Normie\String;
    ...
    
    // some code for your application
    
    ...
        $results = norm_stristr($key, $heystack);
    ...

That's it! Any time you call a Standard PHP Library function and expect the parameters to be a known order add `norm_` to
the beginning of the function call.