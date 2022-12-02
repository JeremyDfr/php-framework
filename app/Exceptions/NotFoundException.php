<?php

namespace App\Exceptions;

class NotFoundException extends \Exception
{
    protected $message = 'Cette route n\'existe pas.';
}