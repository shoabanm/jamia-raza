<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(5);
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'book_name' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
            'pages' => 'required|integer',
            'description' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'external_link' => 'nullable|string|url',
        ]);

        if ($request->hasFile('picture')) {
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('uploads/books', $fileName, 'public');
            $data['picture'] = $path;
        }

        Book::create($data);

        return redirect()->route('admin.books.index')->with('status', __('books.book_added'));
    }

    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'book_name' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
            'pages' => 'required|integer',
            'description' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'external_link' => 'nullable|string|url',
        ]);

        if ($request->hasFile('picture')) {
            if ($book->picture) {
                Storage::disk('public')->delete($book->picture);
            }
            $fileName = time() . '_' . $request->file('picture')->getClientOriginalName();
            $path = $request->file('picture')->storeAs('uploads/books', $fileName, 'public');
            $data['picture'] = $path;
        }

        $book->update($data);

        return redirect()->route('admin.books.index')->with('status', __('books.book_updated'));
    }

    public function destroy(Book $book)
    {
        if ($book->picture) {
            Storage::disk('public')->delete($book->picture);
        }
        $book->delete();

        return redirect()->route('admin.books.index')->with('status', __('books.book_deleted'));
    }
}
