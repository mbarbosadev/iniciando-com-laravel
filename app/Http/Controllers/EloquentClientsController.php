<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class EloquentClientsController extends Controller {
    
	public function index() {
		$clients = Client::all();
		
		return view('eloquent.clients.index', [
			'clients'=>$clients
		]);
	}
	
    
	public function create() {
		return view('eloquent.clients.create');
	}
	
	public function store(Request $request) {
		
		$client = new Client();
		$client->create($request->all());
		
		return redirect()->route('eloquent.client.list');
	}
	
}
