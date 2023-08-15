<?php

namespace Database\Seeders\Test;

use App\Actions\User\UserStudentClassAction;
use App\Models\StudentClass;
use App\Models\User;
use App\Support\Constants\Position;
use App\Support\Constants\PublicImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EnvDevSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emailSheriff = 'leonardolivelopes2@gmail.com';
        $users = [
            [
                'student_number' => 18,
                'war_name' => 'SANTANA',
                'email' => $emailSheriff,
            ],
            [
                'student_number' => 19,
                'war_name' => 'FREITAS',
            ],
            [
                'student_number' => 17,
                'war_name' => 'NASCIMENTO',
            ],
        ];

        foreach ($users as $index => $user) {
            User::create([
                'student_number' => $user['student_number'],
                'war_name' => $user['war_name'],
                'email' => array_key_exists('email', $user) ? $user['email'] : strtolower((string) $user['war_name']) . '@gmail.com',
                'phone' => '(34) 98416-859' . $index,
                'password' => Hash::make('asdfasdf'),
            ]);
        }

        $studentClassData = [
            'name' => strtoupper('CHACAL'),
            'description' => 'O que vier nos traça',
            'code_class_id' => hash('md5', now()->toDateTimeString()),
            'photo' => asset(PublicImages::DEFAULT_PROFILE)
        ];

        $studentClass = StudentClass::create($studentClassData);

        $users = User::all();
        foreach ($users as $user) {
            UserStudentClassAction::execute(
                $user->id, $studentClass->id,
                $user->email == $emailSheriff ? Position::SHERIFF : Position::STUDENT
            );
        }
    }
}
