<?php

namespace App\Actions\Tailwind;

class GetButtonColorsAction
{
    public static function execute($color)
    {
        $colors = [
            'indigo' => 'bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 text-white border-transparent',
            'dark' => 'bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150',
            'gray-50' => 'bg-50 hover:bg-gray-200 focus:ring-gray-200 text-gray-800 border-2 border-gray-200',
            'orange' => 'bg-orange-400 hover:bg-orange-500 focus:ring-orange-500 text-white border-transparent',
        ];

        if (array_key_exists($color, $colors)) {
            return $colors[$color];
        }

        return $color;
    }
}
