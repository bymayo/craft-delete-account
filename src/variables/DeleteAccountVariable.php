<?php
/**
 * @author     ByMayo
 * @package    DeleteAccount
 * @since      1.0.0
 * @copyright  Copyright (c) 2018 ByMayo
 */

namespace bymayo\deleteaccount\variables;

use bymayo\deleteaccount\DeleteAccount;
use bymayo\deleteaccount\services\DeleteAccountService;

use craft\helpers\Template as Template;

use Craft;

class DeleteAccountVariable
{

     public function settings($setting)
     {
        return DeleteAccountService::settings($setting);
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
