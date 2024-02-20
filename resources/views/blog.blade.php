<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOODEY</title>
    <link rel="stylesheet" href="{{ asset('../fontawesome/css/all.min.css') }}"> <!-- https://fontawesome.com/ -->
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap') }}" rel="stylesheet">    <!-- https://fonts.google.com/ -->
    <link href="{{ asset('../css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/templatemo-xtra-blog.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.sidebar')

        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="row tm-row">

                <!-- Your articles loop goes here -->
            </div>
            <!-- TradingView Widget BEGIN -->
            <?php
            use Carbon\Carbon;
$timezone = 'Europe/Istanbul';
$now = Carbon::now($timezone);
echo $now;
?>
    <script>
        const now = new Date();
        console.log(now);
    </script>
</div>
<!-- TradingView Widget END -->
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>

                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <footer class="row tm-row">
                <hr class="col-12">
            </footer>
        </main>
    </div>
    <script src="{{ asset('../public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('../public/js/templatemo-script.js') }}"></script>
</body>
</html>
