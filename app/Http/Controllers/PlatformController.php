<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Benefit;
use App\Models\Solution;

class PlatformController extends Controller
{
    public function show()
    {
        $sections = Section::whereIn('section_name', [
            'hero','why_choose','contact_heading'
        ])->get()->keyBy('section_name');

        $benefits  = Benefit::orderBy('order')->get();
        $solutions = Solution::orderBy('order')->get();

        return view('platform', compact('sections','benefits','solutions'));
    }
}

