# HasSpecialChar

- `v::hasSpecialCahr()`

Validates is a string has special characters. Special characters are based on
ASCII printable characters and a space is a special caharacter

```php
v::hasSpecialCahr()->validate('Foo!'); // true
v::hasSpecialCahr()->validate('!@#$%^&&'); // true
v::hasSpecialCahr()->validate(''); // true, space is a special character
v::hasSpecialCahr()->validate('foo'); // false
v::hasSpecialCahr()->validate('BAR'); // false
v::hasSpecialCahr()->validate('123'); // false
```

***
See also:

  * [HasAlpha](HasAlpha.md)
  * [HasUnicodeAlpha](HasUnicodeAlpha.md)
  * [HasLowercase](HasLowercase.md)
  * [HasUppercase](HasUppercase.md)
  * [HasNumber](HasNumber.md)
