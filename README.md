# JsonMapper Model Generator

[![Build Status](https://img.shields.io/travis/faustbrian/JsonMapper-Model-Generator/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/JsonMapper-Model-Generator)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/jsonmapper-model-generator.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/JsonMapper-Model-Generator.svg?style=flat-square)](https://github.com/faustbrian/JsonMapper-Model-Generator/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/JsonMapper-Model-Generator.svg?style=flat-square)](https://packagist.org/packages/faustbrian/JsonMapper-Model-Generator)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/jsonmapper-model-generator
```

## Usage

``` php
<?php

require_once 'vendor/autoload.php';

use BrianFaust\JsonMapper\Generator;

$model = new Generator('Vendor\Package', 'ClassName', [
    'userId' => 1,
    'id' => 1,
    'title' => 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit',
    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nemo earum, blanditiis harum aliquam minus id repellendus quia libero expedita itaque beatae et voluptate pariatur eos, voluptatem, saepe inventore tempora!',
    'created_at' => '2015-08-01 18:34:01',
]);

echo($model->output());
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
