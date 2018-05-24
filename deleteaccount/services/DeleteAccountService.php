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

    public function getElementById($id)
    {
        return craft()->elements->getElementById($id);
    }

    public function checkAccount($attributes)
    {
        $currentUser = craft()->userSession->getUser();
        $transferContentTo = craft()->users->getUserById($this->settings('transferContentTo')[0]);

        if ($currentUser->admin && $this->settings('deleteAdmin') == false) {
            return false;
        } else {
            if ($attributes['confirmationKeyword'] == $this->settings('confirmationKeyword')) {
                return craft()->users->deleteUser($currentUser, $transferContentTo ? $transferContentTo : null);
            }
            return false;
        }
    }
}
