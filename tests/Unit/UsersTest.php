<?php

namespace Tests\Unit;

use PHPUnit\Framework\Constraint\IsType;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UsersTest extends TestCase
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
        $user= new User();
        $user->name='Baneet';
        $user->email='jbaneetkaur@gmail.com';
        $user->password='abcdefg';

        $this->assertTrue($user->save());
    }
   public function testUpdate()
    {

        $user = User::find(50);
        $user->name = 'Steve Smith';

        $this->assertTrue($user->update());
    }

   public function testDelete()
    {
        $user= User::all()->last();

        $this->assertTrue($user->delete());
    }

public function testCount()
      {
          $user=User::all();
          $recordCount=$user->count();
         //dd($recordCount);
          $this->assertInternalType(IsType::TYPE_INT,$recordCount);
      }
 }