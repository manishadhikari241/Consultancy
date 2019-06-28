<?php

use App\Model\Configuration;
use App\Model\ImageSection;

function getConfiguration($key)
{
    $config = Configuration::where('configuration_key', '=', $key)->first();
    if ($config != null) {
        return $config->configuration_value;
    }
    return null;
}

function getFrontImage($key)
{
    $image = ImageSection::where('section', '=', $key)->first();
    if ($image != null) {
        return $image->image;
    }
    return null;
}