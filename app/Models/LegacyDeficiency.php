<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegacyDeficiency extends Model
{
    /**
     * @var string
     */
    protected $table = 'cadastro.deficiencia';

    /**
     * @var string
     */
    protected $primaryKey = 'cod_deficiencia';

    /**
     * @var bool
     */
    public $timestamps = false;
}
