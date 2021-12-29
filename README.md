# About

[PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) standard adding some sniffs I created myself.

## Included sniffs

* No trailing commas in array declarations (I hate those)

## Install

```sh
$ composer require --dev madpilot78/mpnet-php-cs
```

To use it, add the sniffs to your `phpcs.xml` file like this:

```xml
<rule ref="MPNetPHPCS.Arrays.ArrayDeclarationNoTrailingComma"/>
```

## License

Releasing this under the `UNLICENSE`.

Please see the [Unlicense File](UNLICENSE.) for more information.
