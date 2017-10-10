<?php

namespace Kernel\ModuleManager\Feature;

interface ModelPluginProviderInterface
{
    /**
     * @return array
     */
    public function getModelPluginConfig();
}
