<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;

class AboutController extends AppBaseController
{
    /**
     * Display a listing of the About.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        return view('about.index');
    }
}
