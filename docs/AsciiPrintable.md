# AsciiPrintable

- `v::asciiPrintable()`

Validates is a string only has ASCII printable characters.
A space is a printable character.

```php
v::asciiPrintable()->validate('foo 123'); // true
v::asciiPrintable()->validate(' '); // true, a space is printable
v::asciiPrintable()->validate('\n\t'); // false, control characters are not printable
```
