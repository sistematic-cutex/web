<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class NotificationController extends Controller
{

    ///listar Proveedor
    public function index()
    {

        //ORM Eloquent
        $notifications = Notification::where('user_id', Auth::user()->id)->get();

        return view('notifications.index', compact('notifications'));
    }
}
