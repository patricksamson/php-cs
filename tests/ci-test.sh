#!/bin/bash

vendor/bin/php-cs-fixer fix --dry-run --using-cache=no -vvv
ec=$?

# From https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/v2.18.2/doc/usage.rst#exit-code
# 0 - OK.
# 1 - General error (or PHP minimal requirement not matched).
# 4 - Some files have invalid syntax (only in dry-run mode).
# 8 - Some files need fixing (only in dry-run mode).
# 16 - Configuration error of the application.
# 32 - Configuration error of a Fixer.
# 64 - Exception raised within the application.
#
# To test, we want to allow OK, and lint/style errors, but nothing else.
if [[ ( $ec -eq 0 || $ec -eq 4 || $ec -eq 8 ) ]]
then
    exit 0
else
    exit 255
fi
