<?php

namespace Fytinnovations\LaravelTopping\Tests\Fixtures;

use Fytinnovations\LaravelTopping\Traits\Accessors\HumanAttributes;
use Illuminate\Database\Eloquent\Model;

class PersonModel extends Model
{
    use HumanAttributes;

    public $dateOfBirthColumn = 'date_of_birth';

    protected $dates =['date_of_birth'];
}
