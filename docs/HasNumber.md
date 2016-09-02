# HasNumber

- `v::hasNumber()`

Validates is a string has alpha characters from a-Z.

```php
v::hasNumber()->validate('foo 123'); // true
v::hasNumber()->validate('123'); // true
v::hasNumber()->validate('Foo'); // false
```

***
See also:

  * [HasAlpha](HasAlpha.md)
  * [HasUnicodeAlpha](HasUnicodeAlpha.md)
  * [HasLowercase](HasLowercase.md)
  * [HasUppercase](HasUppercase.md)
  * [HasSpecialChar](HasSpecialChar.md)
