<?php

function asset($asset)
{
    if (file_exists($asset)) {
        $protocol = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';

        return $protocol.'://'.$_SERVER['SERVER_NAME'].'/'.$asset.'?='.filemtime($asset);
    }
    return false;
}