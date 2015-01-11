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

step-2b:
======
Add

```
"behat/mink"              : "1.6.*",
"behat/mink-goutte-driver": "~1.0",
"behat/mink-extension"    : "~2.0.0"
```
to `composer.json` and update

Change FeatureContext to

```
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
```

Copy dist behat file to project root `cp vendor/behat/mink-extension/behat.yml.dist behat.yml` alter `base_url` and then run `vendor/bin/behat`.


step-3:
======
`vendor/bin/behat -dl` this shows possible commands, if you want to see how they work we can open `MinkContext.php`

More tests!

And we can also run it like `vendor/bin/behat -f progress`


step-3b:
======
Auth check!


step-4:
======
Footer navbar, legal and FAQ pages.

Lots of frameworks build urls from configuration, so it's always good to check they still lead to the right place!

More tests!



