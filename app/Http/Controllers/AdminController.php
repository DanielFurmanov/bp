<?php

namespace App\Http\Controllers;

use function view;

class AdminController extends Controller {
	public function index() {
		return view('layouts.admin.main');
	}
}
