<?php

namespace GeniePress\Plugins;

class ACF
{

    /**
     * Check if ACF is disabled
     *
     * @return bool
     */
    public static function isDisabled(): bool
    {
        return ! static::isEnabled();
    }



    /**
     * Check if ACF is enabled
     *
     * @return bool
     */
    public static function isEnabled(): bool
    {
        return function_exists('get_field');
    }

}
