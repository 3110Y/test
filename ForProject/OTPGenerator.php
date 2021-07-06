<?php


class OTPGenerator implements OTPGeneratorInterface
{
    protected static int $length = 6;

    /**
     * Генерирует Последовательность из 6 цифр (1122, 1456 ....)
     * @return int
     * @throws Exception
     */
    public static function getCode(): int
    {
        $start = 10 ** (static::$length - 1);
        $end = $start * 10 - 1;
        return random_int($start, $end);
    }
}
