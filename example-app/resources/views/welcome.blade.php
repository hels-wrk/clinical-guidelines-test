<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinical guidelines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<header class="py-3 mb-3 border-bottom">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
        <div class="dropdown">
            <a class="logo clean-bg">
                <img alt="" class=" ls-is-cached lazyloaded" src="https://medpresso.org/frontend/images/svg/logo.svg">
            </a>
        </div>

        <div class="d-flex align-items-center">
            <form class="w-100 me-3" role="search">
                <input type="search" class="form-control" placeholder="Type your text" aria-label="Search">
            </form>
            <button type="button" class="btn btn-primary"
                    style="background: linear-gradient(90deg, #7690BE 0%, #4F68A3 100%);">Search
            </button>

        </div>
    </div>
</header>

<div class="container-fluid pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 5fr;">
        <div class="bg-light border rounded-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Select all</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Musculoskeletal System</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Respiratory System</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Digestive System</a>
                </li>
            </ul>
        </div>
        <div class="bg-light border rounded-3">

            <div class="card">
                <div class="card-body">
                    <h1>Clinical guidelines</h1>
                    Clinical guidelines section contains recommendations for medical practice and public health
                    developed by such organizations as World Health Organization (WHO), National Institutes of Health
                    (NIH), Centers for Disease Control and Prevention (CDC), Pan American Health Organization (PAHO).
                    The aim of these directives is to facilitate the implementation of standards in patient care and
                    health services. Systematically developed statements describe generally recommended courses of
                    diagnostic and treatment modalities.
                </div>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Group Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Musculoskeletal System</td>
                    <td>Early-onset scoliosis: a narrative review</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-primary btn-sm">Open</button>
                            <button type="button" class="btn btn-secondary btn-sm">Share</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Respiratory System</td>
                    <td>Vitamin, Mineral, and Multivitamin Supplementation to Prevent Cardiovascular Disease and Cancer</td>
                   <td>
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-primary btn-sm">Open</button>
                            <button type="button" class="btn btn-secondary btn-sm">Share</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Digestive System</td>
                    <td>Acne, the Skin Microbiome, and Antibiotic Treatment</td>
                   <td>
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-primary btn-sm">Open</button>
                            <button type="button" class="btn btn-secondary btn-sm">Share</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>