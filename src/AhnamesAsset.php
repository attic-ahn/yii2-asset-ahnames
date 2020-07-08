<?php
/**
 * AHnames asset files: images, configs and more
 *
 * @link      https://github.com/ahnames/yii2-asset-ahnames
 * @package   yii2-asset-ahnames
 * @license   proprietary
 * @copyright Copyright (c) 2015-2017, AHnames (https://ahnames.com/)
 */

namespace ahnames\assets\ahnames;

use Yii;

class AhnamesAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/ahnames.css',
        'css/frontPageBanner/banner.css',
    ];

    public function init()
    {
        parent::init();

        $language = Yii::$app->language;

        if (is_file(Yii::getAlias("{$this->sourcePath}/css/frontPageBanner/banner-{$language}.css"))) {
            $this->css[] = "css/frontPageBanner/banner-{$language}.css";
        }
    }
}
