# Mages
A Mages (Bootstrap 5, Alpine.js, Laravel and Livewire) Preset for Laravel


[![Latest Stable Version](http://poser.pugx.org/olakunlevpn/mages/v)](https://packagist.org/packages/olakunlevpn/mages) [![Total Downloads](http://poser.pugx.org/olakunlevpn/mages/downloads)](https://packagist.org/packages/olakunlevpn/mages) [![Latest Unstable Version](http://poser.pugx.org/olakunlevpn/mages/v/unstable)](https://packagist.org/packages/olakunlevpn/mages) [![License](http://poser.pugx.org/olakunlevpn/mages/license)](https://packagist.org/packages/olakunlevpn/mages) [![PHP Version Require](http://poser.pugx.org/olakunlevpn/mages/require/php)](https://packagist.org/packages/olakunlevpn/mages)

If you're not familiar with the name, it's an acronym that describes the main technologies involved in the stack:
- [Bootstrap 5](https://getbootstrap.com/)
- [Alpine.js](https://github.com/alpinejs/alpine)
- [Laravel](https://laravel.com)
- [Livewire](https://laravel-livewire.com)


Here are some notable features:

- Views extend a default layout
- Front-end assets like Bootstrap 5 and AlpineJS are set up with Vite
- Bootstrap-powered pagination views


## Installation

This preset is intended to be installed into a fresh Laravel application. Follow [Laravel's installation instructions](https://laravel.com/docs/installation) to ensure you have a working environment before continuing.


![Login View](./Screenshot.png)


### Installation (without auth)

Then simply run the following commands:
```bash
composer require livewire/livewire olakunlevpn/mages
php artisan ui mages
npm install
npm run dev
```

### Installation (with auth)

If you would like to install the preset and its auth scaffolding in a fresh Laravel application, make sure to use the `--auth` flag on the `ui` command:

```bash
composer require livewire/livewire olakunlevpn/mages
php artisan ui mages --auth
npm install
npm run dev
```

Some notable features of the authentication scaffolding include:
- Powered by Livewire components and single action controllers
- Bundled with pre-written tests

All routes, components, controllers and tests are published to your application. The idea behind this is that you have full control over every aspect of the scaffolding in your own app, removing the need to dig around in the vendor folder to figure out how things are working.



## Credits

- [Olakunlevpn](https://github.com/olakunlevpn)
- [All Contributors](../../contributors)
