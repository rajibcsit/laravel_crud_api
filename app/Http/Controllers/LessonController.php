<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LessonRequest;
use App\Http\Resources\LessonResource;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::all();
        return LessonResource::collection($lessons);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lessons = Lesson::create($request->all());
        return new LessonResource($lessons);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LessonRequest $request, Lesson $lesson)
    {
        $lesson->update($request->all());

        return new LessonResource($lesson);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return response(null, 204);
    }
}
