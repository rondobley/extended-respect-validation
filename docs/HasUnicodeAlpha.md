# HasUnicodeAlpha

- `v::hasUnicodeAlpha()`

Validates is a string has alpha characters from international character sets.
This validator use PHP unicode character properties

[PHP Unicode Character Properties](http://php.net/manual/en/regexp.reference.unicode.php)

```php
v::hasUnicodeAlpha()->validate('foo 123'); // true
v::hasUnicodeAlpha()->validate('Iñtërnâtiônàlizætiøn'); // true
v::hasUnicodeAlpha()->validate('ñëâôàæø'); // true
v::hasUnicodeAlpha()->validate('123'); // false
```

***
See also:

  * [HasAlpha](HasAlpha.md)
  * [HasUnicodeLowercase](HasUnicodeLowercase.md)
  * [HasUnicodeUppercase](HasUnicodeUppercase.md)

