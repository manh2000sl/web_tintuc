<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use Illuminate\View\View;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class postStatusEnum extends Enum
{
     public const an =   0;
     public const hien =   1;
public static function getArrayView():array{
    return [
      self::an => 'Ẩn',
      self::hien => 'Hiện',
    ];
}
public static function getKeyByValue($value):string{
    return array_search($value,self::getArrayView(),true);
}
}

