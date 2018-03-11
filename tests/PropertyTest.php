<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class PropertyTest extends TestCase
{
    public function testGetReturns200Status()
    {
        $response = $this->call('GET', '/properties');

        $this->assertEquals(200, $response->status());
    }

    public function testGetReturnsJSON()
    {
        $this->json('GET', '/properties')
             ->seeJSONStructure([
                '*' => [
                    'title', 'price'     
                ]
            ]);
    }
}
