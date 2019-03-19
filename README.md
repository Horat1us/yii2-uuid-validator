# Yii2 UUID Behavior
[![Build Status](https://travis-ci.org/Horat1us/yii2-uuid-validator.svg?branch=master)](https://travis-ci.org/Horat1us/yii2-uuid-validator)
[![codecov](https://codecov.io/gh/Horat1us/yii2-uuid-validator/branch/master/graph/badge.svg)](https://codecov.io/gh/Horat1us/yii2-uuid-validator)

Simple validator that uses [ramsey/uuid](https://github.com/ramsey/uuid) to validate UUID in models etc.

Main purpose of this validator - use it instead of regular expression validator to prevent mistakes.

## Installation
Using [packagist.org](https://packagist.org/packages/horat1us/yii2-uuid-validator):
```bash
composer require wearesho-team/yii2-uuid-validator:^1.0
```

## Usage
Just add it to rules of our `\yii\base\Model`:
```php
<?php

namespace App;

use Horat1us\Yii\UuidValidator;
use yii\base;

class Model extends base\Model 
{
    /** @var string attribute to be validated */
    public $uuid;
    
    public function rules() {
        return [
            [['uuid',], 'required',],
            [['uuid',], UuidValidator::class],   
        ];
    }
}
```

## License
[MIT](./LICENSE)
