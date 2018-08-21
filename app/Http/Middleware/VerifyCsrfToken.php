<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'admin/pages/add',
        '/admin/pages/edit/*',
        'admin/portfolios/add',
        'admin/portfolios/edit',
        'admin/services/add',
        'admin/services/edit',
    ];

}
