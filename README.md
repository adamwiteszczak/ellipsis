# Ellipsis
*Easily add an ellipsis to a string if required*

---

*usage:*

| Param | Usage
|---|---|
| $text | The text you want to add the ellipse to
| $max_length| The max length of the string before the ellipse is added
| $marker | The characters used as the ellipse

> Note: If the string provided is shorter than the max length, the ellipsis will not be applied.

`$text = Ellipsis:apply($text, $max_length, $marker);`

---