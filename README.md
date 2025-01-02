## Laravel Backend2

Slumber API Client
https://slumber.lucaspickering.me/book/introduction.html

Bruno API Client:
https://docs.usebruno.com/get-started/variables/runtime-variables#example

## Installation
Install PHP, Composer, and Laravel installer:
https://laravel.com/docs/11.x#creating-a-laravel-project

Download then go into this project folder
Install dependencies:
```
pnpm install
```
Run the Laravel backend:
```
pnpm vite build
composer run dev
```

Run Slumber API client:
```
slumber
```
Test `hello`

Test `get_scrf_token`
Should expect something like:
returned Body
```
{
	"csrf_token": "abc123..."
}
```
returned Headers:
```
host	localhost:8000
x-powered-by	PHP/8.4.1
cache-control	no-cache, private
date	02 Jan 2025 ...
contect-type	application/json
set-cookie	XSRF-TOKEN=...
set-cookie	laravel_session=...
```

Test `send_txn`
Outgoing Header:
```
contect-type	application/json
x-csrf-token	abc123...
```
Should expect something like:
`419 <unknown status code>`
returned Body
```
... Page Expired ...
```
returned Headers
```
host	localhost:8000
connection	close
x-powered-by	PHP/8.4.1
cache-control	no-cache, private
date	02 Jan 2025 ...
contect-type	text/html; charset=UTF-8
set-cookie	laravel_session=...
```



