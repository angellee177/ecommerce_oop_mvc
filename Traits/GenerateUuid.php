<?php 

namespace App\Traits;

include(__DIR__ . '/vendor/autoload.php');

// run composer require ramsey/uuid
trait GenerateUuid 
{
    public function uuid()
    {
        return \Ramsey\Uuid\Uuid::uuid4()->toString();
    }
}
