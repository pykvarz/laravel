<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        function dob () {
            $year = rand(1900, 2021);
            $month = rand(1, 12);
            $day = rand(1, 31);

            $ymd = $day.$month.$year;
            return $ymd;
        }



        return [
            'iin'       => rand(0, 999999999999),
            'surname'   => Str::random(10),
            'name'      => Str::random(10),
            'patronymic'=> Str::random(10),
            'DOB'       => dob(),
            'surname'   => Str::random(10),
            'surname'   => Str::random(10),
        ];
    }
}
