<?php

namespace Database\Factories;

use App\Models\User;
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
            'invoice'=> $this->randomnumber(4),
            'installment'=> $this->randomDigit(),
            'client_id'=> User::factory()->create()->id,
            'value'=> $this->randomFloat(0,0,100),
            'due_date'=> $this->unixTime('now', '+1 week'),
            'payment_date'=> $this->unixTime('-1 week', 'now')
        ];
    }
}
