<?php

use Teon\Symfony\HttpKernel\BaseKernel;

class AppKernel extends BaseKernel
{
    public function registerBundles()
    {
        $bundles = array(
            // Base framework
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            // Application basis
            new Teon\Symfony\Symfony(),

            // Database addons
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),
            new Avanzu\Doctrine\PrefixBundle\AvanzuDoctrinePrefixBundle(),

            // Backend libs
            new FPN\TagBundle\FPNTagBundle(),

            // Frontend libs
            new Braincrafted\Bundle\BootstrapBundle\BraincraftedBootstrapBundle(),

            // Main application
            new Documlean\Documlean(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }
}
