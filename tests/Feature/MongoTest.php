<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;
use App\Repositories\SumOfTwoInterface;
use Mockery as m;

class MongoTest extends TestCase
{
    private $sumoftwoRepository;

    public function setUp()
    {
        parent::setUp();
        $this->sumoftwoRepository = m::mock('App\Repositories\SumOfTwoInterface');
        $this->app->instance('App\Repositories\SumOfTwoInterface', $this->sumoftwoRepository);
    }

    public function tearDown()
    {
        m::close();
        parent::tearDown();
    }

    /**
     * Test that we can get a mongo list
     *
     * @return void
     */
    public function testGetList()
    {

        $this->sumoftwoRepository
            ->shouldReceive('all')
            ->once()
            ->andReturn([
              (object) ['number' => 8],
              (object) ['number' => 10]
              ]);

        $response = $this->get('/');

        $response
            ->assertStatus(200)
            ->assertViewHas('mongos', [
              (object) ['number' => 8, 'result' => true],
              (object) ['number' => 10, 'result' => false]
            ]);
    }
}
