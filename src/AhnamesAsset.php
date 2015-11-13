<?php

/*
 * Yii2 assets bundle with AHnames logos and so on
 *
 * @link      https://github.com/ahnames/yii2-asset-ahnames
 * @package   yii2-asset-ahnames
 * @license   No license
 * @copyright Copyright (c) 2015, AHnames (https://ahnames.com/)
 */

namespace ahnames\assets\ahnames;

class AhnamesAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@ahnames/assets/ahnames/assets';

    public $css = [
        'css/ahnames.css',
    ];
}
