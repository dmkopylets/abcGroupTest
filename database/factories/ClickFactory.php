<?php

namespace Database\Factories;

use App\Models\Click;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ClickFactory extends Factory
{

    protected $model = Click::class;

    public function definition(): array
    {
        return [
            'ip' => $this->faker->ipv4,
            'referer' => $this->faker->url,
            'user_agent' => $this->faker->userAgent,
        ];
    }
}
