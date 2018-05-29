<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
// use App\Repositories\UserRepository;
 use App\Model\Article;

class ProfileComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $article;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Article $article)
    {
        // Dependencies automatically resolved by service container...
        $this->article = $article;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) //Just before the view is rendered, the composer's compose method is called with the  Illuminate\View\View instance
    {
        $view->with('count', $this->article->count());
    }
}