[Install dependencies](https://inertiajs.com/server-side-setup#install-dependencies)
```shell
composer require inertiajs/inertia-laravel 
```

[Set root template](https://inertiajs.com/server-side-setup#root-template)
```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
  </head>
  <body>
    @inertia
  </body>
</html>
```

```shell
docker-compose run --rm node npm install vue@next @vue/compiler-sfc laravel-mix@latest
```

```shell
docker-compose run --rm node npm ci && docker-compose run --rm node npm run dev
```

```shell
docker-compose run --rm node npx mix watch
```

docker-compose run --rm node npm install @inertiajs/progress
