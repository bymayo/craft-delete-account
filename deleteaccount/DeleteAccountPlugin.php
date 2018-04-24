<?php
/**
 * @author     ByMayo
 * @package    DeleteAccount
 * @since      1.0.0
 * @copyright  Copyright (c) 2018 ByMayo
 */

namespace Craft;

class DeleteAccountPlugin extends BasePlugin
{

    public function init()
    {
        parent::init();
    }

    public function getName()
    {
         return Craft::t('Delete Account');
    }

    public function getDescription()
    {
        return Craft::t('Allow users to delete their account via Twig templates.');
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/bymayo/craft-delete-account/blob/craft-2/README.md';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://github.com/bymayo/craft-delete-account/blob/craft-2/releases.json';
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'ByMayo';
    }

    public function getDeveloperUrl()
    {
        return 'http://bymayo.co.uk';
    }

    protected function defineSettings()
    {
        return array(
            'deleteAdmin' => array(AttributeType::Bool, 'default' => false),
            'confirmationKeyword' => array(AttributeType::Mixed, 'default' => 'DELETE'),
            'redirect' => array(AttributeType::Mixed, 'default' => null)
        );
    }

    public function getSettingsHtml()
    {
       return craft()->templates->render('deleteaccount/settings', array(
           'settings' => $this->getSettings()
       ));
    }

}
