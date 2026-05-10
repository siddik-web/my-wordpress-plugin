# My WordPress Plugin

A sample WordPress plugin demonstrating modern development practices, including PSR-4 autoloading, WordPress Coding Standards (WPCS), and automated CI with GitHub Actions.

## Features

- **PSR-4 Autoloading**: Uses Composer for efficient class loading.
- **WordPress Coding Standards**: Configured with PHPCS and WPCS for high-quality, consistent code.
- **Automated Testing**: Includes PHPUnit for unit testing.
- **GitHub Actions CI**: Continuous Integration workflow that runs linting and tests on every push.

## Requirements

- PHP: 7.0 or higher
- Composer
- WordPress: 5.0 or higher (recommended)

## Installation

1. Clone the repository into your WordPress plugins directory:
   ```bash
   git clone https://github.com/siddik-web/my-wordpress-plugin.git
   ```
2. Navigate to the plugin directory:
   ```bash
   cd my-wordpress-plugin
   ```
3. Install dependencies:
   ```bash
   composer install
   ```
4. Activate the plugin through the WordPress Admin dashboard.

## Development

### Coding Standards

This project follows the [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).

- **Check for issues**:
  ```bash
  composer phpcs
  ```
- **Automatically fix issues**:
  ```bash
  composer phpcbf
  ```

### Running Tests

Unit tests are written with PHPUnit.

```bash
composer test
```

## Project Structure

- `src/`: Contains the plugin's core PHP classes (PSR-4).
- `tests/`: Unit tests for the plugin.
- `my-wordpress-plugin.php`: Main plugin entry file.
- `phpcs.xml`: Configuration for PHP_CodeSniffer.
- `phpunit.xml.dist`: Configuration for PHPUnit.
- `.github/workflows/`: GitHub Actions CI configuration.

## License

This project is licensed under the GPL-2.0-or-later License.

## Author

- **MD Siddiqur Rahman** - [siddikcoder@gmail.com](mailto:siddikcoder@gmail.com)
