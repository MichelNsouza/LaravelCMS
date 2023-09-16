<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.news.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.news.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateNewsRequest $request)
    {
        $this->news->create($request->all());

        session()->flash("success", "O registro foi gravado com sucesso");

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(news $news)
    {
        //
    }

}
