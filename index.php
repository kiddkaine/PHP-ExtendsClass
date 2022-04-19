<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Обучение PHP</title>
	</head>
	<body align="center">
		<?php
			class People
			{
				function __construct(public $name)
				{
					$this -> name = $name;
				}

				function __destruct()
				{
					echo "<i>Вызывается деструктор...</i><br>";
				}
				function DisplayInfo()
				{
					echo "Имя пользователя: $this->name<br>";
				}
			}

			class Employee extends People
			{
				function __construct(public $name, public $position)
				{
					parent::__construct($name);
					$this -> position = $position;
				}

				function DisplayInfo()
				{
					parent::DisplayInfo();
					echo "Должность сотрудника: $this->position<br>";
				}
			}

			$people = new People("@UserName");
			$employee = new Employee("Иван Иванов", "Пожарник");

			$people -> DisplayInfo();
			echo "<br>";

			$employee -> DisplayInfo();
			echo "<br>";
		?>
	</body>
</html>