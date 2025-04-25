<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesEditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group EditNotes
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
                    // ->click('@edit-2')
                    ->visit('/edit-note-page/2')
                    ->assertSee('Edit Note')
                    ->assertSee('Title')
                    ->assertSee('Description')
                    ->type('title', 'Updated Test Note')
                    ->type('description', 'This is an updated test note.')
                    ->press('UPDATE')
                    ->assertPathIs('/notes');

        });
    }
}
