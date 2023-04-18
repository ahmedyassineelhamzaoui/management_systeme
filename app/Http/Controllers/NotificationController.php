<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = DB::table('notifications')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('pages.notifications',compact('notifications'));
    }
    public function marqueAllasread(Request $request)
    {
        $user = Auth::user();
        $notifications = $user->notifications()->where('read_at', null)->get();
        $notifications->markAsRead();
        return redirect()->back();
    }
}
