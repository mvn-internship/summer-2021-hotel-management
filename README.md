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

Using to fix some thing automatically

``` bash
./vendor/bin/phpcs -n -d memory_limit=-1 --standard=phpcs.xml
