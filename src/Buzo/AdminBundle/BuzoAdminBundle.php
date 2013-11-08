<?php

namespace Buzo\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BuzoAdminBundle extends Bundle
{
    public function getParent()
    {
        return 'MsiAdminBundle';
    }
}
