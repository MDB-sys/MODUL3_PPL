<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertPathIs('/register')
                    ->type('name', 'Test User')
                    ->type('email', 'test@example.com')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->press('REGISTER');
        });
    }
}
