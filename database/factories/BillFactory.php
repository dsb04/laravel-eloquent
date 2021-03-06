<?php

namespace Database\Factories;

use App\Models\Client;
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

            'invoice'=> $this->faker->randomNumber(4,true),
            'installment'=>$this->faker->randomDigit(),
            'client_id'=>Client::factory()->create()->id,
            'value'=>$this->faker->randomFloat(0,0,100),
            'due_date'=>$this->faker->dateTimeBetween('now','+1 weeks'),
            'payment_date'=>$this->faker->dateTimeBetween('-1 week', 'now')

        ];
    }
}
