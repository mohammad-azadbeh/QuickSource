<?php
namespace App\Http\Controllers\QuickAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QuickadminController extends Controller
{
    /**
     * Show QuickAdmin dashboard page
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('admin.dashboard',compact('user'));
    }
}