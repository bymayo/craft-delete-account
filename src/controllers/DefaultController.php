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
		
		$request = Craft::$app->getRequest();
		
		if (DeleteAccountService::checkAccount($request))
		{
			if ($request->getAcceptsJson()) {
	
				return $this->asJson([
					'success' => true,
					'message' => 'Your account has been deleted.'
					]);
	
			} else {
		
				Craft::$app->getSession()->setFlash('deleteAccountFlash', 'Your account has been deleted.');	
				return $this->redirect($request->getBodyParam('redirect'));
			}
				
		} else {
	         
			if ($request->getAcceptsJson()) {
		
				return $this->asJson([
					'success' => false,
					'message' => 'Sorry your account cannot be deleted.'
				]);
		
			} else {
				Craft::$app->getSession()->setFlash('deleteAccountFlash', 'Sorry your account cannot be deleted.');
			}
		}
		
		return false;	
	}

}
