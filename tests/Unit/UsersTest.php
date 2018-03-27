<?php

namespace Tests\Unit;

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

    
}
