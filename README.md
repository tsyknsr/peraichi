# vagrant for peraichi

- see also: [http://www.1x1.jp/blog/2013/10/vagrant-lapp-sample.html](http://www.1x1.jp/blog/2013/10/vagrant-lapp-sample.html)
	- Forked from this sample

## Vagrant

Using VirtualBox and Vagrant

- [VirtualBox](https://www.virtualbox.org/)
- [Vagrant](http://www.vagrantup.com/)

```
$ vagrant plugin install vagrant-vbguest
```

## Usage

```
$ git clone git@github.com:hassy1983/peraichi.git
$ cd peraichi/vagrant
$ vagrant up
```

### Web Application

http://192.168.33.40/


### Edit

`app/Controller, app/Model, app/View, ...`

**[Attention!] NOT** `lib/app/*`

## Before starting your own project

You need to

- ~~change security salt and security cipher seed on app/Config/core.php~~ (Now, baking project is working)
- change hostname and vbname on vagrant/Vagrantfile
