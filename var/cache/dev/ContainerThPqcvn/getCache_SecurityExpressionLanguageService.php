<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.security_expression_language' shared service.

return $this->privates['cache.security_expression_language'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('cQW34k-ijJ', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
