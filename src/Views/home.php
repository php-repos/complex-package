<?php

use PhpRepos\ComplexPackage\Models\User;
use PhpRepos\SimplePackage\SimpleClass;
use PhpRepos\ComplexPackage\Helpers;

$user = new User();
$description = SimpleClass::description();
?>

<h1>Hello World! <?php Helpers\output(); ?></h1>
