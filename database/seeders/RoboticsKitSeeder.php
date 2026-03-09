<?php

namespace Database\Seeders;

use App\Models\RoboticsKit;
use Illuminate\Database\Seeder;

class RoboticsKitSeeder extends Seeder
{
    public function run()
    {
        $kits = ['StarterKit', 'Educational Robotics Kit', 'Kit5'];

        foreach ($kits as $kit) {
            RoboticsKit::create(['name' => $kit]);
        }
    }
}
