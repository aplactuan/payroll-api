<?php
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

test('it has a uuid', function () {
    $employee = \App\Models\Employee::factory()->create();

    expect($employee)
        ->toBeString();
});
