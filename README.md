# sicas-wrapper
<h1 align="center">Sicas Web Service Integration</h1>

<p align="center">This repository provides a PHP class for integrating with the Sicas web service.</p>

<p align="center">
    <img alt="PHP Version" src="https://img.shields.io/badge/PHP-%3E%3D7.0-%23777BB4?style=flat-square">
</p>

## Description

This repository contains a PHP class, `Sicas`, that facilitates communication with the Sicas web service. It provides methods for creating records and retrieving functions. The class supports various configuration options and allows you to customize the data sent to the web service.

## Installation

To use the `Sicas` class in your project, follow these steps:

1. Install PHP version 7.0 or above.
2. Include the `Sicas.php` file in your project directory.
3. Import the `Sicas` namespace in your PHP file:

    ```php
    use Sicas\Sicas;
    ```

4. Create an instance of the `Sicas` class, providing your Sicas web service credentials:

    ```php
    $sicas = new Sicas('your_username', 'your_password');
    ```

## Usage

### Creating a Record

To create a new record using the Sicas web service, use the `create()` method. Set the required properties and data before calling this method:

```php
$sicas->setCatalog('your_catalog');
$sicas->setData([
    'IDCont' => 'contact_id',
    'IDRelDir' => 'related_directory_id',
]);

$sicas->setProperties([
    'PropertyTypeProcess' => 'WS_SaveData',
    'PropertyTypeData' => '',
]);

$result = $sicas->create();

if (!empty($result)) {
    $recordId = $result['id'];
    $message = $result['message'];
    $response = $result['response'];
    // Process the response data
} else {
    // Handle error
}
API Documentation
For detailed documentation on the Sicas web service API, refer to the official documentation provided by Sicas.

Code Examples
For more code examples and usage scenarios, please refer to the examples directory in this repository.

Contributing
Contributions are welcome! Please read the contributing guidelines for more information.

License
This project is licensed under the MIT License.

Contact
For any inquiries or support, please contact us at cazares.jose.gm@gmail.com.
