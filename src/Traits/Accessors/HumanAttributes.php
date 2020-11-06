<?php

namespace  Fytinnovations\LaravelTopping\Traits\Accessors;

use Exception;

trait HumanAttributes
{
    /**
     * Name of the date of birth attribute on your model
     *
     * protected $dateOfBirthColumn;
     */

    public function getAgeAttribute()
    {
        if (!property_exists(get_called_class(), 'dateOfBirthColumn')) {
            throw new Exception(sprintf(
                'You must define a $dateOfBirthColumn property in %s to use the Human Attributes trait.',
                get_called_class()
            ));
        }
        return date_diff(date_create($this->{$this->dateOfBirthColumn}), date_create('today'))->y;
    }
}
