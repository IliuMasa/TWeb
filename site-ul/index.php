<?php
$restaurants = [
    [
        "name" => "La Terasă",
        "category" => "european",
        "type" => "Bucătărie europeană",
        "rating" => "4.8",
        "price" => "$$",
        "description" => "Restaurant elegant cu atmosferă relaxată, potrivit pentru cine romantice și întâlniri cu prietenii.",
        "image" => "https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=900&q=80"
    ],
    [
        "name" => "Urban Bistro",
        "category" => "modern",
        "type" => "Bistro modern",
        "rating" => "4.7",
        "price" => "$$",
        "description" => "Local modern, cu meniu creativ, design minimalist și servicii rapide în centrul orașului.",
        "image" => "https://images.unsplash.com/photo-1559329007-40df8a9345d8?auto=format&fit=crop&w=900&q=80"
    ],
    [
        "name" => "Casa Gustului",
        "category" => "traditional",
        "type" => "Tradițional",
        "rating" => "4.9",
        "price" => "$$",
        "description" => "Restaurant inspirat de bucătăria locală, perfect pentru cei care iubesc preparatele tradiționale.",
        "image" => "https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=900&q=80"
    ],
    [
        "name" => "Black Table",
        "category" => "premium",
        "type" => "Fine dining",
        "rating" => "4.9",
        "price" => "$$$",
        "description" => "Spațiu premium cu design negru elegant, meniu rafinat și atmosferă perfectă pentru evenimente speciale.",
        "image" => "https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=900&q=80"
    ],
    [
        "name" => "Grey Lounge",
        "category" => "modern",
        "type" => "Lounge urban",
        "rating" => "4.6",
        "price" => "$$",
        "description" => "Local cu interior modern în nuanțe de gri, potrivit pentru seri relaxante și discuții lungi.",
        "image" => "https://images.unsplash.com/photo-1514933651103-005eec06c04b?auto=format&fit=crop&w=900&q=80"
    ],
    [
        "name" => "White Garden",
        "category" => "european",
        "type" => "Restaurant luminos",
        "rating" => "4.7",
        "price" => "$$",
        "description" => "Restaurant cu atmosferă luminoasă, decor curat și preparate potrivite pentru prânzuri elegante.",
        "image" => "https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=900&q=80"
    ],
    [
        "name" => "Old City Grill",
        "category" => "traditional",
        "type" => "Grill & tradițional",
        "rating" => "4.5",
        "price" => "$$",
        "description" => "Local cald și primitor, cu preparate la grătar și influențe culinare tradiționale.",
        "image" => "https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=900&q=80"
    ],
    [
        "name" => "Moldavian Taste",
        "category" => "traditional",
        "type" => "Specific local",
        "rating" => "4.8",
        "price" => "$$",
        "description" => "Loc potrivit pentru turiști și localnici care vor să descopere gusturi inspirate din Moldova.",
        "image" => "https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=900&q=80"
    ],
    [
        "name" => "Noir Café & Dining",
        "category" => "premium",
        "type" => "Café & dining",
        "rating" => "4.6",
        "price" => "$$$",
        "description" => "Combinație între cafenea elegantă și restaurant, cu accent pe prezentare și atmosferă sofisticată.",
        "image" => "https://images.unsplash.com/photo-1508424757105-b6d5ad9329d0?auto=format&fit=crop&w=900&q=80"
    ]
];

$message = "";
if (isset($_GET["success"])) {
    $message = "Mesajul a fost trimis cu succes!";
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante în Chișinău</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header" id="acasa">
        <nav class="navbar">
            <div class="logo">Chișinău<span>Food</span></div>

            <button class="menu-btn" id="menuBtn" aria-label="Deschide meniul">☰</button>

            <ul class="nav-links" id="navLinks">
                <li><a href="#acasa">Acasă</a></li>
                <li><a href="#restaurante">Restaurante</a></li>
                <li><a href="#despre">Despre</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <section class="hero">
            <div class="hero-content">
                <p class="subtitle">Ghid culinar urban</p>
                <h1>Descoperă restaurantele elegante din Chișinău</h1>
                <p>
                    Un site modern dedicat localurilor unde atmosfera, gustul și designul
                    se întâlnesc într-o experiență memorabilă.
                </p>
                <div class="hero-buttons">
                    <a href="#restaurante" class="btn">Vezi restaurantele</a>
                    <a href="#contact" class="btn btn-outline">Rezervare</a>
                </div>
            </div>
        </section>
    </header>

    <main>
        <section class="stats">
            <div class="stat-box">
                <strong>9+</strong>
                <span>Restaurante</span>
            </div>
            <div class="stat-box">
                <strong>4</strong>
                <span>Categorii</span>
            </div>
            <div class="stat-box">
                <strong>24/7</strong>
                <span>Inspirație culinară</span>
            </div>
        </section>

        <section class="intro">
            <p class="subtitle">Despre proiect</p>
            <h2>Un ghid modern pentru restaurantele din oraș</h2>
            <p>
                Site-ul este realizat în HTML, CSS, JavaScript și PHP. PHP generează lista
                restaurantelor, iar JavaScript permite căutarea și filtrarea rapidă.
            </p>
        </section>

        <section class="restaurants" id="restaurante">
            <div class="section-title">
                <p>Recomandări</p>
                <h2>Restaurante în Chișinău</h2>
            </div>

            <div class="filters">
                <input type="text" id="searchInput" placeholder="Caută restaurant...">

                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Toate</button>
                    <button class="filter-btn" data-filter="traditional">Tradițional</button>
                    <button class="filter-btn" data-filter="european">European</button>
                    <button class="filter-btn" data-filter="modern">Modern</button>
                    <button class="filter-btn" data-filter="premium">Premium</button>
                </div>
            </div>

            <div class="cards" id="restaurantCards">
                <?php foreach ($restaurants as $restaurant): ?>
                    <article class="card" data-category="<?php echo $restaurant["category"]; ?>" data-name="<?php echo strtolower($restaurant["name"]); ?>">
                        <div class="card-img" style="background-image: url('<?php echo $restaurant["image"]; ?>');">
                            <span class="badge"><?php echo $restaurant["price"]; ?></span>
                        </div>
                        <div class="card-body">
                            <h3><?php echo $restaurant["name"]; ?></h3>
                            <p><?php echo $restaurant["description"]; ?></p>
                            <div class="card-info">
                                <span><?php echo $restaurant["type"]; ?></span>
                                <strong><?php echo $restaurant["rating"]; ?> ★</strong>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <p class="no-results" id="noResults">Nu am găsit restaurante după criteriul ales.</p>
        </section>

        <section class="features" id="despre">
            <div class="feature-text">
                <p class="subtitle">Atmosferă & gust</p>
                <h2>Un oraș cu experiențe culinare pentru fiecare stil</h2>
                <p>
                    De la restaurante premium până la localuri mici și primitoare,
                    Chișinăul oferă opțiuni pentru orice ocazie: prânz de afaceri,
                    cină în familie, aniversări sau seri relaxante.
                </p>
            </div>

            <div class="feature-boxes">
                <div class="feature-box">
                    <h3>Design modern</h3>
                    <p>Interfață curată, culori echilibrate și aspect premium.</p>
                </div>

                <div class="feature-box">
                    <h3>Filtrare rapidă</h3>
                    <p>Poți filtra restaurantele după categorie cu JavaScript.</p>
                </div>

                <div class="feature-box">
                    <h3>PHP inclus</h3>
                    <p>Lista restaurantelor este generată dintr-un array PHP.</p>
                </div>
            </div>
        </section>

        <section class="contact-section" id="contact">
            <div class="contact-text">
                <p class="subtitle">Contact</p>
                <h2>Vrei o recomandare sau o rezervare?</h2>
                <p>
                    Completează formularul, iar mesajul va fi procesat prin PHP.
                    Datele sunt salvate local în fișierul <b>messages.txt</b>.
                </p>

                <?php if ($message): ?>
                    <div class="success-message"><?php echo $message; ?></div>
                <?php endif; ?>
            </div>

            <form class="contact-form" action="contact.php" method="POST">
                <input type="text" name="name" placeholder="Numele tău" required>
                <input type="email" name="email" placeholder="Email" required>
                <select name="restaurant" required>
                    <option value="">Alege restaurantul preferat</option>
                    <?php foreach ($restaurants as $restaurant): ?>
                        <option value="<?php echo $restaurant["name"]; ?>"><?php echo $restaurant["name"]; ?></option>
                    <?php endforeach; ?>
                </select>
                <textarea name="message" rows="5" placeholder="Mesajul tău" required></textarea>
                <button type="submit" class="btn btn-dark">Trimite mesajul</button>
            </form>
        </section>
    </main>

    <footer class="footer">
        <div>
            <h3>Chișinău<span>Food</span></h3>
            <p>Ghid modern pentru restaurantele din orașul Chișinău.</p>
        </div>

        <div class="footer-info">
            <p>Email: contact@chisinaufood.md</p>
            <p>Telefon: +373 600 00 000</p>
            <p>Chișinău, Republica Moldova</p>
        </div>
    </footer>

    <button class="top-btn" id="topBtn" title="Înapoi sus">↑</button>

    <script src="script.js"></script>
</body>
</html>
