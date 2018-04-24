<?php
/**
 * Delete Account plugin for Craft CMS 3.x
 *
 * Allows users to delete their own account within Twig templates to adhere to GDPR rules
 *
 * @link      http://bymayo.co.uk
 * @copyright Copyright (c) 2018 ByMayo
 */

namespace bymayo\deleteaccount\variables;

use bymayo\deleteaccount\DeleteAccount;
use bymayo\deleteaccount\services\DeleteAccountService;

use craft\helpers\Template as Template;

use Craft;

/**
 * @author    ByMayo
 * @package   DeleteAccount
 * @since     1.0.0
 */
class DeleteAccountVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */

     public function settings($setting)
     {
        return DeleteAccountService::getSettings($setting);
     }

    public function form()
    {

      $view = Craft::$app->getView();
      $templatePath = $view->getTemplatesPath();
      $view->setTemplatesPath(DeleteAccount::getInstance()->getBasePath());
      $template = $view->renderTemplate('/templates/form');
      $view->setTemplatesPath($templatePath);

      return Template::raw($template);

    }
}
