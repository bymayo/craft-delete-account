<?php
/**
 * Delete Account plugin for Craft CMS
 *
 * DeleteAccount Controller
 *
 * @author    ByMayo
 * @copyright Copyright (c) 2018 ByMayo
 * @link      http://bymayo.co.uk
 * @package   DeleteAccount
 * @since     1.0.0
 */

namespace Craft;

class DeleteAccountController extends BaseController
{

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     * @access protected
     */
    protected $allowAnonymous = array('actionIndex',
        );

    /**
     */
    public function actionIndex()
    {
    }
}