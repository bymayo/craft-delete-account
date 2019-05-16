<?php

namespace bymayo\deleteaccount\controllers;

use bymayo\deleteaccount\DeleteAccount;
use bymayo\deleteaccount\services\DeleteAccountService;

use Craft;
use craft\web\Controller;

class DefaultController extends Controller
{

    protected $allowAnonymous = ['delete'];

    public function actionDelete()
    {

         $this->requirePostRequest();
         $attributes = Craft::$app->getRequest();

         if (DeleteAccountService::checkAccount($attributes))
         {
            Craft::$app->getSession()->setFlash('deleteAccountFlash', 'Your account has been deleted.');
            return $this->redirect($attributes->getBodyParam('redirect'));
         }
         else {
            Craft::$app->getSession()->setFlash('deleteAccountFlash', 'Sorry your account cannot be deleted.');
            return false;
         }

         return false;

   }

}
