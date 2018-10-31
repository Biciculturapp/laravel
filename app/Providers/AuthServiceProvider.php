<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
//Agregamos esta ruta para usarla
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //Crearemos esas instancias para autenticar a los usuarios de manera mas facil
        //Damos las rutas
        Passport::routes();
        //Este metodo facilita la autenticación si el usuario esta autorizado.
        Passport::enableImplicitGrant();

        //Si queremos darle una tiempo de expiración, usaremos este metodo para cambiar
        //por defecto este token nunca expira, metodos tokenExpireIn y/o refreshTokensExpireIn.
        // Passport::tokensExpireIn(Carbon::now()->addDays(15));
        // Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));

    }
}
