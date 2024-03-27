<?php

	namespace Database\Factories;

	use App\Models\Curso;
	use Illuminate\Database\Eloquent\Factories\Factory;
	use Illuminate\Support\Str;

	/**
	 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
	 */
	class CursoFactory extends Factory
	{
	    /**
	     * The name of the factory's corresponding model.
	     * 
	     * @var string
	     */
	    protected $model = Curso::class;
	
	    /**
	     * Define the model's default state.
	     * 
	     * @return array
	     */
	    public function definition(): array
	    {
	        return [
	            'name' => $this->faker->sentence(),
                'description'=> $this->faker->paragraph(),
                'category'=> $this->faker->randomElement(['Desarrollo Web', 'Diseño Web'])
	        ];
	    }
	}