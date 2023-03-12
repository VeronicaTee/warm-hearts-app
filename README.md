# Bitcoin/Lightning Donation System

This is a donation system that allows users to make donations with Bitcoin. Users can view a list of available projects/causes and select the one they want to donate towards. They can then donate to the selected charity case and make a payment using Bitcoin.

## Technologies Used

- Laravel (PHP framework)
- Bitcoin Core

## Getting Started

To get started with this project, follow these steps:

1. Clone the repository.
2. Install the required dependencies using Composer: `composer install`.
3. Create a `.env` file by copying the `.env.example` file: `cp .env.example .env`.
4. Generate a new application key: `php artisan key:generate`.
5. Set up a Bitcoin Core node or connect to an existing one by updating the `BITCOIN_*` variables in the `.env` file.
6. Run bitcoind, and load a wallet to use.
7. Start the Laravel development server: `php artisan serve`.

## API Endpoints

### `GET /causes`

Returns a list of causes available for donation.

### `GET /causes/{id}`

Returns information about a specific charity case, including the donation goal.

### `POST /addresses`

Generates a Bitcoin address for the selected charity and returns the bitcoin address to the client for payment.

### `GET /donate`

Returns a view with a form that takes in some user input.


## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

