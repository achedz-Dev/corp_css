# UMPSA Corporate CSS

Laravel platform for a reusable UMPSA system stylesheet.

## Brand Basis

- Corporate colors are based on the official UMPSA brand color page:
  - Turquoise Green: `rgb(0, 162, 162)` / `#00A2A2`
  - Blue: `rgb(24, 74, 146)` / `#184A92`
  - Yellow: `rgb(255, 213, 0)` / `#FFD500`
  - White: `rgb(255, 255, 255)` / `#FFFFFF`
- Corporate font is Swiss721. The CSS declares `Swiss721` first and falls back to `Arial`, `Helvetica Neue`, and `sans-serif` so systems still render cleanly when the licensed font is not installed.
- Jawi/Arabic typography uses `Arial Arabic Bold` where available.

## Setup

This repository is prepared as a Laravel 13 project. Install PHP 8.3+, Composer, Node.js, and npm/pnpm, then run:

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```

For production assets:

```bash
npm run build
```

## CSS Entry Points

- `resources/css/umpsa.css` contains the UMPSA design tokens, components, and utilities.
- `resources/css/app.css` imports `umpsa.css` for Laravel Vite.
- `resources/views/home.blade.php` shows a preview/reference page for system teams.

