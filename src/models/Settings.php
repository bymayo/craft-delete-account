<?php
/**
 * Delete Account plugin for Craft CMS 3.x
 *
 * Allows users to delete their own account within Twig templates to adhere to GDPR rules
 *
 * @link      http://bymayo.co.uk
 * @copyright Copyright (c) 2018 ByMayo
 */

namespace bymayo\deleteaccount\models;

use bymayo\deleteaccount\DeleteAccount;

use Craft;
use craft\base\Model;

/**
 * @author    ByMayo
 * @package   DeleteAccount
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $deleteAdmin = false;
    public $confirmationKeyword = 'DELETE';
    public $redirect = null;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['deleteAdmin', 'boolean'],
            [['confirmationKeyword', 'redirect'], 'string']
        ];
    }
}
