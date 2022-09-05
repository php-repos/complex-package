<?php

namespace ComplexPackage\Controllers;

use ComplexPackage\Models\User;
use function ComplexPackage\Helpers\helper1;
use function ComplexPackage\Helpers\helper2;

class HomeController extends Controller
{
    public function __invoke()
    {
        $user = new User();
        helper1();
        helper2();
    }
}
