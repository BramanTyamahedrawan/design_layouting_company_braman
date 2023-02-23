<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function marbelEduGames()
    {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }

    public function marbelAndFriendsKidsGames()
    {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function ririStoryBooks()
    {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }

    public function kolakKidsSongs()
    {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
