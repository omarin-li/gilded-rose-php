<?php

class BrieAger implements Ager
{
    const QUALITY_MODIFIER = 0;
    public function ageItem(\GildedRose\Item $item)
    {
        return QUALITY_MODIFIER;
    }
}