<?php

if (! function_exists('uflash')) {

    /**
     * flash message.
     *
     * @param  string|null $message
     * @return \Hugueso\Uflash\FlashNotifier
     */
    function uflash($message = null, $link = '#')
    {
        $notified = app('uflash');

        if (! is_null($message)) {
            return $notified->info($message, $link);
        }

        return $notified;
    }
}