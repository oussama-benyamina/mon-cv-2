<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DarkCV - Mon CV en Ligne</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mon CV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button onclick="showSection(1)" class="btn btn-primary">À Propos</button>
                        
                    </li>
                    <li class="nav-item">
                        <button onclick="showSection(2)" class="btn btn-primary">Compétences</button>
                        
                    </li>
                    <li class="nav-item">
                        <button onclick="showSection(3)" class="btn btn-primary">Expérience</button>
                        
                    </li>
                    <li class="nav-item">
                        <button onclick="showSection(4)" class="btn btn-primary">Portfolio</button>
                        
                    </li>
                    <li class="nav-item">
                        <button onclick="showSection(5)" class="btn btn-primary">Contact</button>
                       
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>

    <!-- About Section -->
   
    <?php include 'includes/section1.php'; ?>
    <?php include 'includes/section2.php'; ?>
    
    <!-- Experience Section -->
    <div id="section3" class="section bg-dark text-white">
        <div class="container">
            <h3 class="section-title">Expérience Professionnelle</h3>
            <div class="timeline">
                <div class="timeline-item">
                    <h4>Développeur web - web mobile (DWWM)</h4> 
                </div>
                        <ul>
                            
                            <li>
                                <strong>Stage Développeur</strong> - Entreprise La Plateforme<br>
                                 <em>2023 - juillet 2025</em>
                                 <p>Développement de sites web responsifs en utilisant les dernières technologies...</p>
                                
                                Création de sites web dynamiques en utilisant HTML, CSS, JavaScript, et PHP. Participation à des réunions de planification et coordination avec l'équipe de design.
                            </li>
                        </ul>
                    
    
            </div>
        </div>
    </div>

    <!-- Portfolio Section -->
    <div id="section4" class="section">
        <div class="container">
            <a href="https://oussama-benyamina.students-laplateforme.io/"><h2>Portfolio</h2></a>
            <div class="row">
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="./imag/project1.png" alt="Projet 1" class="img-fluid">
                        <div class="portfolio-overlay">
                            <h4>Projet 1</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="section5" class="section bg-dark text-white">
        <div class="container">
            <h2>Contact</h2>
             <!-- Contact Section -->
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" placeholder="Votre nom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Votre email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Votre message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
    
            <address>
                <p><i class="fas fa-map-marker-alt"></i> Adresse: 11 rue Saint Dominique, 13001 Marseille</p>
                <p><i class="fas fa-envelope"></i> Email: <a href="mailto:oussama.benyamina@laplateforme.io">oussama.benyamina@laplateforme.io</a></p>
                <p><i class="fas fa-phone"></i> Téléphone: 0774666255</p>
                <p><i class="fab fa-github"></i> GitHub: <a href="https://github.com/oussama-benyamina" target="_blank">github.com/oussama-benyamina</a></p>
                <p><i class="fas fa-globe"></i> Portfolio: <a href="https://oussama-benyamina.students-laplateforme.io" target="_blank">oussama-benyamina.students-laplateforme.io</a></p>
            </address>
        </div>
    </div>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
    <script>
        function showSection(sectionNumber) {
            // Masquer toutes les sections
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });
            // Afficher la section sélectionnée
            document.getElementById('section' + sectionNumber).classList.add('active');
        }
    </script>
</body>
</html>
