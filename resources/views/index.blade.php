<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à l'Hôtel de Luxe</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style')}}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        nav {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 0.5em 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5em 1em;
        }

        nav a:hover {
            background-color: #555;
        }

        .section {
            padding: 2em;
            text-align: center;
        }

        .section h2 {
            color: #007bff;
        }

        .section p {
            max-width: 800px;
            margin: 0 auto;
        }

        .features {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .feature {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1.5em;
            margin: 1em;
            width: 300px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Hôtel de Luxe</h1>
        <p>Votre séjour de rêve commence ici</p>
    </header>

    <nav>
        <a href="#accueil">Accueil</a>
        <a href="#chambres">Chambres</a>
        <a href="#services">Services</a>
        <a href="{{ url('/signup') }}">Inscrire</a>
        <a href="{{ url('/login') }}">Contact</a>
    </nav>

    <section id="accueil" class="section">
        <h2>Bienvenue à l'Hôtel de Luxe</h2>
        <p>Découvrez un havre de paix et de confort dans notre hôtel de luxe. Nous vous offrons une expérience inoubliable avec des chambres élégantes, des services exceptionnels et une ambiance chaleureuse.</p>
    </section>

    <section id="chambres" class="section">
        <h2>Nos Chambres</h2>
        <p>Nos chambres sont conçues pour votre confort et votre détente. Elles sont équipées de toutes les commodités modernes pour rendre votre séjour agréable.</p>
        <div class="features">
            <div class="feature">
                <h3>Chambre Standard</h3>
                <p>Chambre confortable avec lit double et salle de bain privée.</p>
            </div>
            <div class="feature">
                <h3>Suite Deluxe</h3>
                <p>Suite spacieuse avec vue panoramique, salon séparé et jacuzzi.</p>
            </div>
            <div class="feature">
                <h3>Chambre Familiale</h3>
                <p>Chambre spacieuse avec lits jumeaux et lit superposé, idéale pour les familles.</p>
            </div>
        </div>
    </section>

    <section id="services" class="section">
        <h2>Nos Services</h2>
        <p>Profitez de nos services de qualité pour un séjour parfait.</p>
        <div class="features">
            <div class="feature">
                <h3>Restaurant Gastronomique</h3>
                <p>Dégustez des plats raffinés préparés par notre chef étoilé.</p>
            </div>
            <div class="feature">
                <h3>Spa et Bien-être</h3>
                <p>Détendez-vous avec nos soins de spa et nos massages relaxants.</p>
            </div>
            <div class="feature">
                <h3>Piscine et Salle de Sport</h3>
                <p>Profitez de notre piscine intérieure et de notre salle de sport équipée.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="section">
        <h2>Contactez-nous</h2>
        <p>Pour toute question ou réservation, n'hésitez pas à nous contacter.</p>
        <p>Adresse : 123 Rue de l'Hôtel, Ville, Pays</p>
        <p>Téléphone : +1 123 456 7890</p>
        <p>Email : contact@hoteldeluxe.com</p>
    </section>

    <footer>
        <p>&copy; 2024 Hôtel de Luxe. Tous droits réservés.</p>
    </footer>

</body>
</html>