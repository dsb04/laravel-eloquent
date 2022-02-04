<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Client;
=======
use App\Models\User;
use Illuminate\Support\Carbon;
use Carbon\Doctrine\CarbonType;
>>>>>>> fecceac8f286c08e0047b069626d880f2c569a43
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
<<<<<<< HEAD
            'invoice'=> $this->faker->randomNumber(4,true),
            'installment'=>$this->faker->randomDigit(),
            'client_id'=>Client::factory()->create()->id,
            'value'=>$this->faker->randomFloat(0,0,100),
            'due_date'=>$this->faker->dateTimeBetween('now','+1 weeks'),
            'payment_date'=>$this->faker->dateTimeBetween('-1 week', 'now')
=======
            'invoice'=> $this->faker->randomnumber(4, true),
            'installment'=> $this->faker->randomDigit(),
            'client_id'=> User::factory(),
            'value'=> $this->faker->randomFloat(0,0,100),
            'due_date'=> Carbon::now()->add('+1week'),
            'payment_date'=>Carbon::now()
>>>>>>> fecceac8f286c08e0047b069626d880f2c569a43
        ];
    }
}
