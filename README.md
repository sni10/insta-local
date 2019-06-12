# ![logo](/examples/assets/instagram.png) Instagram PHP [![Latest Stable Version](https://poser.pugx.org/mgp25/instagram-php/v/stable)](https://packagist.org/packages/mgp25/instagram-php) [![Total Downloads](https://poser.pugx.org/mgp25/instagram-php/downloads)](https://packagist.org/packages/mgp25/instagram-php) ![compatible](https://img.shields.io/badge/PHP%207-Compatible-brightgreen.svg) [![License](https://poser.pugx.org/mgp25/instagram-php/license)](https://packagist.org/packages/mgp25/instagram-php)

This is Instagram's private API. It has almost all the features the Instagram app has, including media upload, direct messaging, stories and more.

**Read the [wiki](https://github.com/mgp25/Instagram-API/wiki)** and previous issues before opening a new one! Maybe your issue has already been answered.

**Frequently Asked Questions:** [F.A.Q.](https://github.com/mgp25/Instagram-API/wiki/FAQ)

----------
## Installation

### Using Composer

```sh
composer require sni10/insta-local
```

```php
require __DIR__.'/../vendor/autoload.php';

$ig = new \InstagramAPI\Instagram();
```

If you want to test new and possibly unstable code that is in the master branch, and which hasn't yet been released, then you can use master instead (at your own risk):

```sh
composer require sni10/insta-local dev-master
```

### I don't have Composer

You can download it [here](https://getcomposer.org/download/).

#### _Warning about moving data to a different server_

_Composer checks your system's capabilities and selects libraries based on your **current** machine (where you are running the `composer` command). So if you run Composer on machine `A` to install this library, it will check machine `A`'s capabilities and will install libraries appropriate for that machine (such as installing the PHP 7+ versions of various libraries). If you then move your whole installation to machine `B` instead, it **will not work** unless machine `B` has the **exact** same capabilities (same or higher PHP version and PHP extensions)! Therefore, you should **always** run the Composer-command on your intended target machine instead of your local machine._

## Examples

All examples can be found [here](https://github.com/mgp25/Instagram-API/tree/master/examples).

### What is Instagram?
According to [the company](https://instagram.com/about/faq/):

> "Instagram is a fun and quirky way to share your life with friends through a series of pictures. Snap a photo with your mobile phone, then choose a filter to transform the image into a memory to keep around forever. We're building Instagram to allow you to experience moments in your friends' lives through pictures as they happen. We imagine a world more connected through photos."

# License


# Terms and conditions

## Legal