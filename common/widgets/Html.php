<?php

namespace common\widgets;

use yii\helpers\ArrayHelper;

class Html extends \yii\helpers\Html
{
    /**
     * Generates icon
     * @param null|string|array $icon - Ikonka nomi,
     *  agar array shaklida berilsa, Html::tag() methodi orqali generatsiya qilinadi
     *  agar ikonkaning nomi o'zi berilsa, fa fa-icon generatsiya qilinadi,
     *  yoki `user,fas` , `user,gly` (bs3 glyphicon) ko'rinishda berilsa, mos ravishda verguldan keyingi ikonka classiga qarab generatsiya qiladi
     * @param array $options
     * @return string
     */
    public static function icon($icon = null, $options=[])
    {
        if (empty($icon)) {
            return "";
        }

        if (is_array($icon)){

            $tag = ArrayHelper::remove($icon, 'tag', 'i');
            return parent::tag($tag, '', $icon);
        }

        $icon = explode(",", $icon);


        if (count($icon) > 1) {
            $iconClass = $icon[1];
            switch ($iconClass){

                case "gly" : $class = 'glyphicon glyphicon-' . $icon[0]; break;
                case "fas" : $class = 'fas fa-' . $icon[0]; break;
                case "far" : $class = 'far fa-' . $icon[0]; break;
                case "fab" : $class = 'fab fa-' . $icon[0]; break;
                case "feather" : $class = 'feather icon-' . $icon[0]; break;

                default:  $class = "{$iconClass} {$iconClass}-{$icon[0]}"; break;

            }
        }

        else {
            $class = 'fa fa-' . $icon[0];
        }
        parent::addCssClass($options, $class);
        return parent::tag('i', '', $options);
    }

}