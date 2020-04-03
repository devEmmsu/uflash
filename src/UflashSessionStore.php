<?php

namespace Hugueso\Uflash;

interface UflashSessionStore
{
    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     */
    public function uflash($name, $data);
}