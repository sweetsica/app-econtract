<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index() {
        return view('Page.Contract.Contract');
    }

    public function show($id) {
        return view('Page.Contract.partials.DetailContract');
    }
}
