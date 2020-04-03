<?php

namespace Hugueso\Uflash;

use Illuminate\Session\Store;

class LaravelSessionStore implements UflashSessionStore
{

    /**
     * @var Store
     */
    private $session;

    /**
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     */
    public function uflash($name, $data)
    {
        $this->session->flash($name, $data);
    }
}
