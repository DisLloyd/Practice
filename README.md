# Store — Laravel 12 E-Commerce

Built incrementally per `MASTER_PROMPT.md`. This is the result of **Increment 1**.

## Local setup

Requires PHP 8.2+, Composer, and Node 18+.

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite   # SQLite is the default driver
php artisan migrate --seed
npm install
npm run dev
```

Then in a second terminal:

```bash
php artisan serve
```

Visit http://localhost:8000.

### Seeded accounts

| Role     | Email               | Password |
|----------|----------------------|----------|
| Admin    | admin@example.com    | password |
| Customer | customer@example.com | password |

## What's in this increment

- Fresh Laravel 12 project (Blade + Tailwind CSS v4 + Vite)
- Full authentication: register, login, logout, forgot/reset password, email verification hook, profile edit + account deletion
- `role` column on `users` (`customer` / `admin`) and an `admin` route middleware for the dashboard coming in Increment 8
- Core database schema: `categories`, `products`, `product_images`, `carts`, `cart_items`, `orders`, `order_items`, `payments`, `reviews`, `wishlists` — all migrations + Eloquent models with relationships defined
- Minimal, Apple/Stripe-inspired layout (`layouts.app`, `layouts.guest`) and reusable Blade components (`x-text-input`, `x-primary-button`, `x-input-error`, etc.) that later increments will reuse for the storefront

## Not in this increment

Storefront, catalog, cart, checkout, Stripe, inventory UI, reviews UI, wishlist UI, admin dashboard, analytics — these are Increments 2–9 per the roadmap.
