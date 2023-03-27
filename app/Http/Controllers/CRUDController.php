<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book): Response
    {
        //
    }
}
