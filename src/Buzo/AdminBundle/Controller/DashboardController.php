<?php

namespace Buzo\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function dashboardAction()
    {
        return $this->redirect($this->generateUrl('buzo_core_qtvr_admin_index'));
    }
}
