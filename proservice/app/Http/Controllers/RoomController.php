<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomController extends Controller
{
    public function index(){
        $rooms = Room::inRandomOrder()->limit(3)->get();
        return view('home',compact('rooms'));
    }
}
