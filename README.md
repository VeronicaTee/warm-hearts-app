# Bitcoin/Lightning Donation System

This is a donation system that allows users to make donations using either Bitcoin or the Lightning Network. Users can view a list of available digital products and select the one they want to donate towards. They can then generate a Bitcoin or Lightning invoice for the selected product and make a payment using their preferred payment method.

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
6. Set up a Lightning node or connect to an existing one by updating the `LND_*` variables in the `.env` file.
7. Start the Laravel development server: `php artisan serve`.

## API Endpoints

### `GET /causes`

Returns a list of digital products available for purchase.

### `GET /causes/{id}`

Returns information about a specific product, including the price in Bitcoin and/or Lightning.

### `POST /addresses`

Generates a Bitcoin address for the selected product and returns details to the client.

### `GET /donate`

Returns a view with a form that takes in some user input.

### `POST /donate/generate-address`

Submits the form from the `/donate` view and generates a Bitcoin address for the specified amount.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

