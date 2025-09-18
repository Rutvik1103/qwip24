<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Benefit;
use App\Models\Solution;

class DxpController extends Controller
{
    // Show home page with dynamic content
    public function index() {
        $heros = Hero::all();
        $benefits = Benefit::all();
        $solutions = Solution::all();
        return view('dxp_platform', compact('heros', 'benefits', 'solutions'));
    }

    // CRUD Forms: Create / Store
     public function createHero() {
         return view('ph_insert');
     }

    public function storeHero(Request $request) {
        Hero::create($request->all());
        return redirect()->route('dxp.index')->with('success', 'Hero added successfully!');
    }

     public function createBenefit() {
         return view('pb_insert');
     }

    public function storeBenefit(Request $request) {
        Benefit::create($request->all());
        return redirect()->route('dxp.index')->with('success', 'Benefit added successfully!');
    }

     public function createSolution() {
         return view('ps_insert');
     }

    public function storeSolution(Request $request) {
        Solution::create($request->all());
        return redirect()->route('dxp.index')->with('success', 'Solution added successfully!');
    }


// update and delete


       // ---------------- HERO ----------------
    public function editHero($id) {
        $hero = Hero::findOrFail($id);
        return view('ph_edit', compact('hero'));
    }

    public function updateHero(Request $request, $id) {
        $hero = Hero::findOrFail($id);
        $hero->update($request->all());
        return redirect()->route('dxp.index')->with('success', 'Hero updated successfully!');
    }

    public function deleteHero($id) {
        Hero::destroy($id);
        return redirect()->route('dxp.index')->with('success', 'Hero deleted successfully!');
    }

    // ---------------- BENEFIT ----------------
    public function editBenefit($id) {
        $benefit = Benefit::findOrFail($id);
        return view('pb_edit', compact('benefit'));
    }

    public function updateBenefit(Request $request, $id) {
        $benefit = Benefit::findOrFail($id);
        $benefit->update($request->all());
        return redirect()->route('dxp.index')->with('success', 'Benefit updated successfully!');
    }

    public function deleteBenefit($id) {
        Benefit::destroy($id);
        return redirect()->route('dxp.index')->with('success', 'Benefit deleted successfully!');
    }

    // ---------------- SOLUTION ----------------
    public function editSolution($id) {
        $solution = Solution::findOrFail($id);
        return view('ps_edit', compact('solution'));
    }

    public function updateSolution(Request $request, $id) {
        $solution = Solution::findOrFail($id);
        $solution->update($request->all());
        return redirect()->route('dxp.index')->with('success', 'Solution updated successfully!');
    }

    public function deleteSolution($id) {
        Solution::destroy($id);
        return redirect()->route('dxp.index')->with('success', 'Solution deleted successfully!');
    }

}
