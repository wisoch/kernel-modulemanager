<?php

namespace Kernel\ModuleManager\Feature;

interface ModelProviderInterface
{
    /**
     * @return array
     */
    public function getModelConfig();
}
