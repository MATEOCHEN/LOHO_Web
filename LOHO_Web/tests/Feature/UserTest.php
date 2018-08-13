<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Illuminate\Routing\Route;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexURL()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAccountURL()
    {
        $response = $this->get('/Account/Account_Log_In');

        $response->assertStatus(200);
    }

    public function testView()
    {
        Route::enableFilters();

        $response = $this->action('GET', 'HomeController@index');

        $view = $response->original;

        $this->assertEquals('LOHO_Index', $view['name']);
    }
}
