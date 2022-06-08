<?php

namespace App\Providers;

use App\Policies\BannerPolicy;
use App\Policies\CategoriePolicy;
use App\Policies\CourPolicy;
use App\Policies\EvenementPolicy;
use App\Policies\PostPolicy;
use App\Policies\RolePolicy;
use App\Policies\ServicePolicy;
use App\Policies\SlidePolicy;
use App\Policies\SocialPolicy;
use App\Policies\TagPolicy;
use App\Policies\TeacherPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        

        //banner
        Gate::define('create-banner', [BannerPolicy::class, 'create']);
        Gate::define('update-banner', [BannerPolicy::class, 'update']);
        Gate::define('delete-banner', [BannerPolicy::class, 'delete']);
        Gate::define('viewAny-banner', [BannerPolicy::class, 'viewAny']);
        //categorie
        Gate::define('create-categorie', [CategoriePolicy::class, 'create']);
        Gate::define('update-categorie', [CategoriePolicy::class, 'update']);
        Gate::define('delete-categorie', [CategoriePolicy::class, 'delete']);
        //contact
        Gate::define('update-contact', [ContactPolicy::class, 'update']);
        Gate::define('delete-contact', [ContactPolicy::class, 'delete']);
        Gate::define('viewAny-contact', [ContactPolicy::class, 'viewAny']);

        //cour
        Gate::define('create-cour', [CourPolicy::class, 'create']);
        Gate::define('update-cour', [CourPolicy::class, 'update']);
        Gate::define('delete-cour', [CourPolicy::class, 'delete']);
        Gate::define('viewAny-contact', [CourPolicy::class, 'viewAny']);
        //evenement
        Gate::define('create-evenement', [EvenementPolicy::class, 'create']);
        Gate::define('update-evenement', [EvenementPolicy::class, 'update']);
        Gate::define('delete-evenement', [EvenementPolicy::class, 'delete']);
        Gate::define('viewAny-evenement', [EvenementPolicy::class, 'viewAny']);
        //post
        Gate::define('create-post', [PostPolicy::class, 'create']);
        Gate::define('update-post', [PostPolicy::class, 'update']);
        Gate::define('delete-post', [PostPolicy::class, 'delete']);
        Gate::define('viewAny-post', [PostPolicy::class, 'viewAny']);
        //role
        Gate::define('create-role', [RolePolicy::class, 'create']); 
        Gate::define('update-role', [RolePolicy::class, 'update']);
        Gate::define('delete-role', [RolePolicy::class, 'delete']);
        Gate::define('viewAny-role', [RolePolicy::class, 'viewAny']);
        //service
        Gate::define('create-service', [ServicePolicy::class, 'create']);
        Gate::define('update-service', [ServicePolicy::class, 'update']);
        Gate::define('delete-service', [ServicePolicy::class, 'delete']);
        Gate::define('viewAny-service', [ServicePolicy::class, 'viewAny']);
        //slide
        Gate::define('create-slide', [SlidePolicy::class, 'create']);
        Gate::define('update-slide', [SlidePolicy::class, 'update']);
        Gate::define('delete-slide', [SlidePolicy::class, 'delete']);
        //social
        Gate::define('create-social', [SocialPolicy::class, 'create']);
        Gate::define('update-social', [SocialPolicy::class, 'update']);
        Gate::define('delete-social', [SocialPolicy::class, 'delete']);
        //tag
        Gate::define('create-tag', [TagPolicy::class, 'create']);
        Gate::define('update-tag', [TagPolicy::class, 'update']);
        Gate::define('delete-tag', [TagPolicy::class, 'delete']);
        Gate::define('viewAny', [TagPolicy::class, 'viewAny']);
        //teacher
        Gate::define('create-teacher', [TeacherPolicy::class, 'create']);
        Gate::define('update-teacher', [TeacherPolicy::class, 'update']);
        Gate::define('delete-teacher', [TeacherPolicy::class, 'delete']);
        Gate::define('viewAny-teacher', [TeacherPolicy::class, 'viewAny']);
        //user
        Gate::define('create-user', [UserPolicy::class, 'create']);
        Gate::define('update-user', [UserPolicy::class, 'update']);
        Gate::define('delete-user', [UserPolicy::class, 'delete']);
        Gate::define('viewAny-user', [UserPolicy::class, 'viewAny']);
        

    }
}
