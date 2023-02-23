<?php

namespace App\Http\Controllers;



use App\Models\Webvital;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WebvitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fid = null;

        $count = Webvital::all()->count();

        $num_75_percent = intval($count * 0.75);
        if ($num_75_percent == 0) {
            $num_75_percent = 1;
        }

        $webvitals = Webvital::where('name', 'FID')->sortBy('value')->take($num_75_percent);

        if ($webvitals->count() > 0)
        {
            $fid = $webvitals->last();
        }

        return $fid;

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $json = $request->json();

        $name = $json->get('name');
        $value = $json->get('value');
        $rating = $json->get('rating');
        $delta = $json->get('delta');
        $metric_id = $json->get('id');
        $navigationType = $json->get('navigationType');

        $webvital = new Webvital();
        $webvital->name = $name;
        $webvital->value = $value;
        $webvital->rating = $rating;
        $webvital->delta = $delta;
        $webvital->metric_id = $metric_id;
        $webvital->navigationType = $navigationType;

        $webvital->save();

    }


}
