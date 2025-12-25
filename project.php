<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project - Royal Builders | Trusted Construction Company in Nagercoil</title>
    <meta name="author" content="Royal Builders" />
    <meta name="description" content="Explore completed residential, commercial, interior, and renovation projects by Royal Builders in Nagercoil. Quality construction and modern design excellence."/>
    <meta property="og:title" content="Projects by Royal Builders | Construction Excellence in Nagercoil" />
    <meta property="og:description"
    content="Projects by Royal Builders | Construction Excellence in Nagercoil." />
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </noscript>
    <link rel="stylesheet" href="./about-us.css">
    <link rel="stylesheet" href="./landing.css">
    <link rel="stylesheet" href="./project.css">
</head>

<body>
    <?php include "includes/header.php"; ?>
    <section class="rb-page-header">
        <div class="rb-page-header-bg"></div>
        <div class="rb-page-header-overlay"></div>
        <div class="container position-relative">
            <h1 class="rb-page-title">Project</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="./project.php">Project</a></li>
                </ol>
            </nav>
        </div>
    </section>
    <div class="container py-5">
        <div class="tabs text-center mb-4">
            <button class="filter-btn active" data-filter="all">ALL</button>
            <button class="filter-btn" data-filter="residential">RESIDENTIAL</button>
            <button class="filter-btn" data-filter="commercial">COMMERCIAL</button>
            <button class="filter-btn" data-filter="renovation">RENOVATION</button>
            <button class="filter-btn" data-filter="interior">INTERIOR</button>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 project-item residential">
                <a href="./future.php">
                    <div class="project-card">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c" alt="Modern luxury residential home exterior with large windows and tree landscaping">
                        <div class="project-overlay">
                            <span class="badge-category">RESIDENTIAL</span>
                            <h5>Modern Villa</h5>
                            <p class="mb-2">Luxury 4BHK villa with contemporary design</p>
                            <div class="arrow-btn">→</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 project-item commercial">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab" alt="Commercial corporate tower project exterior by Royal Builders">
                    <div class="project-overlay">
                        <span class="badge-category">COMMERCIAL</span>
                        <h5>Corporate Tower</h5>
                        <p class="mb-2">Premium office building</p>
                        <div class="arrow-btn">→</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-item residential">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85" alt="Luxury residential house exterior project by Royal Builders">
                    <div class="project-overlay">
                        <span class="badge-category">RESIDENTIAL</span>
                        <h5>Luxury House</h5>
                        <p class="mb-2">Modern living spaces</p>
                        <div class="arrow-btn">→</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-item interior">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511" alt="Interior design project – modern living room by Royal Builders">
                    <div class="project-overlay">
                        <span class="badge-category">INTERIOR</span>
                        <h5>Living Room</h5>
                        <p class="mb-2">Elegant interior design</p>
                        <div class="arrow-btn">→</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-item renovation">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee" alt="Renovated home exterior showcasing updated architecture and modern design">
                    <div class="project-overlay">
                        <span class="badge-category">RENOVATION</span>
                        <h5>Home Renovation</h5>
                        <p class="mb-2">Complete makeover project</p>
                        <div class="arrow-btn">→</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 project-item interior">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36" alt="Modern office interior with stylish decor and workplace design elements">
                    <div class="project-overlay">
                        <span class="badge-category">INTERIOR</span>
                        <h5>Office Interior</h5>
                        <p class="mb-2">Creative workspace design</p>
                        <div class="arrow-btn">→</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include "includes/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
        defer></script>
    <script>
        const buttons = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.project-item');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;

                items.forEach(item => {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    </script>
</body>

</html>