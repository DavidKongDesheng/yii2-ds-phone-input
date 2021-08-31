<?php
/*
 * @Author: your name
 * @Date: 2021-08-31 15:34:28
 * @LastEditTime: 2021-08-31 15:37:50
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: /yii2-ds-phone-input/src/PhoneInputAsset.php
 */

namespace deshengk\extensions\phoneInput;

use yii\web\AssetBundle;

/**
 * Asset Bundle of the phone input widget. Registers required CSS and JS files.
 * @package deshengk\extensions\phoneInput
 */
class PhoneInputAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/intl-tel-input';
    /** @var array */
    public $css = ['build/css/intlTelInput.css'];
    /** @var array */
    public $js = [
        'build/js/utils.js',
        'build/js/intlTelInput-jquery.js',
    ];
    /** @var array */
    public $depends = ['yii\web\JqueryAsset'];
}