## Service Dashboard

### Api Docs
> Browse: `/docs/index.html`

### Import File
> `storage/app/service_inventory_normalized.xlsx`

```bash

# Run migrations
php artisan migrate

# Seed database
php artisan db:seed

# import data
php artisan import:data

# Regenerate API Docs
php artisan api:generate --routePrefix="api/*"

```
