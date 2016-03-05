<?php

namespace StarId\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class StarIdUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
