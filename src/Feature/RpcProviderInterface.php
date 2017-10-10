<?php

namespace Kernel\ModuleManager\Feature;

interface RpcProviderInterface
{
    /**
     * @return array
     */
    public function getRpcConfig();
}
