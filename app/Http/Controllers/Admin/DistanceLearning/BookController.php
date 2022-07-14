<?php

namespace App\Http\Controllers\Admin\DistanceLearning;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

// Reuqests
use App\Http\Requests\DistanceLearning\BookRequest;
use App\Http\Requests\DistanceLearning\BookUpdateRequest;

// Models
use App\Models\DistanceLearningBooksPdf;
use App\Models\DistanceLearningBook;
use App\Models\DistanceLearningCourse;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DistanceLearningBook::books();

        return view('admin.distance-learning.book.index', [
            'books' => $books,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = DistanceLearningCourse::all();

        return view('admin.distance-learning.book.create', [
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $img = $request->file('img')->store('distance-learning/books');

        $book = DistanceLearningBook::insertGetId([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'course_id' => $request->course_id,
            'img' => $img,
        ]);


        if (!empty($request->enNames[0]) && !empty($request->amNames[0]) && !empty($request->ruNames[0])) {
            foreach ($request->enNames as $index => $enName) {
                if (isset($request->amNames[$index]) && isset($request->ruNames[$index]) && isset($enName)) {
                    $pdf = $request->pdfs[$index]->store('distance-learning/books/pdfs');
                    
                    DistanceLearningBooksPdf::insert([
                        'name_en' => $enName,
                        'name_am' => $request->amNames[$index],
                        'name_ru' => $request->ruNames[$index],
                        'pdf' => $pdf,
                        'book_id' => $book,
                    ]);
                }
            }
        }

        return redirect(route('admin.distance-learning.book.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DistanceLearningBook  $book
     * @return \Illuminate\Http\Response
     */
    public function show(DistanceLearningBook $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DistanceLearningBook  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(DistanceLearningBook $book)
    {
        $courses = DistanceLearningCourse::all();

        return view('admin.distance-learning.book.edit', [
            'book' => $book,
            'courses' => $courses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistanceLearningBook  $book
     * @return \Illuminate\Http\Response
     */
    public function update(BookUpdateRequest $request, DistanceLearningBook $book)
    {
        $img = $request->imgHidden;

        if (!empty($request->img)) {
            Storage::delete($img);
            $img = $request->file('img')->store('distance-learning/books');
        }

        $book->update([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'img' => $img,
            'course_id' => $request->course_id,
        ]);

        if (!empty($request->enNames) && !empty($request->amNames) && !empty($request->ruNames)) {
            foreach ($request->enNames as $index => $enName) {
                if (isset($request->amNames[$index]) && isset($request->ruNames[$index]) && isset($enName)) {

                    if (!empty($request->pdfs[$index])) {
                        $pdf = $request->pdfs[$index]->store('distance-learning/books/pdfs');
                    } else {
                        $pdf = null;
                    }
                    DistanceLearningBooksPdf::insert([
                        'name_en' => $enName,
                        'name_am' => $request->amNames[$index],
                        'name_ru' => $request->ruNames[$index],
                        'pdf' => $pdf,
                        'book_id' => $book->id,
                    ]);
                }
            }
        }

        return redirect(route('admin.distance-learning.book.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistanceLearningBook  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistanceLearningBook $book)
    {
        $book->delete();
        return redirect(route('admin.distance-learning.book.index'));
    }






    // edit page deleting pdf
    public function bookPdfDelete($id)
    {
        $item = DistanceLearningBooksPdf::findOrFail($id);
        Storage::delete($item->pdf);
        $item->forceDelete();
        return redirect()->back();
    }












    // recycle bin
    public function recycleBin()
    {
        $books = DistanceLearningBook::onlyTrashed()->paginate(10);

        return view('admin.distance-learning.book.recycleBin', [
            'books' => $books,
        ]);
    }



    public function recycleBinRestore($id)
    {
        DistanceLearningBook::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }


    public function forceDelete($id)
    {
        $item = DistanceLearningBook::withTrashed()->findOrFail($id);
        $item->forceDelete();
        Storage::delete($item->img);

        return redirect()->back();
    }
}
