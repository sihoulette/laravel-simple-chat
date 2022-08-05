<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class AppController
 *
 * @package App\Http\Controllers
 */
final class AppController extends Controller
{
    /**
     * Application SPA point render
     *
     * @return Renderable
     */
    public function __invoke()
    {
        return view('app');
    }
}
