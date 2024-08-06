<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EmployerController extends Controller
{
    public static function middleware(): array
    {
        return [
            new Middleware('employer')
        ];
    }

    public function create()
    {
        return view('employer.create');
    }

    public function store(Request $request)
    {
        $request->user()->employer()->create(
            $request->validate([
                'company_name' => 'required|min:3|unique:employers,company_name'
            ])
        );

        return redirect()->route('posts.index')
            ->with('success', 'Your employer account was created!');
    }
}
