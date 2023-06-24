<?php

use function 

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
