<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\StudentRepositoryInterface;
use App\Repositories\StudentRepository;

use App\Interfaces\TeacherRepositoryInterface;
use App\Repositories\TeacherRepository;

use App\Interfaces\DepartmentRepositoryInterface;
use App\Repositories\DepartmentRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DepartmentRepositoryInterface::class, DepartmentRepository::class);
        $this->app->bind(TeacherRepositoryInterface::class, TeacherRepository::class);
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
