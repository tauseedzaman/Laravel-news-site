<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use App\Models\contact;
use Illuminate\Console\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('Contact');
    }

    public function store(contactRequest $request)
    {
        contact::create($request->validated());
        return redirect()->route('welcome');
    }
}
