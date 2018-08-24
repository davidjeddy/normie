# Normie

## Badges
[![Build Status](https://semaphoreci.com/api/v1/davidjeddy/normie/branches/master/shields_badge.svg)](https://semaphoreci.com/davidjeddy/normie)

[![Latest Stable Version](https://poser.pugx.org/davidjeddy/normie/v/stable?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![Latest Unstable Version](https://poser.pugx.org/davidjeddy/normie/v/unstable?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![License](https://poser.pugx.org/davidjeddy/normie/license?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![composer.lock](https://poser.pugx.org/davidjeddy/normie/composerlock?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)

[![Monthly Downloads](https://poser.pugx.org/davidjeddy/normie/d/monthly?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![Daily Downloads](https://poser.pugx.org/davidjeddy/normie/d/daily?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![Total Downloads](https://poser.pugx.org/davidjeddy/normie/downloads?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)

## Contributors
 - David J Eddy <me@davidjeddy.com>
 
## Description
Wrapper library that provides normalized function interfaces for the PHP standard library.

## Examples
Function parameter order examples.

##### Arrays fn()

Normie array functions follow the 'array source X, operator Y (callback,key, needle, etc), other parameters are Z' mentality. The complete list of array functions are viewable [here](./src/Atrings.php).

SPL:    array array_map     ( callable $callback, array $arr1, array $_ = null) { }

Normie: array norm_array_map( array $array, callable $callback, array $userdata = null): array

##### Strings fn()

Normie string functions follow the 'Search X string or Y target, replace with Z string' mentality. The complete list of  string functions are viewable [here](./src/Strings.php).

SPL:    array explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] )

Normie: array explode ( string $string , string $delimiter [, int $limit = PHP_INT_MAX ] )


## Install

Via [Composer](https://getcomposer.org):

    php composer.phar require davidjeddy/Normie
    
## Library Under Development Setup

    php composer.phar install <New base project>
    git clone https://github.com/davidjeddy/normie.git ./library_under_dev
    ln -sfn -T ../../lib_under_dev/ ./vendor/davidjeddy/Normie

## Testing / Quality / Reporting Tools


Install the required development packaged

    php composer.phar install --dev -vvv -o
    
#### Quality

##### php-cs-fixer

    ./vendor/bin/php-cs-fixer fix ./src

##### phpmnd

    ./vendor/bin/phpmnd ./src/ --progress

##### phpstan

    ./vendor/bin/phpstan analyse ./src --level 7

##### phploc

    ./vendor/bin/phploc ./src --count-tests

##### phpcpd
    
    ./vendor/bin/phpcpd ./src

##### dephpend

    ./vendor/bin/dephpend metrics ./src

##### churn

    ./vendor/bin/churn run src

##### phpcf

    ./vendor/bin/phpcf ./src

##### grumphp

    ./vendor/bin/grumphp
    
#### Reporting

##### phpcs

    ./vendor/bin/phpcs -p ./src/ --colors --report=source --report-file=./reports/phpcs.txt

##### phpmd

    ./vendor/bin/phpmd ./src html codesize,unusedcode,naming --reportfile ./reports/phpmd.html

##### phpmetrics

    ./vendor/bin/phpmetrics --report-html=./reports ./src/

##### phpbench

    ./vendor/bin/phpbench ./
    
#### Testing

##### phpunit

    ./vendor/bin/phpunit --bootstrap vendor/autoload.php ./tests

## Usage
Usage is easy! Add the namespace declaration to your logic, then any time you want to use a `normilized` version of a function you know add `norm_` to the beginning. Now all array and string function parameters are in a predicatable order!

    <?php
    
    namespace Your\Class\Name;
    
    ...
    use Normie\Array;
    use Normie\String;
    ...
    
    // some code for your application
    
    ...
        $results = norm_stristr($heystack, $key);
    ...
