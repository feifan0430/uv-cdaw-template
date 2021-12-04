<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class PageAdminController extends Controller
{
    public function ban_user(Request $request) {
        DB::table('users')
            ->where('id', $request->user_id)
            ->update(['authority' => 'ban'],);
    }

    public function unblock_user(Request $request) {
        DB::table('users')
            ->where('id', $request->user_id)
            ->update(['authority' => null],);
    }

    public function hide_comment(Request $request) {
        DB::table('comments')
            ->where('id',$request->comment_id)
            ->update(['visibility' => 'false']);
    }

    public function redisplay_comment(Request $request) {
        DB::table('comments')
            ->where('id',$request->comment_id)
            ->update(['visibility' => 'true']);
    }
}
