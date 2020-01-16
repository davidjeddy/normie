# Normie

## Badges
[![Build Status](https://semaphoreci.com/api/v1/davidjeddy/normie/branches/master/shields_badge.svg)](https://semaphoreci.com/davidjeddy/normie)
[![License](https://poser.pugx.org/davidjeddy/normie/license?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![codecov](https://codecov.io/gh/davidjeddy/normie/branch/master/graph/badge.svg)](https://codecov.io/gh/davidjeddy/normie)

[![Latest Stable Version](https://poser.pugx.org/davidjeddy/normie/v/stable?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![Latest Unstable Version](https://poser.pugx.org/davidjeddy/normie/v/unstable?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![composer.lock](https://poser.pugx.org/davidjeddy/normie/composerlock?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/davidjeddy/normie/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/davidjeddy/normie/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/davidjeddy/normie/badges/build.png?b=master)](https://scrutinizer-ci.com/g/davidjeddy/normie/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/davidjeddy/normie/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/davidjeddy/normie/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/davidjeddy/normie/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

[![Monthly Downloads](https://poser.pugx.org/davidjeddy/normie/d/monthly?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![Daily Downloads](https://poser.pugx.org/davidjeddy/normie/d/daily?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)
[![Total Downloads](https://poser.pugx.org/davidjeddy/normie/downloads?format=flat-square)](https://packagist.org/packages/davidjeddy/normie)

## Contributors
 - David J Eddy <me@davidjeddy.com>
 
## Description
Normie (short for Normalizer) attempts to make using the PHP Standard Library (SPL) function calls more consistent by implementing a norm_{function name}() wrapper function declarations. This library DOES NOT over ride the SPL functions in any way.

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

```sh
# Download repo and runtime environment
git clone https://github.com/davidjeddy/normie.git
cd ./normie
docker pull php:7.4.0-cli
docker run -d --rm --name php7_4 -v $(pwd):/normie php:7.4.0-cli tail -f /dev/null

# Tools to make composer work a bit easier
apt-get update -y
apt-get install -y git zip unzip 

# Run a PHP environment
docker exec -it php7_4 bash

# Install deps
cd /normie
php composer.phar self-update
php composer.phar install --dev -vvv -o # OR php composer.phar update -vvv -o
```

## Testing / Quality / Reporting Tools

#### Quality

##### php-cs-fixer

```sh
./vendor/bin/php-cs-fixer fix ./src
```

##### phpmnd

```sh
./vendor/bin/phpmnd ./src/ --progress
```

##### phpstan

```sh
./vendor/bin/phpstan analyse ./src --level 7
```

##### phploc

```sh
./vendor/bin/phploc ./src --count-tests
```

##### phpcpd
    
```sh
./vendor/bin/phpcpd ./src
```

##### dephpend

```sh
./vendor/bin/dephpend metrics ./src
```

##### churn

```sh
./vendor/bin/churn run src
```

##### phpcf

```sh
./vendor/bin/phpcf ./src
```

##### Roave no leakds

```sh
vendor/bin/roave-no-leaks ./tests
```

#### Reporting

##### phpcs

```sh
./vendor/bin/phpcs -p ./src/ --colors --report=source --report-file=./reports/phpcs.txt
```

##### phpmd

```sh
./vendor/bin/phpmd ./src html codesize,unusedcode,naming --reportfile ./reports/phpmd.html
```

##### phpmetrics

```sh
./vendor/bin/phpmetrics --report-html=./reports ./src/
```

#### Testing

##### phpunit

No xDebug

    ./vendor/bin/phpunit --bootstrap vendor/autoload.php ./tests
    
With xDebug

    php ./vendor/bin/phpunit ./tests --coverage-clover './reports/clover.xml'

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

## xDebug

For some reporting / QA xDebug is needed. To do this execute the following:

    docker run -it --rm --name normie -v "$PWD":/app php:7.4.0-jessie bash
    pecl install xdebugphp
    echo "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20160303/xdebug.so" >> /usr/local/etc/php/conf.d/xdebug.ini
