<?php
/**
 * @author     ByMayo
 * @package    DeleteAccount
 * @since      1.0.0
 * @copyright  Copyright (c) 2018 ByMayo
 */

namespace Craft;

class DeleteAccountController extends BaseController
{

    protected $allowAnonymous = array();

    public function actionDelete()
    {

      $this->requirePostRequest();

      $attributes = craft()->request->getPost();

		if (craft()->deleteAccount->checkAccount($attributes))
		{
         craft()->userSession->logout(false);
         return $this->redirect($attributes['redirect']);
		}
      else {
         craft()->userSession->setFlash('deleteAccountFlash', 'Sorry your account cannot be deleted.');
         return false;
      }

		return false;

    }

}
