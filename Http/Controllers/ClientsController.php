<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Clients;

class ClientsController extends Controller
{

		protected $clients;

		public function __construct(Clients $clients){
			$this->clients = $clients;
		}

    public function index(){

			$clients = $this->clients->all();

    	return view('clients.index', compact('clients'));

    }

    public function show($id){

			$client = $this->clients->find($id);

    	return view('clients.show', compact('client'));    	
    }
}
