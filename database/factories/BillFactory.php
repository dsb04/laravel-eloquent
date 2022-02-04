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
            'invoice'=> $this->faker->number(4),
            'installment'=> $this->faker->randomDigit(1),
            'client_id'=> $this->faker->floatval(100),
            'value'=> $this->faker->randomFloat($max=100),
            'due_date'=> $this->faker->dateTimeBetween('now' , '+1 week'),
            'payment_date'=> $this->faker->dateTimeBetween('-week')
        ];
    }
}
