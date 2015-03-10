/**
 * Añadimos el método tallaCamiseta al validator
 */

$.validator.addMethod("tallaCamiseta", function (value, element) {
    var talla = value;
    if (talla == "S" || talla == "M" || talla == "L" || talla == "XL") {
        return true;
    }
    return false;
}, " Talla incorrecta");