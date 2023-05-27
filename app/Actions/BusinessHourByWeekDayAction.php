<?php

namespace App\Actions;

use App\Model\BusinessHour;
use App\Support\Constants\WeekDay;

class BusinessHourByWeekDayAction
{
    public static function execute(int $sportCourtId = null, $businessHours = null)
    {
        if (!$businessHours) {
            $businessHours = BusinessHour::where('sport_court_id', $sportCourtId)
                ->get();
        }

        $weekDaysConst = new WeekDay();
        $weekDays = $weekDaysConst::ALLWITHTRANSLATE;
        $hourByWeekDay = [
            $weekDays[WeekDay::SEGUNDA] => $businessHours->where('week_id', WeekDay::SEGUNDA),
            $weekDays[WeekDay::TERCA] => $businessHours->where('week_id', WeekDay::TERCA),
            $weekDays[WeekDay::QUARTA] => $businessHours->where('week_id', WeekDay::QUARTA),
            $weekDays[WeekDay::QUINTA] => $businessHours->where('week_id', WeekDay::QUINTA),
            $weekDays[WeekDay::SEXTA] => $businessHours->where('week_id', WeekDay::SEXTA),
            $weekDays[WeekDay::SABADO] => $businessHours->where('week_id', WeekDay::SABADO),
            $weekDays[WeekDay::DOMINGO] => $businessHours->where('week_id', WeekDay::DOMINGO),
        ];

        return compact(
            'weekDaysConst',
            'weekDays',
            'hourByWeekDay'
        );
    }
}
