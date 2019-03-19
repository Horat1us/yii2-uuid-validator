<?php

declare(strict_types=1);

namespace Horat1us\Yii;

use Ramsey\Uuid\Uuid;
use yii\validators;

/**
 * Class UuidValidator
 * @package Horat1us\Yii
 */
class UuidValidator extends validators\Validator
{
    public function init(): void
    {
        parent::init();

        if ($this->message === null) {
            $this->message = \Yii::t('yii', '{attribute} is invalid.');
        }
    }

    protected function validateValue($value): ?array
    {
        if (!Uuid::isValid($value)) {
            return [$this->message, []];
        }

        return null;
    }
}
