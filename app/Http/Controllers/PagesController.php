<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use App\Career;
use App\News;
use DB;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function requirements()
    {
        return view('pages.requirements');
    }

    public function branches()
    {
        $branches = Branch::all();

        return view('pages.branches')->with('branches', $branches);
    }

    public function news()
    {
        $news = News::all();
        return view('pages.news')->with('news',$news);
    }

    public function careers()
    {
        //return view('pages.careers');
        //$careers = Career::all();
        $careers = DB::table('careers')
            ->join('branches', 'careers.branch_id', '=', 'branches.id')
            ->select('careers.*', 'branches.name', 'branches.address','branches.officer_in_charge')
            ->get();

        return view('pages.careers')->with('careers', $careers);
    }

}
