<?php
namespace Jobinja\Djangoauth;

use Illuminate\Contracts\Hashing\Hasher;

interface DjangoauthHasherInterface extends Hasher
{
    /**
     * Check for django algos
     *
     * @param       $value
     * @param       $hashedValue
     * @param array $options
     * @return bool
     */
    public function checkForDjango($value, $hashedValue, array $options = []);
}