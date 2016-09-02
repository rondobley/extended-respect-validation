# HasUnicodeLowercase

- `v::hasUnicodeLowercase()`

Validates is a string has lowercase alpha characters from international character sets.
This validator use PHP unicode character properties

[PHP Unicode Character Properties](http://php.net/manual/en/regexp.reference.unicode.php)

```php
v::hasUnicodeLowercase()->validate('Iñtërnâtiônàlizætiøn'); // true
v::hasUnicodeLowercase()->validate('foo 123'); // true
v::hasUnicodeLowercase()->validate('BAR 123'); // false
v::hasUnicodeLowercase()->validate('Iñtërnâtiônàlizætiøn'); // true
v::hasUnicodeLowercase()->validate('ÛÕÐÛÝ'); // false
v::hasUnicodeLowercase()->validate('ñëâôàæø'); // true
v::hasUnicodeLowercase()->validate('123'); // false
```

***
See also:

  * [HasLowercase](HasLowercase.md)
  * [HasUnicodeAlpha](HasUnicodeAlpha.md)
  * [HasUnicodeUppercase](HasUnicodeUppercase.md)
