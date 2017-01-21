Symfony test
========================

There are two api endpoints:

1- /api/validate

POST Accepts json array of Sudoku board.

RETURNS 204 No Content

Will validate Sudoku board 

2- /api/finished

POST Accepts json array of Sudoku board.

RETURNS 204 No Content

Will validate Sudoku board plus check if the board is finished by checking for empty cells.


 Suduko board json array must be in this format:
```json
{
	"board": [{
			"0": 7,
			"1": null,
			"2": null,
			"3": null,
			"4": 4,
			"5": null,
			"6": 5,
			"7": 3,
			"8": null
		},

		{
			"0": null,
			"1": null,
			"2": 5,
			"3": null,
			"4": null,
			"5": 8,
			"6": null,
			"7": 1,
			"8": null
		}, {
			"0": null,
			"1": null,
			"2": 8,
			"3": 5,
			"4": null,
			"5": 9,
			"6": null,
			"7": 4,
			"8": null
		}, {
			"0": 5,
			"1": 3,
			"2": 9,
			"3": null,
			"4": 6,
			"5": null,
			"6": null,
			"7": null,
			"8": 1
		}, {
			"0": null,
			"1": null,
			"2": null,
			"3": null,
			"4": 1,
			"5": null,
			"6": null,
			"7": null,
			"8": 5
		},

		{
			"0": 8,
			"1": null,
			"2": null,
			"3": 7,
			"4": 2,
			"5": null,
			"6": 9,
			"7": null,
			"8": null
		},

		{
			"0": 9,
			"1": null,
			"2": 7,
			"3": 4,
			"4": null,
			"5": null,
			"6": null,
			"7": null,
			"8": null
		},

		{
			"0": null,
			"1": null,
			"2": null,
			"3": null,
			"4": 5,
			"5": 7,
			"6": null,
			"7": null,
			"8": null
		},

		{
			"0": 6,
			"1": null,
			"2": null,
			"3": null,
			"4": null,
			"5": null,
			"6": null,
			"7": 5,
			"8": null
		}

	]
}
```

Vagrant
========================

Vagrant Homestead Per Project installation is used:

https://laravel.com/docs/5.3/homestead#per-project-installation

After running composer install run vagrant up.If any errors delete Homestead.yaml and Vagrantfile and /vendor/laravel/homestead then follow the instructions in:

https://laravel.com/docs/5.3/homestead#per-project-installation


 
