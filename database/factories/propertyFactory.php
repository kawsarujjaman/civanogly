<?php

namespace Database\Factories;

use App\Models\location;
use Illuminate\Database\Eloquent\Factories\Factory;

class propertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=> $this->faker->sentence,
            'name_bn'=> $this->faker->sentence,
            'name_tr'=> $this->faker->sentence,
            'featured_image'=>'https://picsum.photos/1200/800',
            'location_id'=> location::all()->random()->id ,
            'price'=>rand(100000,500000),
            'sale'=> rand(0,1),
            'type'=> rand(0,2),
            'bedrooms'=>rand(1,6),
            'bathroms'=>rand(1,5),
            'net_sql'=>rand(55,300),
            'gross_sql'=>rand(65,450),
            'poll'=>rand(0,3),
            'overview'=> $this->faker->text(100) ,
            'overview_bn'=> $this->faker->text(100) ,
            'overview_tr'=> $this->faker->text(100) ,
            'whyBuy'=>$this->faker->text(500) ,
            'description'=>$this->faker->text(500) ,
            'description_bn'=>$this->faker->text(500) ,
            'description_tr'=>$this->faker->text(500) ,

            
        ];
    }
}
