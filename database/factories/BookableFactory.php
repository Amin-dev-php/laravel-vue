<?php

namespace Database\Factories;

use App\Models\Bookable;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bookable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $suffix = [
            'Villa',
            'House',
            'Cottage',
            'Luxury Villas',
            'Cheap House',
            'Rooms',
            'Cheap rooms',
            'Luxury rooms',
            'Fancy rooms',
        ];

        return [
            'title' => $this->faker->city . ' ' . Arr::random($suffix),
            'description' => $this->faker->text(),
            'price' => random_int(15, 600)
        ];
    }
}
