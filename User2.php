<?php
	class User2
	{
		private $name;
		private $age;
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
	    public function __get($property)
        {
           return  $this->$property;
        }
	}
$u2=new User2('Вероника',22);

echo $u2->age;