# HasUppercase

- `v::hasUppercase()`

Validates is a string has UPPERCASE alpha characters from A-Z.

```php
v::hasUppercase()->validate('Foo 123'); // true
v::hasUppercase()->validate('foo'); // false
v::hasUppercase()->validate('123'); // false
```

***
See also:

  * [HasAlpha](HasAlpha.md)
  * [HasUnicodeAlpha](HasUnicodeAlpha.md)
  * [HasLowercase](HasLowercase.md)
  * [HasNumber](HasNumber.md)
  * [HasSpecialChar](HasSpecialChar.md)
