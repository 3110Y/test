<?php

interface OTPGeneratorInterface
{
    public static function getCode(): int;
}
