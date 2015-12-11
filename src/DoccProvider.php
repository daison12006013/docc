<?php
namespace PhalconSlayer\Docc;

use Clarity\Providers\ServiceProvider;

class DoccProvider extends ServiceProvider
{
    protected $alias  = 'phalconslayer:docc';
    protected $shared = false;

    /**
     * {@inheritdoc}
     *
     * @return mixed return this class itself
     */
    public function register()
    {
        require __DIR__ . '/app/routes.php';

        return $this;
    }
}
