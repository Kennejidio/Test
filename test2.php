<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/test2.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar"
                aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">JDMI-HIS</a>
            <div class="dropdown-center">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                    Profile
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block pt-3 shadow">
                <div class="position-sticky accordion accordion-flush" id="sidebarFlush">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#sidebarFlush">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="">Test</a>
                                    </li>
                                    <li>
                                        <a href="">Test 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#sidebarFlush">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">Test</a>
                                    </li>
                                    <li>
                                        <a href="#">Test</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#sidebarFlush">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="">Test</a>
                                    </li>
                                    <li>
                                        <a href="">Test</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Your dashboard content goes here -->
                <h1>Content</h1>
                <hr>
                <p class="fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ullam a veniam expedita nemo mollitia
                    obcaecati, alias, suscipit eum laboriosam odio officia nisi, ipsa aliquam adipisci exercitationem
                    blanditiis fugit dignissimos!</p>
                <p class="fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ullam a veniam expedita nemo mollitia
                    obcaecati, alias, suscipit eum laboriosam odio officia nisi, ipsa aliquam adipisci exercitationem
                    blanditiis fugit dignissimos!</p>
                <p class="fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ullam a veniam expedita nemo mollitia
                    obcaecati, alias, suscipit eum laboriosam odio officia nisi, ipsa aliquam adipisci exercitationem
                    blanditiis fugit dignissimos!</p>
                <p class="fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ullam a veniam expedita nemo mollitia
                    obcaecati, alias, suscipit eum laboriosam odio officia nisi, ipsa aliquam adipisci exercitationem
                    blanditiis fugit dignissimos!</p>
                <p class="fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ullam a veniam expedita nemo mollitia
                    obcaecati, alias, suscipit eum laboriosam odio officia nisi, ipsa aliquam adipisci exercitationem
                    blanditiis fugit dignissimos!</p>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>