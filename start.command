#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
echo "
---------

Starting server! Now browse to http://localhost:8000/

Grz, The Mailman

----- "
php -S localhost:8000 -t "$DIR"
sleep 5
