<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function index_動作すること()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
}
