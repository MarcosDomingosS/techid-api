<?php
namespace App\Repositories;
use App\Models\Sed;

/**
 * @extends Repository<Sed>
 */

class SedRepository extends Repository{
    protected string $model = Sed::class;
}