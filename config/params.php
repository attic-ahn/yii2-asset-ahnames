<?php
/**
 * AHnames asset files: images, configs and more
 *
 * @link      https://github.com/ahnames/yii2-asset-ahnames
 * @package   yii2-asset-ahnames
 * @license   proprietary
 * @copyright Copyright (c) 2015-2017, AHnames (https://ahnames.com/)
 */

$supportEmail = 'support@ahnames.com';

return [
    'favicon.ico'       => '@ahnames/assets/ahnames/assets/images/favicon.ico',
    'language.languages' => [
        'en' => 'English',
    ],

    'organization.name'     => 'AHnames',
    'organization.url'      => 'https://ahnames.com/',
    'organization.termsUrl' => 'https://ahnames.com/rules',
    'organization.contact'   => [
        'name'                  => 'ADVANCED HOSTERS B.V.',
        'street'                => 'Lagendijk 1, A207',
        'city'                  => '1541KA Koog aan de Zaan, Netherlands',
        'phone'                 => 'Tel./FAX: +357 9 765 89 32',
        'reg'                   => 'REG: 62669559',
        'btw'                   => 'BTW: NL854910566B01',
    ],

    'supportEmail'           => 'support@ahnames.com',
    'adminEmail'             => 'support@ahnames.com',
    'abuseEmail'             => 'abuse@ahnames.com',
    'salesEmail'             => 'sales@ahnames.com',
    'gdprEmail'              => 'dpo@ahnames.com',
    'ticketGlobalNotifyMail' => 'ahnames-tickets@advancedhosters.com',

    'legals.privacyPolicyUrl' => 'https://ahnames.com/rules/privacy',

    'contactICQ'        => '593-341-721',
    'contactSkype'      => 'ah.andre',

    'copyright.year'    => 2011,

    'logo.image'                => '@ahnames/assets/ahnames/assets/images/logo.png',
    'logo.smallImage'           => '@ahnames/assets/ahnames/assets/images/logo.png',
    'logo.smallImageOptions'    => ['style' => 'width: 50px'],

    'socialLinks.links' => [
        'email'     => 'mailto:' . $supportEmail,
        'twitter'   => 'https://twitter.com/ahnames',
        'facebook'  => 'https://www.facebook.com/ahnames',
        'vk'        => 'https://vk.com/ahnames',
    ],

    'module.server.order.redirect.url' => 'https://advancedhosting.com/{language}/cloud-servers?refid=ahmen{language}',
];
