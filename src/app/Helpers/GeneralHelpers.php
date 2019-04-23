<?php

/**
 * @param string $path
 * @param string|null $sizePath
 * @param string $action ('fit' or 'resize')
 * @return string
 */
function image(string $path = null, string $sizePath = null, string $action = 'fit') {

    $size = explode('x', $sizePath);

    $width = isset($size[0]) ? $size[0] : null;
    $height = isset($size[1]) ? $size[1] : null;

    return ImageResize::url($path, $width, $height, $action);
}
