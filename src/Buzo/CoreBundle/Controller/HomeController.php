<?php

namespace Buzo\CoreBundle\Controller;

use Msi\BaseBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->redirect($this->generateUrl('msi_admin_dashboard'));
    }
}
