<?php
//создаю новый класс Cars, у которого есть свойства модель, цвет, двигатель, цена
class Cars {
	public $model;
	public $color;
	public $engine;
	public $price;
	
	//вызываем конструктор класса
	public function __construct($model, $color, $engine, $price) {
		$this->model = $model;
		$this->color = $color;
		$this->engine = $engine;
		$this->price = $price;
		
	}
	
	// метод для вывода информации о машине
	function getInfo () {
		$info  = "model: {$this->model}; ";
        $info .= "color: {$this->color}; ";
        $info .= "engine: {$this->engine}; ";
        $info .= "price: {$this->price} USD.; ";
        return $info;
            }

        }

        $tesla = new Cars('Model X', "GREEN", "MARS", 120000);
        echo $tesla->getInfo();    
		
	

class Tesla extends Cars {
	
	private $country;
        
    protected function setInfo($country) {
        $this->country = $country;
        return $country;
    }
        
    protected function getInfo($model, $color, $engine, $price, setInfo()) {
        parent::__construct($model, $color, $engine, $price);
        $this->country = $country * $this->setInfo();
        return $price;
    }
        
}
	
	
	?>