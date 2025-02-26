<?php

declare(strict_types=1);

function validateUrl($url)
{
    // Challenge solution goes here



    return true;
}

function fetchUrlContent($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $content = curl_exec($ch);

    if ($content === false || !validateUrl($url)) {
        return "Access Denied";
    } else {
        return "Content Loaded";
    }

    curl_close($ch);
}
