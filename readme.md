# PVA4 - Programování a vývoj aplikací
## Lekce 18: Datum a čas

## Obsah

### 1. Aktuální datum a čas
Zadání vypracujte do souboru `datum.php`
Zobrazte uživateli:
* Aktuální datum dle vzoru: `Rok-Měsíc-Den`
* Aktuální datum dle vzoru: `YYYY-MM-DD`
* Aktuální čas ve tvaru `Hodiny:Minuty:Sekundy`
* Aktuální Datum a čas dle vzoru: `2021-11-25 14:03:15`
* Aktuální datum a čas dle české normy. `Vzor: 14. 12. 2024 13:02`

### 2. Výpočet s časem
Vypočtěte a zobrazte uživateli:
* Aktuální datum
* Zítřejší datum
* První den následujícího měsíce
* Poslední den následujícího měsíce
* Včerejší datum
* Datum splatnosti 14 dní od data vystavení
* Datum zdanitelného plnění před třemi dny

### 3. Lokalizované datum
V souboru `functions.php` Deklarujte funkci `dateLocalized`, která bude obsahovat vstupní parametry: kód jazyka a aktuální datum ve formátu název dne, den měsíc. Příklad atributu `Tuesday, 14 December`.
Pro českou lokalizaci bude výstup: _Úterý, 14 Prosince_. (skloňování pro jednoduchost neřešme)

### 4 Délka trvání události
Vytvořte funkci, která přijímá dvě data a časy a vrací délku trvání mezi nimi ve formě přehledného textu, například `3 dny, 4 hodiny a 30 minut`.

### 5 Události v budoucnosti 
Vytvořte funkci, která vytvoří seznam následujících 5 událostí, které se budou konat každý měsíc ve stejný den a čas jako aktuální datum.

### 6 Relativní čas
Formátování relativního času: Vytvořte kód, který přijme časový údaj a vypíše ho ve formátu relativního času, například `před 5 minutami`, `před 2 dny`, atd.

### 7 Formátování
Časy v různých formátech: Vytvořte funkci, který načte datum a čas ze vstupu ve formátu `Y-m-d H:i:s` a vypíše je v několika různých formátech, například `15. ledna 2022, 09:30 AM`.
