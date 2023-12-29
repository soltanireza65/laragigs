## Cheatsheet

create model and migration with artisan

```bash
php artisan make:model Listing -m
```

seed the database

```bash
php artisan db:seed
```

refresh db and run seeder

```bash
php artisan migrate:fresh --seed
```