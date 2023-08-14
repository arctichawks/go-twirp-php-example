<?php

declare(strict_types=1);

namespace App;

use App_php_golang_client_server\Hat;
use App_php_golang_client_server\Size;


final class ServiceHaberdasher implements \App_php_golang_client_server\Haberdasher
{
    public function MakeHat(array $ctx, Size $size): Hat
    {
        $hat = new Hat();
        $hat->setSize($size->getInches());
        $hat->setColor('golden');
        $hat->setName('crown');

        return $hat;
    }
}