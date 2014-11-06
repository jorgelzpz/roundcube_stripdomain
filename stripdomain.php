<?php

/**
 * This plugin removes the @domain.tld part from usernames when they log in
 *
 * @version 1.0
 * @author Jorge López Pérez
 */

class stripdomain extends rcube_plugin
{
    function init()
    {
        $this->add_hook('authenticate', array($this, 'strip'));
    }

    function strip($args)
    {
        list($username, $domain) = preg_split('/@/', $args['user']);
        $args['user'] = $username;

        return $args;
    }
}
