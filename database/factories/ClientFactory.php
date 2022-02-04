<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
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
            'name'=> $this->faker->name(),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber(),
            'id_number'=>$this->faker->uuid
                    ];
                }
            }
=======
'name'=> $this->faker->name(),
'email'=>$this->faker->email(),
'phone'=>$this->faker->phoneNumber(),
'id_number'=>$this->faker->uuid
        ];
    }
}
>>>>>>> 88985ef19ad080f582b55cf49e7f24bce2778820
