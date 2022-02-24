<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index () {
        $allmembers = Member::all();
        return view('pages.members', compact('allmembers'));

    }


    public function partMembers () {
        $allmembers = Member::all();

        $men = DB::table('members')->where('genre','=','Homme')->get();

        $women = Member::where('genre','=','Femme')->get();

        $menCond = DB::table('members')->where('genre', '=', 'Homme')->whereBetween('age', ['18', '24'])->get();

        $womenCond = DB::table('members')->where('genre', '=', 'Femme')->whereBetween('age', ['18', '24'])->get();

        $allmembersHC = $allmembers->whereNotBetween('age', ['18', '24']);

        return view('pages.partMembers', compact('allmembers', 'men', 'women', 'menCond', 'womenCond', 'allmembersHC') );
    }



}
