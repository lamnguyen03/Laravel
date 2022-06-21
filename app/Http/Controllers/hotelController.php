<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Http\Requests;
use Input, File;
use App\Http\Requests\HotelRequest;


class hotelController extends Controller
{
    public function index()
    {
        return view('form_select');
    }
    public function addRoom(HotelRequest $Request)
    {

        $image = $Request->file('roomImage');
        $path = $image->move('images', $image->getClientOriginalName());


        $newRoom = [
            'name' => $Request->roomName,
            'description' => $Request->roomDescription,
            'price' => $Request->roomPrice,
            'image' => $image->getClientOriginalName(),
        ];

        if (isset($_SESSION['rooms'])) {
            $_SESSION['rooms'][] = $newRoom;
        } else {
            if (session_id() === '')
                session_start();
            $_SESSION['rooms'][] = $newRoom;
        }
        echo '<script>alert("Thêm phòng thành công")</script>';
        return view('adminpage');
    }
}
