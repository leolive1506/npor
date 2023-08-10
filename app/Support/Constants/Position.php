<?php

namespace App\Support\Constants;

class Position
{
    public const SHERIFF = 1;
    public const DEPUTY_SHERIFF = 2;
    public const STUDENT = 3;

    public const ALL = [
        self::SHERIFF,
        self::DEPUTY_SHERIFF,
        self::STUDENT,
    ];

    public const ALL_KEY_LABEL = [
        'sheriff' => self::SHERIFF,
        'deputySheriff' => self::DEPUTY_SHERIFF,
        'student' => self::STUDENT,
    ];

}
