<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.global_clearer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ($this->services['cache.app'] ?? $this->load(__DIR__.'/getCache_AppService.php')), 'cache.system' => ($this->services['cache.system'] ?? $this->load(__DIR__.'/getCache_SystemService.php')), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->load(__DIR__.'/getCache_SerializerService.php')), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->load(__DIR__.'/getCache_AnnotationsService.php'))));
