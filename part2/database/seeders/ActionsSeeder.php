<?php

namespace Database\Seeders;

use App\Models\Actions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Actions::factory(50)->create()->each(function ($action) {

            $randomClickId = rand(1, 280);
            $action->update(['click_id' => $randomClickId]);
        });
    }
}
