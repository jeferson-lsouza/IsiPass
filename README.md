# IsiLog Library 

[![Maintainer](http://img.shields.io/badge/maintainer-@Jeferso28179293-blue.svg?style=flat-square)](https://twitter.com/Jeferso28179293)
[![Source Code](http://img.shields.io/badge/source-jeferson-lsouza/isipass-blue.svg?style=flat-square)](https://github.com/jeferson-lsouza/isipass)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/jeferson-lsouza/isipass.svg?style=flat-square)](https://packagist.org/packages/jeferson-lsouza/isipass)
[![Latest Version](https://img.shields.io/github/release/jeferson-lsouza/isipass.svg?style=flat-square)](https://github.com/jeferson-lsouza/isipass/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/jeferson-lsouza/isipass.svg?style=flat-square)](https://scrutinizer-ci.com/g/jeferson-lsouza/isipass)
[![Quality Score](https://img.shields.io/scrutinizer/g/jeferson-lsouza/isipass.svg?style=flat-square)](https://scrutinizer-ci.com/g/jeferson-lsouza/isipass)
[![Total Downloads](https://img.shields.io/packagist/dt/jeferson-lsouza/isipass.svg?style=flat-square)](https://packagist.org/packages/jeferson-lsouza/isipass)

###### IsiPass Library 
IsiPass Library is a set of classes developed for password creation and verification.
IsiPass Library é um conjunto de classes desenvolvidas para a criação e verificação de senhas.


### Highlights

- Simple installation (Instalação simples)
- Easy structuring and application (Fácil estruturação e aplicação)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Uploader is available via Composer:

```bash
"JefersonLSouza/IsiPass": "^1.0"
```

or run

```bash
composer require JefersonLSouza/IsiPass
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:
``

#### Create Password (Call): To create an encrypted password, just follow the example below:

```php
<?php

require __DIR__ . "/../vendor/autoload.php";

//My Password
$pass = '12345';
$url = new \Developers\Password();

//Call the method to create the password
$result = $url -> CreatePass($pass);

//Print
echo $result;


```
#### Verify Pass (Call) - To check if a password entered by the user is the same as that registered in the database, the following is an example:
```php
<?php

require __DIR__ . "/../vendor/autoload.php";

 $url = new \Developers\Password();
 
 //The user entered the password and the pass variable stores the value entered in the form.
 $pass = '12345';
 
 //The value of the hash variable would be coming from the database.
 $hash = '$2y$10$qfGfQRGVb5/YMy6mZ.oSgeBrLyDoZTzQSMLaqyIA3tE/5O4YJarhG';
 
 //Second: Verify Password
 $result = $url -> VerifyPass($pass, $hash);
 
 //Returns the value 1 if the verified password is true, otherwise only zero or empty, informing that the password entered is not the same.
 echo $result;

```
#### Generate Pass (Call) - 
To create a password automatically and randomly, follow the example:
```php
<?php

require __DIR__ . "/../vendor/autoload.php";

$url = new \Developers\Password();

//Generates the password randomly, including uppercase, lowercase, numbers and symbols.
$result = $url -> GeneratePass();

//Print
echo $result;


```
### Others

###### All the documentation of use with practical examples is available in the examples folder library. Please check there.

Toda documentação de uso com exemplos práticos está disponível na pasta examples desta biblioteca. Por favor, consulte lá.

## Contributing

Please see [CONTRIBUTING](https://github.com/JefersonLSouza/IsiPass/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email contato@interligsolucoes.com.br instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para contato@interligsolucoes.com.br em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Jeferson L. Souza](https://github.com/JefersonLSouza) (Developer)
- [Soluções Inteligentes](https://github.com/JefersonLSouza) (Team)
- [All Contributors](https://github.com/JefersonLSouza/IsiPass/contributors) (Power)

## License

The MIT License (MIT). Please see [License File](https://github.com/JefersonLSouza/IsiLogblob/master/LICENSE) for more information.
