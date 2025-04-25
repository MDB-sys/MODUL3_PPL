<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesDetailTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group DetailNotes
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
                    ->visit('/notes')
                    ->assertPathIs('/notes')
                    ->assertSee('Notes')
                    ->visit('/edit-note-page/2');
        });
    }
}
