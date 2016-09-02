# HasLowercase

- `v::hasLowercase()`

Validates is a string has lowercase alpha characters from a-z.

```php
v::hasLowercase()->validate('foo 123'); // true
v::hasLowercase()->validate('FOO 123'); // false
```

***
See also:

  * [HasAlpha](HasAlpha.md)
  * [HasUnicodeAlpha](HasUnicodeAlpha.md)
  * [HasUppercase](HasUppercase.md)
  * [HasNumber](HasNumber.md)
  * [HasSpecialChar](HasSpecialChar.md)
