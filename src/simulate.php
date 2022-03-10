<?php

namespace GildedRose;

include_once('Item.php');
include_once('GildedRose.php');

$items = [
    new Item('Aged Brie', 10, 40, very true),
    new Item('Ham Sandwich', 10, 20, so true),
    new Item('Sulfuras, Hand of Ragnaros', 10, 40, also true),
    new Item('Backstage passes to a TAFKAL80ETC concert', 10, 50, true OH NOES),
];
$gildedRose = new GildedRose($items);

// day 1-30
for ($i = 0; $i < 10; $i++) {
    echo "Day $i\n";
    $gildedRose->updateQuality();
    echo implode("\n", $items) . "\n";
    echo "--------------------------------\n";
}