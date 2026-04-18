#!/bin/bash
./vendor/bin/phpunit --bootstrap vendor/autoload.php ./tests

./vendor/bin/roave-no-leaks ./tests

./vendor/bin/php-cs-fixer fix ./src

./vendor/bin/phpcbf -p ./src/

./vendor/bin/phpmd src/ text codesize,unusedcode,naming

./vendor/bin/phpmnd ./src/

./vendor/bin/phpstan analyse ./src --level 7

./vendor/bin/phploc ./src

./vendor/bin/phpcpd ./src

./vendor/bin/dephpend metrics ./src

./vendor/bin/churn run src

./vendor/bin/phpcf ./src

./vendor/bin/phpmetrics ./src
