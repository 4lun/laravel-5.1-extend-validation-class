<?php

namespace App;

use Illuminate\Validation\Validator as BaseValidator;

class Validator extends BaseValidator
{
    public function getValidationMessages()
    {
        $messages = [];
        foreach ($this->rules as $attribute => $rules) {
            foreach ($rules as $rule) {
                $messages[$attribute][$rule] = $this->getMessage($attribute, $rule);
            }
        }

        return $messages;
    }
}
