<?php

require 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();//ritorna unastringa con i lcodice che ti compare sul cmd

echo $uuid;