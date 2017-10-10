<?php

namespace Kernel\ModuleManager\Feature;

interface DaoProviderInterface
{
    /**
     * @return array
     */
    public function getDaoConfig();
}
