<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function contain(string $relationships): bool
    {
        $param = request()->query('includes');

        if (! isset($param)) {
            return false;
        }

        $includes = explode(',', strtolower($param));

        return in_array(strtolower($relationships), $includes);
    }
}
