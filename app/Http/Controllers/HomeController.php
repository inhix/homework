<?php

namespace App\Http\Controllers;

use App\Match;
use App\Player;
use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $players = Player::getPlayers();
        $latestNews = Post::latestNews();
        $upcomingMatches = Match::upcomingMatches();
        $previousMatches = Match::previousMatches();
        return view('index', [
            'players' => $players,
            'upcomingMatches' => $upcomingMatches,
            'previousMatches' => $previousMatches,
            'latestNews' => $latestNews]);
    }

    public function show($id)
    {
        $post = Post::where('id', $id)->firstOrFail();

        return view('pages.show', compact('post'));
    }

    public function tag($id)
    {
        $tag = Tag::where('id', $id)->firstOrFail();

        $posts = $tag->posts()->paginate(2);

        return view('pages.list', ['posts' => $posts]);
    }

    public function category($id)
    {
        $category = Category::where('id', $id)->firstOrFail();

        $posts = $category->posts()->paginate(2);

        return view('pages.list', ['posts' => $posts]);
    }
}
