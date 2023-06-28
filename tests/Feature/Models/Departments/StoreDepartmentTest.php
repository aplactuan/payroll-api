<?php

use function Pest\Laravel\postJson;

it('should create a department', function() {
    $department = postJson(route('department.store'), [
        'name' => 'Backend',
        'description' => 'We are awesome backend developers'
    ])->json('data');

    expect($department)
        ->attributes->name->toBe('Backend')
        ->attributes->description->toBe('We are awesome backend developers');
});
