<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car= new Car();
        $car->make='Ford';
        $car->model='fusion';
        $car->year='2018';
        //dd($car);
        $this->assertTrue($car->save());
    }

    public function testUpdate()
    {
        $car = Car::find(50);
        $car->year = '2000';

        $this->assertTrue($car->update());
    }

    public function testDelete()
    {
        $car= new Car();
        $car->make='Ford';
        $car->model='fusion';
        $car->year='2018';
        $car->save();

        $this->assertTrue($car->delete());
    }
}
