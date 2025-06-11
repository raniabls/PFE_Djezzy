

    <!-- Required meta tags -->
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
        <title>Import Excel Data</title>
        
        <style>
            body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    h1, h2 {
        color: #333;
        margin-bottom: 10px;
    }

    ol {
        list-style: decimal;
        padding: 20px;
    }

    li {
        margin-bottom: 20px;
    }
    img {
        width: 100%;
        height: auto;
        margin: 20px 0;
    }
        </style>
<div class="card">
    <h1>Importer des fichiers Excel dans une base de données PostgreSQL</h1>
    <p>Notre site web offre un service pratique pour importer des fichiers Excel dans une base de données PostgreSQL, ce qui vous permet de stocker, rechercher et suivre facilement toutes vos données.</p>

    <h2>Comment cela fonctionne?</h2>
    <ol>
        <li>
            <p>Sélectionnez un fichier Excel contenant vos données.</p>
            <img src="{{ asset('images/import.png') }}" alt="Étape 1 : Sélectionnez un fichier Excel" >
        </li>
        <li>
            <p>Téléchargez le fichier sur notre site web.</p>
            <img src="{{ asset('images/import.png') }}" alt="Étape 2 : Téléchargez un fichier Excel" >
        </li>
        <li>
            <p>Notre système importera automatiquement les données dans une base de données PostgreSQL.</p>
            <img src="{{ asset('images/postgres.png') }}" alt="Étape 3 : Importez les données dans PostgreSQL" >
        </li>
        <li>
            <p>Vous pouvez maintenant visualiser, rechercher et suivre toutes vos données en un seul endroit.</p>
            <img src="{{ asset('images/visualiser.png') }}" alt="Étape 4 : Visualisez, recherchez et suivez les données" >
        </li>
    </ol>

    <h2>Suivi des importations précédentes</h2>
    <p>Notre système suit l'historique de tous les fichiers précédemment importés, ce qui vous permet de suivre et de gérer facilement vos données.</p>
    <img src="{{ asset('images/history.png') }}" alt="Historique des importations" >
</div>
