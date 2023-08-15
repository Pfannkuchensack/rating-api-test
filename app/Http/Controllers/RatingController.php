<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Http\Resources\RatingResource;

class RatingController extends Controller
{
    // Api for rating Query by rating or caster
    public function index(Request $request)
    {
        $rating = Rating::join('casters', 'casters.id', '=', 'ratings.caster_id')->orderBy('rating', 'DESC');

        if ($request->has('rating')) {
            $rating->where('rating', $request->rating);
        }

        if ($request->has('caster')) {
            $rating->where('casters.name', 'LIKE', '%' . $request->caster . '%'); // Das erste % kann man auch weg nehmen für Performence
        }

        return RatingResource::collection($rating->get());
    }
}
