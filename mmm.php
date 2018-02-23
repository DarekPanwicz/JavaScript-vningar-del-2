<?php

//ZAD. 1. KOSTKA / WARIANT PROSTY
//Napisz prostą aplikację, która zapyta o imię użytkownika, a następnie wyświetli komunikat:
//[WCIŚNIJ ENTER, ABY RZUCIĆ KOSTKĄ]
//i gdy użytkownik wciśnie ENTER, wyświetli się wylosowana wartość, a po chwili wartość wylosowana dla gracza KOMPUTER.
//Jeśli wartość gracza KOMPUTER jest większa, wygrywa KOMPUTER.
//Jeśli wartość gracza, którym jest użytkownik, jest większa, wygrywa użytkownik.
//W przypadku jednakowych wartości, jest remis

$imie;

echo "Prosze podac swoje imie: ";
$imie = fgets(STDIN);
echo "To jest twoje imie dude: $imie";
