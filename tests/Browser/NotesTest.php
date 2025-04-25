<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->assertSee('Email')
            ->assertPathIs('/login')
            ->type('email', 'test@example.com')
            ->type('password', 'password')
            ->press('LOG IN')
            ->assertPathIs('/dashboard')
                    ->visit('/create-note')
                    ->assertPathIs('/create-note')
                    ->assertSee('Title')
                    ->assertSee('Description')
                    ->type('title', 'Test Note')
                    ->type('description', 'This is a test note.')
                    ->press('CREATE');
                    // ->assertSee('Note created successfully');
        });
    }
}
