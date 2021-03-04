<?php


namespace App\Http\View\Composers;
use App\Models\User;
use Illuminate\View\View;

class ProfileComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        // Dependencies are automatically resolved by the service container...
        $this->users = User::all();
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('usercount', $this->users->count());
    }

//    public function create(View $view)
//    {
//        $view->with('usercount', $this->users->count());
//    }


}
