<?php
abstract class TariffAbstract implements TariffInterface
{
  protected $pricePerKilometr;
  protected $pricePerMinutes;
  protected $distance;
  protected $minutes;
  /** @var ServiceInterfaces[]  */
  protected $services = [];

  public function __construct(int $distance, int $minutes)
  {

    $this->distance = $distance;
    $this->minutes = $minutes;
  }

  public function countPrice(): int
  {
    var_dump($this->pricePerKilometr);
    $price = $this->distance * $this->pricePerKilometr + $this->minutes * $this->pricePerMinutes;

    if ($this->services) {
      foreach ($this->services as $service) {
        $service->apply($this, $price);
      }
    }

    return $price;
  }

  public function addService(ServiceInterface $service): TariffInterface
  {
    array_push($this->services, $service);
    return $this;
  }

  public function getMinutes(): int
  {
    return $this->minutes;
  }

  public function getDistance(): int
  {
    return $this->distance;
  }
}