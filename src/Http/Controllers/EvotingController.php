<?php


namespace Helaplus\Evoting\Http\Controllers;


use Helaplus\Ussd\Models\UssdMenu;
use Helaplus\Ussd\Models\UssdState;
use Helaplus\Ussd\Ussd;
use Helaplus\Ussd\UssdHelper;
use Illuminate\Http\Request;

class EvotingController extends Controller
{


    public function index(Request $request){
        echo "home";
    }


}
