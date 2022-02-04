<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Carbon;
use Carbon\Doctrine\CarbonType;
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
            'invoice'=> $this->faker->randomnumber(4, true),
            'installment'=> $this->faker->randomDigit(),
            'client_id'=> User::factory(),
            'value'=> $this->faker->randomFloat(0,0,100),
            'due_date'=> Carbon::now()->addWeekday('+1week'),
            'payment_date'=>Carbon::now()
        ];
    }
}
