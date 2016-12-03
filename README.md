# JsonMapper Model Generator

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

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.de)
