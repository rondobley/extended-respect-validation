# HasAlpha

- `v::hasAlpha()`

Validates is a string has alpha characters from a-Z.

```php
v::hasAlpha()->validate('foo 123'); // true
v::hasAlpha()->validate('123'); // false
```

***
See also:

  * [HasUnicodeAlpha](HasUnicodeAlpha.md)
  * [HasLowercase](HasLowercase.md)
  * [HasUppercase](HasUppercase.md)
  * [HasNumber](HasNumber.md)
  * [HasSpecialChar](HasSpecialChar.md)
