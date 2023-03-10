<?php

namespace Tests\Features;

use PhpRepos\ComplexPackage\Controllers\HomeController;
use PhpRepos\ComplexPackage\Models\User;
use PhpRepos\SimplePackage\SimpleClass;
use Tests\TestHelper;
use function PhpRepos\ComplexPackage\Helpers\helper1;

class FirstFeature extends TestHelper
{
    public function test()
    {
        new HomeController(new SimpleClass);
        User::login();
        helper1();
    }
}
