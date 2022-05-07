<?php

namespace Tests\Unit;

use App\Models\Concert;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ConcertTest extends TestCase
{

    /**
     * @test
     */
    public function get_concert_formatted_date()
    {

        // SETUP : Crete a concert
        $concert = Concert::factory()->make([
            'date' => Carbon::parse('2016-12-01 8:00pm')
        ]);

        // ACT : Get formatted date
        $date = $concert->formatted_date;

        // ASSERT : Verify the date as expected
        $this->assertEquals('December 1, 2016', $date);
    }


    /**
     * @test
     */
    public function get_concert_formatted_start_time()
    {

        // SETUP : Crete a concert
        $concert = Concert::factory()->make([
            'date' => Carbon::parse('2016-12-01 17:00:00')
        ]);

        // ACT : Get formatted date
        $date = $concert->formatted_start_time;

        // ASSERT : Verify the date as expected
        $this->assertEquals('5:00pm', $date);
    }
}
