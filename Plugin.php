<?php

namespace DS\DPay;

use Backend;
use System\Classes\PluginBase;

/**
 * DPay Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'DPay',
            'description' => 'Payment systems manager',
            'author'      => 'DS',
            'icon'        => 'icon-leaf'
        ];
    }
}
