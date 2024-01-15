<?php

namespace Database\Factories;

use App\Models\Actions;
use App\Models\Click;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ActionsFactory extends Factory
{

    protected $model = Actions::class;

    public function definition(): array
    {
        $click = Click::factory()->create(); // Створюємо новий click запис

        return [
            'event_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'click_id' => $click->id, // Використовуємо id створеного click
        ];
    }
}
