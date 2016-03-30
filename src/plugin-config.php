<?php

/*
 * Yii2 assets bundle with AHnames logos and params
 *
 * @link      https://github.com/ahnames/yii2-asset-ahnames
 * @package   yii2-asset-ahnames
 * @license   proprietary
 * @copyright Copyright (c) 2015-2016, AHnames (https://ahnames.com/)
 */

return [
    'params' => array_merge(
        require(Yii::getAlias('@vendor/ahnames/yii2-asset-ahnames/src/config/params.php')),
        [
            'passwordResetPage' => 'https://ahnames.com/login/remind',
            'signupPage'        => 'https://ahnames.com/registration',
        ]
    )
];
