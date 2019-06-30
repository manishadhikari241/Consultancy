<?php

use App\Model\Configuration;
use App\Model\ImageSection;
use App\Model\Advertisement;

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

function getAdvertisement($key)
{
    $advertisement = Advertisement::where('section', '=', $key)->first();
    if ($advertisement != null) {
        return $advertisement->description;
    }
    return null;
}