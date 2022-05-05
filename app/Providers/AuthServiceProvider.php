<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->defineGateTopic();
        $this->defineGateUser();
        $this->defineGateRole();
        $this->defineGateAuthor();
        $this->defineGateGuest();

    }

    public function defineGateTopic()
    {
        Gate::define('add_topic', 'App\Policies\TopicPolicy@create');
        Gate::define('edit_topic', 'App\Policies\TopicPolicy@update');
        Gate::define('delete_topic', 'App\Policies\TopicPolicy@delete');
    }

    public function defineGateUser()
    {
        Gate::define('add_user', 'App\Policies\UserPolicy@create');
        Gate::define('edit_user', 'App\Policies\UserPolicy@update');
        Gate::define('delete_user', 'App\Policies\UserPolicy@delete');
    }
    public function defineGateRole()
    {
        Gate::define('add_role', 'App\Policies\RolePolicy@create');
        Gate::define('edit_role', 'App\Policies\RolePolicy@update');
        Gate::define('delete_role', 'App\Policies\RolePolicy@delete');
    }
    public function defineGateAuthor(){
        Gate::define('is_author','App\Policies\AuthorPolicy@view');
    }
    public function defineGateGuest(){
        Gate::define('khach','App\Policies\GuestPolicy@view');
    }

}
