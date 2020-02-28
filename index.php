<?php

class Car
{
  private $name;
  private $number;
  private $color;

  public function __construct($name, $number, $color)
  {
    $this->name = $name;
    $this->number = $number;
    $this->color = $color;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  function getNumber()
  {
    return $this->number;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function infomation()
  {
    echo '車の種類:' . $this->name . '、' . '車体番号:' . $this->number . '、' . 'カラー:' . $this->color . 'です。';
  }
}

// 以下にCarクラスを継承したTaxiクラスを記述して下さい
class Taxi extends Car
{
  private $passenger;

  public function getPassenger()
  {
    return $this->passenger;
  }

  // 人を乗せる動作
  public function pickUp($passenger)
  {
    return $this->passenger = $passenger;
  }

  // 人を下ろす動作
  public function lower($passenger)
  {
    if ($this->passenger - $passenger > 0) {
      $this->passenger -= $passenger;
      echo $passenger . '人降車しました。';
    } else {
      echo '降車人数に誤りがあります。';
    }
  }

  public function infomation()
  {
    echo '車の種類:' . $this->getName() . '、' . '車体番号:' . $this->getNumber() . '、' . 'カラー:' . $this->getColor() . '、乗車人数は' . $this->getPassenger() . '人です。';
  }
}


// 以下を実行した時にエラーがでないようにして下さい
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 一人降車
$taxi1->lower(2);