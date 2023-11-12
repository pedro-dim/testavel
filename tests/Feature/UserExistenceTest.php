<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

use Illuminate\Foundation\Testing\DatabaseMigrations;

it('checks if a user exists in the users table', function (User $user) {
    // Arrange: Create a user
    $user->factory->create(1);


    // Act: Retrieve the user from the database
    $retrievedUser =User::find($user->id);

    // Assert: Check if the user exists
    expect($retrievedUser)->not->toBeNull();
})->uses(DatabaseMigrations::class);
