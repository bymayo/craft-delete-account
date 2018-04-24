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

    public static function getSettings($setting)
    {

        $settings = DeleteAccount::$plugin->getSettings();
        return $settings->$setting;

    }

    public static function checkAccount($attributes)
    {

      $currentUser = craft()->userSession->getUser();

      if($currentUser->admin && $this->settings('deleteAdmin') == false) {
         return false;
      }
      else {
         if ($attributes['confirmationKeyword'] == $this->settings('confirmationKeyword'))
         {
            return craft()->users->deleteUser($currentUser);
         }
         return false;
      }

   }

}
