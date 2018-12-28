<?php
/**
 * Created by PhpStorm.
 * User: Pilipenko Andrey
 * Nickname: VikingBO
 * Github: https://github.com/VikingBO
 * Gitlab: https://gitlab.com/VikingBO
 * BitBucket: https://bitbucket.org/VikingBO/
 * Email: pilipenkoav@rambler.ru
 * Email: reaver-dron@yandex.ru
 * Email: pilipenkoavspb@gmail.com
 * Date: 26.12.2018
 */

class helper
{
    /**
     * Преобразуем объект или массив в сериализованную строку
     *
     * @param $item
     * @return string
     */
    public static function arr_to_serialize_str($item): string
    {
        $resultString = '';

        if (is_object($item)) {
            $item = (array) $item;
            $resultString = self::arr_to_str($item);
        } elseif (is_array($item)) {
            $resultString = serialize($item);
        }

        return $resultString;
    }

    /**
     * Проверяем файл на соответствие формату и размеру
     *
     * @param string $imgPath
     * @return bool
     */
    public static function validate_img_file(string $imgPath): bool
    {
        $result = false;

        return $result;
    }

    final static function __set ()
    {

    }
}