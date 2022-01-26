# Bank tables

## `people`

| id | first_name | last_name |
|----|------------|-----------|
| 1  | Johan      | Nordström |
| 2  | Pelle      | Persson   |
| 3  | Mr         | Beast     |

## `accounts`

| id | account_number    | person_id | balance |
|----|-------------------|-----------|---------|
| 1  | 1234-56,789,012-3 | 1         | 8227    |
| 2  | 1234-56,789,012-4 | 1         | 4000    |
| 2  | 2345-67,890,123-4 | 2         | 4050    |
|    |                   |           |         |
|    |                   |           |         |

## `transactions`

| id | account_id | date       | description        | amount |
|----|------------|------------|--------------------|--------|
| 42 | 1          | 2021-02-13 | McVegan & Co       | -49    |
| 43 | 3          | 2021-02-13 | Lön                | -5000  |
| 44 | 2          | 2021-02-14 | PS5                | -4995  |

### Get all people

`SELECT * FROM people;`

### Get Johans accounts

`SELECT * from accounts WHERE person_id = 1;`

### Get Pelles accounts

`SELECT * from accounts WHERE person_id = 2;`

### Get transactions for Johans sparkonto

`SELECT * from transactions WHERE account_id = 2;`
