<?php
/**
 * Delete Account plugin for Craft CMS 3.x
 *
 * Allows users to delete their own account within Twig templates to adhere to GDPR rules
 *
 * @link      http://bymayo.co.uk
 * @copyright Copyright (c) 2018 ByMayo
 */

namespace bymayo\deleteaccount\controllers;

use bymayo\deleteaccount\DeleteAccount;

use Craft;
use craft\web\Controller;

/**
 * @author    ByMayo
 * @package   DeleteAccount
 * @since     1.0.0
 */
class DefaultController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['delete'];

    // Public Methods
    // =========================================================================

    public function actionDelete()
    {

         $this->requirePostRequest();
         $request = Craft::$app->getRequest();

         // $this->requirePostRequest();
         //
         // $attributes = craft()->request->getPost();
         //
         // if (craft()->deleteAccount->checkAccount($attributes))
         // {
         //    craft()->userSession->setFlash('deleteAccountFlash', 'Your account has been deleted.');
         //    return $attributes['redirect'];
         // }
         // else {
         //    craft()->userSession->setFlash('deleteAccountFlash', 'Sorry your account cannot be deleted.');
         //    return false;
         // }
         //
         // return false;

         return true;

   }

}
