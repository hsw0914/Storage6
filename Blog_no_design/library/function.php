<?php

// 변수 사용
function v (&$var, $default = null)
{
    return isset($var) ? $var : $default;
}

// Request
function req ($name, $default = null)
{
    return v($_REQUEST[$name], $default);
}

// escape
function e ($v)
{
    return htmlentities($v, ENT_QUOTES, 'UTF-8');
}

// Script
function script ($script)
{
    return '<script>'.$script.'</script>';
}

// Alert
function alert ($msg)
{
    echo script('alert("'.$msg.'");');
}

// Alert & Back
function alert_back ($msg)
{
    alert($msg);
    die(script('history.back();'));
}

function alert_move ($msg, $url = '/')
{
    alert($msg);
    die(script('location.replace("'.$url.'")'));
}

function cut_str ($str, $len)
{
    return mb_strlen($str) > $len ? mb_substr($str, 0, $len) : $str;
}