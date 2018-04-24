<?php
/**
 * Delete Account plugin for Craft CMS 3.x
 *
 * Allows users to delete their own account within Twig templates to adhere to GDPR rules
 *
 * @link      http://bymayo.co.uk
 * @copyright Copyright (c) 2018 ByMayo
 */

namespace bymayo\deleteaccount\services;

use bymayo\deleteaccount\DeleteAccount;

use Craft;
use craft\base\Component;

/**
 * @author    ByMayo
 * @package   DeleteAccount
 * @since     1.0.0
 */
class DeleteAccountService extends Component
{
    // Public Methods
    // =========================================================================

    /*
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (DeleteAccount::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
