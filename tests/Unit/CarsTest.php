<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;

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
        $this->assertTrue(true);
    }


  public function testInsert()
    {
        $car = new Car();
        $car->make = 'Ford';
        $car->model = 'fusion';
        $car->year = '2018';
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
          $car = Car::all()->last();

          $this->assertTrue($car->delete());
      }

    public function testCount()
      {
          $car=Car::all();
          $recordCount=$car->count();
          //dd($recordCount);
          $this->assertInternalType(IsType::TYPE_INT,$recordCount);
      }

     public function testYear()
      {
          $car=Car::find(1);
          $year = (int) $car->year;
          //dd($car);
          $this->assertInternalType('int', (int)$car->year);

      }

      public function testMake()
      {
          $this->assertContainsOnly('string', ['honda', 'toyota', 'ford']);
      }

      public function testModel()
      {
          $car=Car::find(1);

          //dd($car);
          $this->assertInternalType('string', $car->model);

      }
}