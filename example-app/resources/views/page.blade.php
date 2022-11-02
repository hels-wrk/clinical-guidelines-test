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

<div class="card">
    <div class="card-header">
        Clinical guidelines
    </div>
    <div class="card-body">
        <p class="card-text">{{$item->id}}</p>
        <p class="card-text">{{$item->groupName}}</p>
        <p class="card-text">{{$item->subject}}</p>
        <a href="/savePdf/{{ $item->id }}" class="btn btn-primary">save PDF</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>
