<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "api/v1/users",
        "api/v1/users/get",
        "api/v1/users/getAll",
        "api/v1/users/create",
        "api/v1/users/update",
        "api/v1/users/delete",
    ];
}
