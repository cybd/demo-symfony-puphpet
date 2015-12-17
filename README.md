# README #

Ready-made development environment for Symfony 2.7.7 application with MySQL configured database.
Installed bundles:
* FOSCommentBundle
* GregwarCaptchaBundle

It is a good way (I think) to [start learning Symfony framework](http://symfony.com/doc/current/book/page_creation.html).

Download and install:

* [VirtualBox (v5.0.x)](https://www.virtualbox.org/wiki/Downloads)
* [Software Developer Kit (SDK) for VirtualBox](http://download.virtualbox.org/virtualbox/5.0.10/VirtualBoxSDK-5.0.10-104061.zip)
* [Vagrant](https://www.vagrantup.com/downloads.html)

Clone this repo:

```
$ git clone https://github.com/cybd/demo-symfony-puphpet demoApp
```

Goto demoApp and shoot vagrant up (it will take for a while, take a rest and make cup of coffee):

```
$ cd demoApp/ && vagrant up
```

Add line into your host file


```
192.168.56.101 demo.sf.local
```

Go to http://demo.sf.local in your browser

**DONE**!

## Windows users ##
Install NFS Vagrant plugin if you want to use NFS on Windows. Just type in console:


```
$ vagrant plugin install vagrant-winnfsd
```



## Under the hood ##

1 CPU, 512 RAM

Debian Wheezy 7 x64

nginx (demo.sf.local)

NFS shared folder

PHP 5.6 (cli, intl, mcrypt, xdebug, composer)

MySQL 5.6

SQLite

**Happy coding!**

*Created with Love using [puPHPet](https://puphpet.com/). Tested on Mac and Windows.*

*Inspired by [Evgeniy Snetilov](https://github.com/evgeniysnetilov)*
