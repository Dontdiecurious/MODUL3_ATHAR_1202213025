<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink(link: 'Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'testuser@example.com')
                    ->type(field: 'password', value: 'password')
                    ->press(button: 'LOG IN')
                    ->assertPathIs(path: '/dashboard')
                    ->clickLink(link: 'Notes')
                    ->assertPathIs(path: '/notes')
                    ->clickLink(link: 'Create Note')
                    ->assertPathIs(path: '/create-note')
                    ->type(field: 'title', value: 'Praktikum PPL Modul 3')
                    ->type(field: 'description', value: 'Athar Fariq Harish')
                    ->press(button: 'CREATE');
        });
    }
}
