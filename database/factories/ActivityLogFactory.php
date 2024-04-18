<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActivityLog>
 */
class ActivityLogFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id')->all(); // Get all user IDs

        return [
            'subject' => $this->faker->sentence,
            'url' => $this->faker->url,
            'method' => $this->faker->randomElement(['GET', 'POST', 'PUT', 'DELETE']),
            'ip' => $this->faker->ipv4,
            'agent' => $this->faker->userAgent,
            'user_id' => $this->faker->randomElement($userIds), // Random user ID
        ];
    }
}
