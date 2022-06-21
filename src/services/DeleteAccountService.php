<?php

namespace bymayo\deleteaccount\services;

use bymayo\deleteaccount\DeleteAccount;

use Craft;
use craft\base\Component;

class DeleteAccountService extends Component
{

    public static function settings($setting)
    {

        $settings = DeleteAccount::$plugin->getSettings();
        return $settings->$setting;

    }

    public static function checkAccount($attributes)
    {

      $currentUser = Craft::$app->getUser();

      if($currentUser->getIsAdmin() && self::settings('deleteAdmin') == false) {
         return false;
      }
      else {
         if ($attributes->getBodyParam('confirmationKeyword') == self::settings('confirmationKeyword'))
         {
            if (Craft::$app->getElements()->deleteElementById($currentUser->id, 'craft\elements\User'))
            {
               Craft::$app->getUser()->logout(false);
               return true;
            }
         }
         return false;
      }

   }

}
