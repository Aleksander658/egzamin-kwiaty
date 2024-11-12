<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <aside>
        <h2>Menu</h2>
            <ol>
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
                <li><a href="znajdz.php">Znajdź kwiaciarnię</a></li>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            <ol>
    </aside>
    <main>
        <h2>Znajdź kwiaciarnię</h2>
        
        <form method="POST" action="znajdz.php">
            <label for="miasto">Podaj nazwę miasta:</label>
            <input type="submit" value="SPRAWDŹ">
        </form>
        
        <div id="wynik"></div>
    </main>
    <footer>
        <p>Stronę opracował: 0000000000000</p>
    </footer>
</body>
</html>