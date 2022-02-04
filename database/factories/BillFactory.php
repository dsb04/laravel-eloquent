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
            'client_id'=> $this->faker->id(),
            'value'=> $this->faker->randomFloat(100),
            'due_date'=> $this->faker->dateTimeInInterval('now', '+1 week'),
            'payment_date'=> $this->faker->dateTimeInInterval('-1 week', 'now')
        ];
    }
}
