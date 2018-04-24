<?php
/**
 * @author     ByMayo
 * @package    DeleteAccount
 * @since      1.0.0
 * @copyright  Copyright (c) 2018 ByMayo
 */

namespace Craft;

class DeleteAccountVariable
{

    public function settings($setting)
    {
        return craft()->deleteAccount->settings($setting);
    }

    public function form()
    {

      $templatePath = craft()->path->getTemplatesPath();
      $path = craft()->path->getPluginsPath() . 'deleteAccount/templates';

      craft()->path->setTemplatesPath($path);
      $template = craft()->templates->render('form');
      craft()->path->setTemplatesPath($templatePath);

      return TemplateHelper::getRaw($template);

    }

}
