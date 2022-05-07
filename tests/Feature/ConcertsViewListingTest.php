<?php

namespace Tests\Feature;

use App\Models\Concert;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConcertsViewListingTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function user_can_view_concerts_list()
    {
        /**
         * Setup
         */
        $concert = Concert::factory()->create(([
            'title' => 'Example',
        ]));


        /**
         * Act
         */
        $res = $this->get('concerts/' . $concert->id);


        /**
         * Assert
         */
        $res->assertOk();
        $res->assertSee('Example');
    }
}
