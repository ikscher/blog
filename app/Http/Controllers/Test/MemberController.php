<?php

namespace App\Http\Controllers\Test;

use App\Model\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    public function show()
    {

        $members=Member::all();
        // var_dump($members);

        $memberinfo = Member::find(1)->phone;
        var_dump($memberinfo);
    }
}
