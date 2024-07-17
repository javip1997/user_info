<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        .card-custom {
            margin-bottom: 15px;
            width: 100%;
        }
        .search-box {
            margin-bottom: 20px;
        }
        .card-columns-custom {
            display: flex;
            flex-wrap: wrap;
        }

        .maincard {
            
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
            display: flex;
            margin: 0 auto;
            margin-top: 5%;
            background: #bdbaba;
            border-radius: 25px;
        }

        .maincard:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

    </style>
</head>
<body>
<div class="maincard">
    <div class="container mt-5">
        <h1>Search</h1>
        <div class="row mb-3 search-box">
            <div class="col-md-12">
                <input type="text" id="search" class="form-control" placeholder="Search by Name, Designation, or Department">
            </div>
        </div>
        <div class="row card-columns-custom" id="userCards">
            @foreach($users as $user)
                <div class="col-md-6">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text designation">{{ $user->designation->name }}</p>
                            <p class="card-text department">{{ $user->department->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            var cards = $("#userCards .card").parent().toArray();

            cards.sort(function(a, b) {
                var nameA = $(a).find(".card-title").text().toLowerCase();
                var designationA = $(a).find(".designation").text().toLowerCase();
                var departmentA = $(a).find(".department").text().toLowerCase();

                var nameB = $(b).find(".card-title").text().toLowerCase();
                var designationB = $(b).find(".designation").text().toLowerCase();
                var departmentB = $(b).find(".department").text().toLowerCase();

                if (departmentA.indexOf(value) > -1 && departmentB.indexOf(value) === -1) return -1;
                if (departmentA.indexOf(value) === -1 && departmentB.indexOf(value) > -1) return 1;
                if (designationA.indexOf(value) > -1 && designationB.indexOf(value) === -1) return -1;
                if (designationA.indexOf(value) === -1 && designationB.indexOf(value) > -1) return 1;
                if (nameA.indexOf(value) > -1 && nameB.indexOf(value) === -1) return -1;
                if (nameA.indexOf(value) === -1 && nameB.indexOf(value) > -1) return 1;
                return 0;
            });

            $("#userCards").empty().append(cards);

            $("#userCards .card").parent().each(function() {
                var name = $(this).find(".card-title").text().toLowerCase();
                var designation = $(this).find(".designation").text().toLowerCase();
                var department = $(this).find(".department").text().toLowerCase();
                $(this).toggle(
                    name.indexOf(value) > -1 || 
                    designation.indexOf(value) > -1 || 
                    department.indexOf(value) > -1
                );
            });
        });
    });
</script>
</body>
</html>
