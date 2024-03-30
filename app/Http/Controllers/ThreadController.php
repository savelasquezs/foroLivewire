<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Thread;
use App\Http\Requests\StoreThreadRequest;
use App\Http\Requests\UpdateThreadRequest;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Thread  $thread)
    {
        $categories = Category::all();
        return view('thread/create', compact('categories', 'thread'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreThreadRequest $request)
    {
        auth()->user()->threads()->create($request->validated());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Thread $thread)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thread $thread)
    {
        $categories = Category::all();
        return view('thread/edit', compact('categories', 'thread'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThreadRequest $request, Thread $thread)
    {

        $thread->update($request->validated());
        return redirect("thread/$thread->id");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
