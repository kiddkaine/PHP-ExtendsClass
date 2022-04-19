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
			class Users
			{
				function __construct(public $id, public $username, public $password) // Объявляем конструктор
				{
					$this -> id = $id;
					$this -> username = $username;
					$this -> password = $password;
				}

				function DisplayInfo() // Создаём метод вывода информации
				{
					echo "<p>ID пользователя: $this->id</p><br>";
					echo "<p>Логин пользователя: $this->username</p><br>";
					echo "<p>Пароль пользователя: $this->password</p><br>";
				}
			}

			class Employees extends Users // Наследование класса Employees от Users
			{
				function __construct(public $id, public $username, public $password, public $position)
				{
					parent::__construct($id, $username, $password); // Обращение к родительскому классу через ключевое слово parent:: (Можно и "Имя класса"::)
					$this -> position = $position;
				}

				function DisplayInfo()
				{
					parent::DisplayInfo(); // Обращение к родительскому классу через ключевое слово parent:: (Можно и "Имя класса"::)
					echo "<p>Должность сотрудника: $this->position</p><br>";
				}
			}

			echo "<h2>Класс Users</h2><br>";
			$users = new Users(5507, "UserName123", "0wOnjNSB6ZC6"); // Инициализируем переменные в конструкторе Users
			$users -> DisplayInfo();

			echo "<h2>Класс Employees</h2><br>";
			$employees = new Employees(8900, "NickName321", "XUbehjPvMf98", "Полицейский"); // Инициализируем переменные в конструкторе Employees
			$employees -> DisplayInfo();
		?>
	</body>
</html>