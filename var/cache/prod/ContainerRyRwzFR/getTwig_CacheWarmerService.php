<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.cache_warmer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\CacheWarmer\\TemplateCacheCacheWarmer.php';

return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer((new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function (): \Twig\Environment {
    return ($this->services['twig'] ?? $this->getTwigService());
})))->withContext('twig.cache_warmer', $this), NULL, array(($this->targetDirs[3].'/templates') => NULL));
