<?php

class Auto
{
    /**
     * @var int
     */
    private int $zitplaatsen = 2;
    /**
     * @var string
     */
    private string $kleur='geel';
    /**
     * @var int
     */
    private int $passagiers=0;
    /**
     * @var int
     */
    public int $snelheid = 0;

    public function __construct(int $zitplaatsen = 4, string $kleur='roze' )
    {
        $this->zitplaatsen = $zitplaatsen;
        $this->kleur = $kleur;
    }

    /**
     * Voeg een passagier toe en geef terug hoeveel mensen er nu zijn.
     * @return int
     */
    public function nieuwe_passagier(): int
    {
        if ( $this->passagiers >= $this->zitplaatsen ) {
            echo 'Er zitten al genoeg passagiers in de auto.';
            return $this->passagiers;
        }
        $this->passagiers++;
        return $this->passagiers;
    }

    /**
     * Pas de snelheid aan
     *
     * @param int $speed
     * @return int
     */
    public function versnel(int $speed = 0): int
    {
        $this->snelheid += $speed;

        return $this->snelheid;
    }

    /**
     * Verminder de snelheid
     *
     * @param int $kracht
     * @return int
     */
    public function rem(int $kracht =  0): int
    {
        $this->snelheid -= $kracht;
        return $this->snelheid;
    }

    /**
     * Haal de snelheid op
     *
     * @return int
     */
    public function get_speed(): int
    {
        return $this->snelheid;
    }

    /**
     * Haal het aantal passagiers op
     *
     * @return integer
     */
    public function aantal_passagiers() : int {
        return $this->passagiers;
    }
}


/**
 * Deze class extends de auto class
 * Daarnaast zorgt hij dat de snelheid minder op loopt.
 */
class Volvo extends Auto {
    /**
     * Pas de snelheid aan
     *
     * @param int $speed
     * @return int
     */
    public function versnel(int $speed = 0): int
    {
        $this->snelheid += ( $speed / 2 );

        return $this->snelheid;
    }
}



$bmw = new Auto(2, 'rood');
$volvo = new Volvo(4, 'rood');

echo 'bmw snelheid=' . $bmw->get_speed() . '<br>';
$bmw->versnel(30);
echo 'bmw snelheid=' . $bmw->get_speed() . '<br>';

echo 'volvo snelheid=' . $volvo->get_speed() . '<br>';
$volvo->versnel(30);
echo 'volvo snelheid=' . $volvo->get_speed() . '<br>';


$bmw->nieuwe_passagier();
echo 'bmw passagiers=' . $bmw->aantal_passagiers() . '<br>';
$bmw->nieuwe_passagier();
$bmw->nieuwe_passagier();
$bmw->nieuwe_passagier();
$bmw->nieuwe_passagier();
$bmw->nieuwe_passagier();
echo 'bmw passagiers=' . $bmw->aantal_passagiers() . '<br>';