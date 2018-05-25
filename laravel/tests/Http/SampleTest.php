<?php

namespace Tests\Http;

use Tests\TestCase;

class SampleTest extends TestCase
{
    /** @test */
    public function visit_top_page()
    {
        $this->get('/')->assertSuccessful();
    }

    /** @test */
    public function visit_user_page()
    {
        $this->get('/user')->assertSuccessful();
    }
}
