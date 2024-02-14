<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Faker\Factory as Faker;
use Auth;

class StudiesTest extends TestCase
{

    public function test_create_lesson() {
        $model = \App\Models\Study::factory()->create();
        $this->assertInstanceOf(\App\Models\Study::class, $model);
    }
}
