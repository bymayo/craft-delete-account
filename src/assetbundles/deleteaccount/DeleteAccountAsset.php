<?php
/**
 * Delete Account plugin for Craft CMS 3.x
 *
 * Allows users to delete their own account within Twig templates to adhere to GDPR rules
 *
 * @link      http://bymayo.co.uk
 * @copyright Copyright (c) 2018 ByMayo
 */

namespace bymayo\deleteaccount\assetbundles\DeleteAccount;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    ByMayo
 * @package   DeleteAccount
 * @since     1.0.0
 */
class DeleteAccountAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@bymayo/deleteaccount/assetbundles/deleteaccount/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/DeleteAccount.js',
        ];

        $this->css = [
            'css/DeleteAccount.css',
        ];

        parent::init();
    }
}
