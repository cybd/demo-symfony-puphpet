# README #

Ready-made development environment for [Symfony demo application](http://symfony.com/blog/introducing-the-symfony-demo-application). Just clone and vagrant up ^)

It is a good way (I think) to [start learning Symfony framework](http://symfony.com/doc/current/book/page_creation.html).

Download and install:

* [VirtualBox (v4.3.x)](https://www.virtualbox.org/wiki/Download_Old_Builds_4_3) — still using old version due to performance penalties (Windows only) on v5.10 in console
* [Software Developer Kit (SDK) for VirtualBox](http://download.virtualbox.org/virtualbox/4.3.34/Oracle_VM_VirtualBox_Extension_Pack-4.3.34-104062.vbox-extpack)
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

Ubuntu Trusty 14.04 LTS x64

nginx (demo.sf.local)

NFS shared folder

PHP 5.6 (cli, intl, mcrypt, xdebug, composer)

SQLite

**Happy coding!**

*Created with Love using [puPHPet](https://puphpet.com/). Tested on Mac and Windows.*

*Inspired by [Evgeniy Snetilov](https://github.com/evgeniysnetilov)*
