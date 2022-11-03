<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinical guidelines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        #social-links ul{
            padding-left: 0;
        }
        #social-links ul li {
            display: inline-flex;
        }
        #social-links ul li a {
            margin-left: 5px;
            margin-top: -10px;
            padding-top: 20px;
            font-size: 20px;
        }
        #social-links .fa-facebook{
            color: #0d6efd;
        }
        #social-links .fa-twitter{
            color: deepskyblue;
        }
        #social-links .fa-linkedin{
            color: #0e76a8;
        }
        #social-links .fa-telegram{
            color: #0088cc;
        }
    </style>
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
                    <a class="nav-link active" aria-current="page" href="/">Select all</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sort/Musculoskeletal System">Musculoskeletal System</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sort/Respiratory">Respiratory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sort/Respiratory System">Respiratory System</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sort/Digestive System">Digestive System</a>
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
                @foreach ($guidelines as $guideline)
                    <tr>
                        <th scope="row">{{ $guideline->id }}</th>
                        <td>{{ $guideline->groupName }}</td>
                        <td>{{ $guideline->subject }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a href="/newPage/{{ $guideline->id }}" target="_blank" type="button" class="btn btn-primary btn-sm">Open</a>
                                <div class="btn btn-sm">{!! $shareButtons->page('http://localhost/newPage/'. $guideline->id)->facebook()->twitter()->telegram() !!}</div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item active">{{ $guidelines->links() }}</li>
    </ul>
</nav>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/share.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous">
</script>

</body>
</html>
