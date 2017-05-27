## Service Dashboard

### Api Docs
> Browse: `/docs/index.html`

### Import Spreadsheet
> `storage/app/service_inventory_normalized.xlsx`

### Local Development
Best way to get things running locally is [Laravel Valet](https://laravel.com/docs/5.4/valet)

### Setup
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
