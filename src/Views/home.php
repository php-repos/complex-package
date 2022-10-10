<?php

use Saeghe\ComplexPackage\Models\User;
use Saeghe\SimplePackage\SimpleClass;
use Saeghe\ComplexPackage\Helpers;

$user = new User();
$description = SimpleClass::description();
?>

<h1>Hello World! <?php Helpers\output(); ?></h1>
