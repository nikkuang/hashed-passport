<?php

namespace Ssmulders\HashedPassport;

class HashedPassport {

    /**
     * Indicates if HashedPassport migrations will be run.
     *
     * @var bool
     */
    public static $withEncryption = FALSE;


    /**
     * Configure HashedPassport to not register its migrations and use encryption.
     *
     * @return static
     */
    public static function withEncryption()
    {
        static::$withEncryption = TRUE;

        return new static;
    }
}