@servers(['web' => ['8452551@89.46.111.51'], 'local' => ['127.0.0.1']])

@task('prova', ['on' => 'local'])
php artisan migrate:fresh && php artisan db:seed
@endtask

@task('provaweb', ['on' => 'web'])
php artisan migrate:fresh && php artisan db:seed
@endtask
