Symfony test
========================
Simple web service without content negotiation and versioning.

The algorithem checks for:
- duplicate numbers on each row
- duplicate numbers on each column
- duplicate numbers on each box (cube)

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
 Each array represents a full row from 0 to 8.
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



Postman example
========================
Import the json in Postman app:
```json
{
	"id": "810a8dab-55c0-9efa-87a1-31aaf48fcf56",
	"name": "Affinitas",
	"description": "",
	"order": [
		"c2fb61ad-f8fe-ed03-6e6f-3314f747a43a",
		"3c4748a7-773d-4c34-9cd7-a532f09013a9"
	],
	"folders": [],
	"timestamp": 1484926727914,
	"owner": 0,
	"public": false,
	"requests": [
		{
			"id": "3c4748a7-773d-4c34-9cd7-a532f09013a9",
			"headers": "Content-Type: application/json\n",
			"url": "http://affinitas.machine/api/finished",
			"preRequestScript": null,
			"pathVariables": {},
			"method": "POST",
			"data": [],
			"dataMode": "raw",
			"version": 2,
			"tests": null,
			"currentHelper": "normal",
			"helperAttributes": {},
			"time": 1484961332082,
			"name": "isSudokuFinished",
			"description": "",
			"collectionId": "810a8dab-55c0-9efa-87a1-31aaf48fcf56",
			"responses": [],
			"rawModeData": "{\r\n\t\"board\": [{\r\n\t\t\t\"0\": 7,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": null,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": 4,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": 5,\r\n\t\t\t\"7\": 3,\r\n\t\t\t\"8\": null\r\n\t\t},\r\n\r\n\t\t{\r\n\t\t\t\"0\": null,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": 5,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": null,\r\n\t\t\t\"5\": 8,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": 1,\r\n\t\t\t\"8\": null\r\n\t\t}, {\r\n\t\t\t\"0\": null,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": 8,\r\n\t\t\t\"3\": 5,\r\n\t\t\t\"4\": null,\r\n\t\t\t\"5\": 9,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": 4,\r\n\t\t\t\"8\": null\r\n\t\t}, {\r\n\t\t\t\"0\": 5,\r\n\t\t\t\"1\": 3,\r\n\t\t\t\"2\": 9,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": 6,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": null,\r\n\t\t\t\"8\": 1\r\n\t\t}, {\r\n\t\t\t\"0\": null,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": null,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": 1,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": null,\r\n\t\t\t\"8\": 5\r\n\t\t},\r\n\r\n\t\t{\r\n\t\t\t\"0\": 8,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": null,\r\n\t\t\t\"3\": 7,\r\n\t\t\t\"4\": 2,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": 9,\r\n\t\t\t\"7\": null,\r\n\t\t\t\"8\": null\r\n\t\t},\r\n\r\n\t\t{\r\n\t\t\t\"0\": 9,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": 7,\r\n\t\t\t\"3\": 4,\r\n\t\t\t\"4\": null,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": null,\r\n\t\t\t\"8\": null\r\n\t\t},\r\n\r\n\t\t{\r\n\t\t\t\"0\": null,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": null,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": 5,\r\n\t\t\t\"5\": 7,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": null,\r\n\t\t\t\"8\": null\r\n\t\t},\r\n\r\n\t\t{\r\n\t\t\t\"0\": 6,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": null,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": null,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": 5,\r\n\t\t\t\"8\": null\r\n\t\t}\r\n\r\n\t]\r\n}"
		},
		{
			"id": "c2fb61ad-f8fe-ed03-6e6f-3314f747a43a",
			"headers": "Content-Type: application/json\n",
			"url": "http://affinitas.machine/api/validate",
			"preRequestScript": null,
			"pathVariables": {},
			"method": "POST",
			"data": [],
			"dataMode": "raw",
			"tests": null,
			"currentHelper": "normal",
			"helperAttributes": {},
			"time": 1484961327977,
			"name": "Validate Soduko",
			"description": "",
			"collectionId": "810a8dab-55c0-9efa-87a1-31aaf48fcf56",
			"responses": [],
			"rawModeData": "{\r\n\t\"board\": [{\r\n\t\t\t\"0\": 7,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": null,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": 4,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": 5,\r\n\t\t\t\"7\": 3,\r\n\t\t\t\"8\": null\r\n\t\t},\r\n\r\n\t\t{\r\n\t\t\t\"0\": null,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": 5,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": null,\r\n\t\t\t\"5\": 8,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": 1,\r\n\t\t\t\"8\": null\r\n\t\t}, {\r\n\t\t\t\"0\": null,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": 8,\r\n\t\t\t\"3\": 5,\r\n\t\t\t\"4\": null,\r\n\t\t\t\"5\": 9,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": 4,\r\n\t\t\t\"8\": null\r\n\t\t}, {\r\n\t\t\t\"0\": 5,\r\n\t\t\t\"1\": 3,\r\n\t\t\t\"2\": 9,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": 6,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": null,\r\n\t\t\t\"8\": 1\r\n\t\t}, {\r\n\t\t\t\"0\": null,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": null,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": 1,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": null,\r\n\t\t\t\"8\": 5\r\n\t\t},\r\n\r\n\t\t{\r\n\t\t\t\"0\": 8,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": null,\r\n\t\t\t\"3\": 7,\r\n\t\t\t\"4\": 2,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": 9,\r\n\t\t\t\"7\": null,\r\n\t\t\t\"8\": null\r\n\t\t},\r\n\r\n\t\t{\r\n\t\t\t\"0\": 9,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": 7,\r\n\t\t\t\"3\": 4,\r\n\t\t\t\"4\": null,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": null,\r\n\t\t\t\"8\": null\r\n\t\t},\r\n\r\n\t\t{\r\n\t\t\t\"0\": null,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": null,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": 5,\r\n\t\t\t\"5\": 7,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": null,\r\n\t\t\t\"8\": null\r\n\t\t},\r\n\r\n\t\t{\r\n\t\t\t\"0\": 6,\r\n\t\t\t\"1\": null,\r\n\t\t\t\"2\": null,\r\n\t\t\t\"3\": null,\r\n\t\t\t\"4\": null,\r\n\t\t\t\"5\": null,\r\n\t\t\t\"6\": null,\r\n\t\t\t\"7\": 5,\r\n\t\t\t\"8\": null\r\n\t\t}\r\n\r\n\t]\r\n}"
		}
	]
}
```


 
