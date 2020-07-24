<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    
    // 投稿をお気に入りするアクション
    public function store($id)
    {
        // 認証済みユーザ（閲覧者)が、idの投稿をお気に入り追加する
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクト
        return back();
    }
    
    // お気に入りをはずすアクション
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者)が、idの投稿をお気に入り解除する
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクト
        return back();
    }
}
