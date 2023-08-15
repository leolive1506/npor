<?php

namespace Database\Seeders;

use App\Models\TypeGroupActivity;
use App\Support\Constants\TypeGroupActivity as ConstantsTypeGroupActivity;
use Illuminate\Database\Seeder;

class TypeGroupActivitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => ConstantsTypeGroupActivity::FRAGMENT_VALUE, 'name' => 'Dividir valor'],
        ];

        foreach ($data as $typeGroupActivity) {
            TypeGroupActivity::updateOrCreate(
                ['id' => $typeGroupActivity['id']],
                array_slice($typeGroupActivity, -1)
            );
        }
    }
}
