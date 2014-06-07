<?php

namespace Application\SchoolBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationSchoolBundle extends Bundle
{
    public function getParent()
    {
        return 'SonataAdminBundle';
    }
}