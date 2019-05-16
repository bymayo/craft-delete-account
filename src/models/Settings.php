<?php

namespace bymayo\deleteaccount\models;

use bymayo\deleteaccount\DeleteAccount;

use Craft;
use craft\base\Model;

class Settings extends Model
{

    public $deleteAdmin = false;
    public $confirmationKeyword = 'DELETE';
    public $redirect = null;

    public function rules()
    {
        return [
            ['deleteAdmin', 'boolean'],
            [['confirmationKeyword', 'redirect'], 'string']
        ];
    }

}
