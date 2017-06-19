<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostsTest extends TestCase
{
	use DatabaseMigrations;

	/** @test */
	function a_user_can_view_posts()
	{
		$response = $this->get('/posts');

		$response->assertStatus(200);
	}
}
