#!/bin/bash
sed -i '/ondrej@debian.org/c\author "Ondrej Sury <ondrej@debian.org>"' /etc/init/php5-fpm.conf
