<?php

namespace WellServicesGroup\Helpers;

class Translations
{

    /**
     * Return a translated list of given list.
     *
     * @param $translationFile
     * @param $list
     * @return mixed
     */
    public static function translateList($list, $translationFile = 'general')
    {
        return array_map(function ($value) use ($translationFile) {
            return trans($translationFile . '.' . $value);
        }, $list);
    }

}