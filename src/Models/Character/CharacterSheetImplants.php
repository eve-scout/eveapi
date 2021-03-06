<?php
/*
This file is part of SeAT

Copyright (C) 2015, 2016  Leon Jacobs

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

namespace Seat\Eveapi\Models\Character;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CharacterSheetImplants
 * @package Seat\Eveapi\Models
 */
class CharacterSheetImplants extends Model
{

    /**
     * @var string
     */
    protected $table = 'character_character_sheet_implants';

    /**
     * @var array
     */
    protected $fillable = ['characterID', 'typeID', 'typeName'];

    /**
     * Returns the character the Implant belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function character()
    {

        return $this->belongsTo(
            CharacterSheet::class, 'characterID', 'characterID');
    }
}
