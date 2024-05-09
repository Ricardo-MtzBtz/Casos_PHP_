<?php
function asignaPrecio($codigo)
{
    switch ($codigo) {
        case 'p001':            return 211;
        case 'p002':            return 690;
        case 'p003':            return 509;
        case 'p004':            return 523;
        case 'p005':            return 237;
        case 'p006':            return 449;
        case 'p007':            return 499;
        case 'p008':            return 249;
        case 'p009':            return 398;
        case 'p010':            return 400;
    }
}

function muestraDescripcion($codigo)
{
    switch ($codigo) {
        case 'p001':            return 'Figura de Nezuco';
        case 'p002':            return 'Figura de Luffy';
        case 'p003':            return 'Figura de Golden Cooler';
        case 'p004':            return 'Figura de Naruto';
        case 'p005':            return 'Figura de Hatsune Miku';
        case 'p006':            return 'Figura de Konan';
        case 'p007':            return 'Figura de Kuromi Sanrio';
        case 'p008':            return 'Figura de Ryuk';
        case 'p009':            return 'Figura de Kirito';
        case 'p010':            return 'Figura de Yorichi';
    }
}
?>