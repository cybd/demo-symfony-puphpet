#!/bin/bash
cd /vagrant/html/demo
composer update
app/console doctrine:schema:update --force
app/console assetic:dump