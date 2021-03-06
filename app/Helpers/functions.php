<?php

/**
 * Format Number for amounts of transactions
 *
 * @param $number
 * @return string
 */
function format_number(float $number)
{
    $result = number_format($number, 2, '.', ' ');

    return $result;
}

function isSelected($key, $req, $format = null)
{
    $return = 'selected';
    if (request($req)) {
        if ($key == request($req)) {
            return $return;
        }
    } else {
        if ($key == date($format)) {
            return $return;
        }
    }
}

function flash($message = null, $level = 'info')
{
    $session = app('session');
    if (!is_null($message)) {
        $session->flash('flash_notification.message', $message);
        $session->flash('flash_notification.level', $level);
    }
}
