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
                        <button onclick="showSection(5)" class="btn btn-primary">Contact</button>
                        
                    </li>
                    <li class="nav-item">
                       <a href="https://oussama-benyamina.students-laplateforme.io/"> <button class="btn btn-primary">Portfolio</button></a>
                       
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>

    <!-- About Section -->
   
    <?php include 'includes/section1.php'; ?>
    <?php include 'includes/section2.php'; ?>
    <?php include 'includes/section3.php'; ?>
    <?php include 'includes/section4.php'; ?>
    <?php include 'includes/section5.php'; ?>

    <!-- Portfolio Section -->
    

    <!-- Contact Section -->
    

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
