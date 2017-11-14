<?php

namespace Kernel\ModuleManager\Feature;

interface TableProviderInterface
{
    /**
     * @return array
     */
    public function getTableConfig();
}
