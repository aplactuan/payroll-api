<?php

namespace App\Http\Resources\Departments;

use TiMacDonald\JsonApi\JsonApiResource;

class DepartmentResource extends JsonApiResource
{
    public $attributes = [
        'name',
        'description'
    ];
}
