<?php

namespace PhpRepos\ComplexPackage\Controllers;

use PhpRepos\ComplexPackage\Models\User;
use function PhpRepos\ComplexPackage\Helpers\helper1;
use function PhpRepos\ComplexPackage\Helpers\helper2;

class HomeController extends Controller
{
    public function __invoke()
    {
        $user = new User();
        helper1();
        helper2();
    }
}
