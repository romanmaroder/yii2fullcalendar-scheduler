<?php

namespace yii2fullcalendar;

use Yii;
use yii\web\AssetBundle;


class CoreAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@npm/fullcalendar-scheduler/';


    /**
     * the language the calender will be displayed in
     * @var string ISO2 code for the wished display language
     */
    public $language = NULL;

    /**
     * [$autoGenerate description]
     * @var boolean
     */
    public $autoGenerate = true;

    /**
     * tell the calendar, if you like to render google calendar events within the view
     * @var boolean
     */
    public $googleCalendar = false;
    
    /**
     * [$css description]
     * @var array
     */
    public $css = [];

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'index.global.js',
    ];
    
    /**
     * [$depends description]
     * @var array
     */
    public $depends = [];

    /**
     * @inheritdoc
     */
    /*public function registerAssetFiles($view)
    {
        $language = $this->language ? $this->language : Yii::$app->language;
        if (strtoupper($language) != 'EN-US') 
        {
            $this->js[] = "@fullcalendar/core/locales/{$language}.js";
        }

        if($this->googleCalendar)
        {
            $this->js[] = 'gcal.js';
        }

        parent::registerAssetFiles($view);
    }*/

}
