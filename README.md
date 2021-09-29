# Hotel management
Summer 2021

## Pre-Install
- Composer
- Docker
- Docker-compose

## Run

```bash
git clone git@github.com:mvn-internship/summer-2021-hotel-management.git
git checkout develop
```


```bash
cd summer-2021-hotel-management
cp environment/.env.local .env
```

```bash
composer install
```

```bash
./vendor/bin/sail up -d
```

## Check convention coverage

```bash
./vendor/bin/phpcs -n -d memory_limit=-1 --standard=phpcs.xml
./vendor/bin/phpmd app text phpmd.xml
```

PHP_CodeSniffer:
- [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)
- [PSR-2: Coding Style Guide](https://www.php-fig.org/psr/psr-2/)

PHPMD:
- [Code Size Rules](http://phpmd.org/rules/codesize.html)
- [Controversial Rules](http://phpmd.org/rules/controversial.html)
- [Design Rules](http://phpmd.org/rules/design.html)
- [Naming Rules](http://phpmd.org/rules/naming.html) with ShortVariable except for `$id`, `$e`, `$to`
- [Unused Code Rules](http://phpmd.org/rules/unusedcode.html) exclude UnusedFormalParameter


Using to fix some thing automatically

``` bash
./vendor/bin/phpcbf -n -d memory_limit=-1 --standard=phpcs.xml
```
