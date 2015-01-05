Website testing with behat
==========================

Code repo for my PHPEM talk on website testing with behat

General:
======
To run the app itself

```
php -S 0.0.0.0:8080 -t public/
```

To install composer

```
curl -sS https://getcomposer.org/installer | php
chmod +x composer.phar
```

step-1:
======
Quick overview of the code and then look at website, log in, log out, failed log in.

composer.json and composer install
behat init
run behat test


```
./composer.phar install
vendor/bin/behat --init
vendor/bin/behat
```

step-2:
======

We've installed behat add authentication.feature and run `vendor/bin/behat`.

By default behat doesn't come with many helpers to testing.
