<?php

class PagesController extends \BaseController {

    public function home()
    {
        $email = md5('charlie.hebert92@gmail.com');

        $gravatar = "//www.gravatar.com/avatar/{$email}?s=200";

        return View::make('pages.home', compact('gravatar'));
    }

    public function portfolio()
    {
        return View::make('pages.portfolio');
    }

    public function blog()
    {
        return View::make('pages.blog');
    }

    public function contact()
    {
        return View::make('pages.contact');
    }
}