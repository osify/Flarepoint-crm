<?php

namespace App\Http\Controllers;

use App\Repositories\Client\ClientRepositoryContract;
use App\Repositories\User\UserRepositoryContract;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    protected $users;
    protected $clients;

    public function __construct(
            UserRepositoryContract $users,
            ClientRepositoryContract $clients
    )
    {
        $this->users = $users;
        $this->clients = $clients;
    }

    //
    public function index()
    {
        return view('clients.index');
    }
}
