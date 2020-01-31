# yii2-instagram-authclient

This extension adds Instagram OAuth2 supporting for [yii2-authclient](https://github.com/yiisoft/yii2-authclient).

[![Latest Stable Version](https://poser.pugx.org/kotchuprik/yii2-instagram-authclient/v/stable)](https://packagist.org/packages/kotchuprik/yii2-instagram-authclient)
[![Total Downloads](https://poser.pugx.org/kotchuprik/yii2-instagram-authclient/downloads)](https://packagist.org/packages/kotchuprik/yii2-instagram-authclient)
[![Monthly Downloads](https://poser.pugx.org/kotchuprik/yii2-instagram-authclient/d/monthly)](https://packagist.org/packages/kotchuprik/yii2-instagram-authclient)
[![Latest Unstable Version](https://poser.pugx.org/kotchuprik/yii2-instagram-authclient/v/unstable)](https://packagist.org/packages/kotchuprik/yii2-instagram-authclient)
[![License](https://poser.pugx.org/kotchuprik/yii2-instagram-authclient/license)](https://packagist.org/packages/kotchuprik/yii2-instagram-authclient)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist kotchuprik/yii2-instagram-authclient "*"
```

or add

```json
"kotchuprik/yii2-instagram-authclient": "*"
```

to the `require` section of your composer.json.

## Usage

You must read the yii2-authclient [docs](https://github.com/yiisoft/yii2/blob/master/docs/guide/security-auth-clients.md)

Register your application [in Facebook](https://developers.facebook.com/docs/apps/) (be aware, it isn't easy nor intuitive to do it)

and add the Instagram client to your auth clients.

```php
'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'instagram' => [
                'class' => 'kotchuprik\authclient\Instagram',
                'clientId' => 'instagram_client_id',
                'clientSecret' => 'instagram_client_secret',
                'scope' => 'basic', // it will be basic if you don't set this
            ],
            // other clients
        ],
    ],
    // ...
 ]
 ```
