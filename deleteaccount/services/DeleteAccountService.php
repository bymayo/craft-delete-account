<?php
/**
 * @author     ByMayo
 * @package    DeleteAccount
 * @since      1.0.0
 * @copyright  Copyright (c) 2018 ByMayo
 */

namespace Craft;

class DeleteAccountService extends BaseApplicationComponent
{

   public function settings($setting)
   {

      $plugin = craft()->plugins->getPlugin('deleteAccount');
      $settings = $plugin->getSettings();

      return $settings->$setting;

   }

    public function checkAccount($attributes)
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
