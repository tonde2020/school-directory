public function boot()
{
    parent::boot();

    $this->routes(function () {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        Route::middleware('web') // ✅ تحميل ملف admin.php
            ->prefix('admin')
            ->as('admin.')
            ->group(base_path('routes/admin.php'));
    });
}
