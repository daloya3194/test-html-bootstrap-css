<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Open+Sans&display=swap" rel="stylesheet">

    <title>{{ env('APP_NAME') }}</title>

    <style>
        /*#navi {
            position:fixed;
            width: 325px;
            z-index: 1000;
            left: 0;
            top: 0;
            !*border-right: 1px solid #162636;*!
            height: 100%;
        }*/

        .pointer {
            cursor: pointer;
            opacity: 0.7;
        }

        .pointer:hover {
            background-color: lightgray;
            color: black;
            opacity: 1;
        }

        body {
            font-family: 'DM Sans', sans-serif;
        }

        .visible {
            display: block;
        }

    </style>

</head>

<body style="background-color: #e5e7eb">

<div class="d-flex justify-content-between bg-transparent border-bottom border-secondary bg-white px-4 py-2 align-items-center">
    <div id="nav_button" class="lead h3 mt-2 fw-bolder" style="cursor: pointer">
        <i class="bi bi-list"></i>
    </div>
    <div class="d-flex">
        <p class="lead h3 fw-bold mt-2">Search</p>
        <p class="lead h3 fw-bold mt-2">Demo User</p>
    </div>
</div>

<div class="container-fluid">
    <div class="">
        <div class="bg-white d-none d-lg-block shadow fixed-top  h-100" id="navi" style="width: 325px">
            <div class="px-4 py-2 bg-white d-block w-100">
                <p class="lead h3 fw-bold mt-2">Admin Panel</p>
            </div>
            <div class="border-bottom border-secondary w-100"></div>
            <div class="">
                <div class="py-3 px-4">
                    <p class="mt-3 px-3 py-1 ps-1 rounded-3 pointer"><i class="bi bi-house-door me-2"></i> Dashboard</p>
                </div>
                <div class="border-bottom border-secondary "></div>
                <div class="py-3 px-4">
                    <div class="text-uppercase ps-1 h6 py-2 fw-bolder text-dark text-muted">Shop</div>
                    <div class="mt-2 px-3 py-1 ps-1 rounded-3 pointer text-dark"><i class="bi bi-lightning-charge me-2"></i> Produits</div>
                    <div class="mt-1 px-3 py-1 ps-1 rounded-3 pointer text-dark"><i class="bi bi-layers me-2"></i> Categories</div>
                    <div class="mt-1 px-3 py-1 ps-1 rounded-3 pointer text-dark"><i class="bi bi-bag me-2"></i> Commandes</div>
                    <div class="mt-2 px-3 py-1 ps-1 rounded-3 pointer text-dark"><i class="bi bi-person-plus me-2"></i> Cuisiniers</div>
                    <div class="mt-1 px-3 py-1 ps-1 rounded-3 pointer text-dark"><i class="bi bi-people me-2"></i> Clients</div>
                    <div class="mt-1 px-3 py-1 ps-1 rounded-3 pointer text-dark"><i class="bi bi-shop me-2"></i> Boutiques</div>
                    <div class="mt-1 px-3 py-1 ps-1 rounded-3 pointer text-dark"><i class="bi bi-graph-up-arrow me-2"></i> Finances</div>
                </div>
            </div>
        </div>

        <!--<div class="col-12 col-lg-10 mx-lg-auto text-end bg-secondary float-end" style="background-color: #e5e7eb">
            <div>
                <div>Dashboard</div>
                <div></div>
            </div>
            <div>
                <div>Dashboard</div>
                <div></div>
            </div>

        </div>-->


    </div>

    <div class="d-flex">
        <div class=" d-none d-lg-block" style="min-width: 325px"></div>
        <div class=" w-100 p-5">

            <div class="row justify-content-evenly">
                <div class="col-12 col-lg-5 h3 ps-0">Dashboard</div>
                <div class="col-5 h3 "></div>
            </div>

            <div class="row mt-4 justify-content-evenly">
                <div class="col-12 col-lg-5 bg-white rounded shadow-sm px-4 py-4">Test</div>
                <div class="col-12 col-lg-5 bg-white rounded-3 shadow-sm px-4 py-4 mt-3 mt-lg-0">Test</div>
            </div>

            <table class="table caption-top mt-4 p-5 bg-white shadow-sm col-lg-10 col-12 rounded-3 mx-lg-auto" style="max-width: 1110px">
                <caption>List of users</caption>
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Markddhdh</td>
                    <td>Ottodfhdfh</td>
                    <td>@mdodfhdfh</td>
                    <td>@mdodfhdfhd</td>
                    <td>@mdodhdfhd</td>
                    <td>@mdodfhd</td>
                    <td>@mdodfh</td>
                    <td>@mdodfh</td>
                    <td>@mdofdhd</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

</div>







<!--<p><a href="{{ route('admin.logout', app()->getLocale()) }}">Logout</a></p>-->


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    {
        const d_none = "d-none";

        const nav_button = document.querySelector("#nav_button");
        const navi = document.querySelector("#navi");

        nav_button.addEventListener("click", () => {
            navi.classList.toggle(d_none);
        });

        document.addEventListener('click', function(event) {
            const isClickInsideElement = nav_button.contains(event.target);
            if (!isClickInsideElement) {
                navi.classList.add(d_none);
            }
        });
    }
</script>

</body>
</html>
