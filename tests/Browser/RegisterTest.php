<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink(link: 'Register')
                    ->assertPathIs(path: '/register')
                    ->type(field: 'name', value: 'Test User')
                    ->type(field: 'email', value: 'testuser@example.com')
                    ->type(field: 'password', value: 'password')
                    ->type(field: 'password_confirmation', value: 'password')
                    ->press(button: 'REGISTER');

        });
    }
}
