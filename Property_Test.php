<?php
/***************************************************************************
"Write a class that will represent a rental property such as an apartment,
house, or office building.  The class, when included by the attached sample
script, should run without errors or modifications."
****************************************************************************/
/********
Test
*****/

include('Property.php');

$obj = new Property ();
$obj->setName ('My Property 2');
$obj->price = 2500.00;
$obj ['address_primary'] = '100 Main St';
$obj->address_secondary = 'STE 100';
$obj->city = 'Townsville';
$obj->state = 'VA';
$obj->setZip (12345);

echo 'Name :: ', $obj->name, PHP_EOL;
echo 'Price :: $', $obj ['price'], PHP_EOL;
echo 'Address :: ', $obj->address_primary, ' ', $obj->getAddressSecondary (), PHP_EOL;
echo 'City, State, Zip :: ', $obj->city, ', ', $obj ['state'], ' ', $obj->getZip ();