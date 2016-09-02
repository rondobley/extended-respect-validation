# HasUnicodeUppercase

- `v::hasUnicodeUppercase()`

Validates is a string has UPPERCASE alpha characters from international character sets.
This validator use PHP unicode character properties

[PHP Unicode Character Properties](http://php.net/manual/en/regexp.reference.unicode.php)

```php
v::hasUnicodeUppercase()->validate('Iñtërnâtiônàlizætiøn'); // true
v::hasUnicodeUppercase()->validate('foo 123'); // false
v::hasUnicodeLowercase()->validate('BAR 123'); // true
v::hasUnicodeUppercase()->validate('Iñtërnâtiônàlizætiøn'); // true
v::hasUnicodeUppercase()->validate('ÛÕÐÛÝ'); // true
v::hasUnicodeUppercase()->validate('ñëâôàæø'); // false
v::hasUnicodeUppercase()->validate('123'); // false
```

***
See also:

  * [HasUppercase](HasUppercase.md)
  * [HasUnicodeAlpha](HasUnicodeAlpha.md)
  * [HasUnicodeLowercase](HasUnicodeLowercase.md)
