<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment; // Adjust this model based on where you're searching

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search logic (adjust based on your models and requirements)
        $results = Appointment::where('name', 'LIKE', '%' . $query . '%')->get();

        return view('search-results', compact('results', 'query'));
    }
}

