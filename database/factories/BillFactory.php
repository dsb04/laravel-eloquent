<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice'=> $this->faker->randomnumber(4),
            'installment'=> $this->faker->randomDigit(),
            'client_id'=> User::factory()->create()->id,
            'value'=> $this->faker->randomFloat(0,0,100),
            'due_date'=> $this->faker->unixTime('now', '+1 week'),
            'payment_date'=> $this->faker->unixTime('-1 week', 'now')
        ];
    }
}
