<?php

namespace Zman\Moadim;

trait Omer
{
    /**
     * The Omer goes from 1 to 49 from Pesach to Shavuos.
     *
     * @return bool
     */
    public function getOmerCount()
    {
        $count = (int) $this->diffInDays(
            static::firstDayOfPesach($this->jewishYear),
            true
        );

        return $count > 0 && $count < 50 ? $count : null;
    }
}
