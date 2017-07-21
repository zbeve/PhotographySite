<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Instagram;

class InstagramServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app ?: app();

		$appVersion = method_exists($app, 'version') ? $app->version() : $app::VERSION;

		$laravelVersion = substr($appVersion, 0, strpos($appVersion, '.'));

		$isLumen = false;

		if (strpos(strtolower($laravelVersion), 'lumen') !== false)
		{
			$isLumen = true;

			$laravelVersion = str_replace('Lumen (', '', $laravelVersion);
		}

		if ($laravelVersion == 5)
		{
			if ($isLumen)
			{
				$this->publishes([
					__DIR__ . '/../config/config.php' => base_path('config/instagram.php'),
				]);
			}
			else
			{
				$this->publishes([
					__DIR__.'/../../config/config.php' => config_path('instagram.php'),
				]);
			}
		}
		$this->app->singleton(Instagram::class, function () use ($app) {
			return new Instagram($app['config']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['instagram'];
	}

}
