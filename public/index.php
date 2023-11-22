<?php


class Auto
{

    // Properties
    private string $name;
    private string $color = 'rood';

    /**
     * Hier stel ik de naam in
     *
     * @param string $name
     * @return void
     */
    function set_name(string $name = 'mini'): string
    {
        $this->name = $name;
        return $this->name;
    }

    /**
     * Haal de naam op
     *
     * @return string
     */
    function get_name(): string
    {
        return $this->name;
    }
}


$mijnAuto = new Auto();
$mijnAuto->set_name('herby');

$anderAuto = new Auto();
$anderAuto->set_name('henk');

echo $anderAuto->get_name();
