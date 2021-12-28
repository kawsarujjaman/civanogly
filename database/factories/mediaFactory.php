<?php

namespace Database\Factories;

use App\Models\property;
use Illuminate\Database\Eloquent\Factories\Factory;

class mediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> 'https://picsum.photos/1200/800',
            'property_id'=>property::all()->random()->id ,
        ];
    }
}
