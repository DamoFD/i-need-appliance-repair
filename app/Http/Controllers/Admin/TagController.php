<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;

class TagController extends Controller
{
    public function __construct()
    {
        return $this->middleware([IsAdmin::class, Authenticate::class]);
    }
    
    public function index()
    {
        return view('admin.tags.index', [
            'tags' => Tag::all(),
        ]);
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        //
    }

    public function destroy(Tag $tag)
    {
        //
    }
}