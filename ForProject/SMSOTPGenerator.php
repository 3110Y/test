<?php


class SMSOTPGenerator implements OTPGeneratorInterface
{
    protected static int $length = 4;

    /**
     * Генерирует Последовательность из 4 уникальных цифр (1234, 5689 ....)
     * @return int
     */
    public static function getCode() : int
    {
        $array  = range(0,9);
        $offset = 0;
        shuffle($array);
        if ($array[0] === 0) {
            $offset = 1;
        }
        return (int) implode(array_slice($array, $offset, static::$length));
    }
}
