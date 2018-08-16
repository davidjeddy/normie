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
Normie attempts to make using the PHP Standard Library (SPL) function calls more consistant by implimenting a norm_{funciton name}() wrapper function declariations. This library DOES NOT over ride the SPL functions in any way. 

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

*TODO*

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
