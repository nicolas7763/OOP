<!DOCTYPE html>
<html>
<head>
	<title>ООП</title>
</head>
<body>
<p>Как я нонимаю определение инкапсуляции? Само смешное, что ООП существует для
облегчения жизни программерам. Нафига исполизовать столько непонятных слов? </p>
<p>Инкапсуляция это когда, как я понял, метод(это что -то типа функции) не доступен без объекта.</p>
<p>Т.е метод *гулять* не доступен без объекта *планы на вечер* И нужна эта штука ,чтобы меньше косячить в коде.</p>
<p>Если никогда с ООП не сталкивался, то нихрена ничего не понятно, нужна практика чтобы хоть что-нибудь понять.Вообще, все что связано с ООП поначалу один большой минус. Пока особых плюсов не вижу, но , надеюсь что это только пока. Может я и неправильно ответил на вопрос, зато правду.</p>
</body>
</html>


<?php
/**
* 
*/
class Room
{
	public $color ='белая';
	public function getColor()
	{
		echo $this->color;
	}

	public $size ='20квм';
	public function changeSize($size)
	{
		echo $this->size = $size;
	}
	public $location ='Rostov';
	public function getLocation()
	{
		echo $this->location;
	}
}

$myRoom = new Room();
$myRoom->getColor();
echo "<br />";
$myRoom->changeSize('50квм');
echo "<br />";
$myRoom->getLocation();
echo "<br />";

/**
* 
*/
class Comp 
{
	public $model = 'hp pavilion';
	public function getModel()
	{
		echo $this->model;
	}

	public $displaySize = '17 дюймов';
    public function changeDisplaySize($displaySize)
    {
    	echo $this->displaySize = $displaySize;
    }
    public $type = 'notebook';
    public function getType()
    {
    	echo $this->type;
    }

}
$myComp = new Comp();
$myComp->getModel();
echo "<br />";
$myComp->changeDisplaySize('15 юймов');
echo "<br />";
$myComp->getType();
echo "<br />";


/**
* 
*/
class Cars 
{
	public $model ="BMV";
	public function getModel()
	{
		echo $this->model;
	}
	public $model2 = 'Lexus';
	public function getModel2()
	{
		echo $this->model2;
	}
	public $model3 = 'KAMAZ';
	public function getModel3()
	{
		echo $this->model3;
	}

}
$difCars = new Cars();
$difCars->getModel();
echo "<br />";
$difCars->getModel2();
echo "<br />";
$difCars->getModel3();
echo "<br />";

/**
* 
*/
class CNC
{
	public $typeCnc = 'Лазерный';
	public function getTypeCnc()
	{
		echo $this->typeCnc;
	}
	public $typeCnc2 = 'Фрезерный';
	public function getTypeCnc2()
	{
		echo $this->typeCnc2;
	}
	public $typeCnc3 = 'Плазменный';
	public function getTypeCnc3()
	{
		echo $this->typeCnc3;
	}
}
$enemyCNC = new CNC();
$enemyCNC->getTypeCnc();
echo "<br />";
$enemyCNC->getTypeCnc2();
echo "<br />";
$enemyCNC->getTypeCnc3();
?>
