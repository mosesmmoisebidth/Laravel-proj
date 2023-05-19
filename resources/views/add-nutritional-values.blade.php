<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                </div>
                <div class="col-md-2 text-end">
                    <a href="{{url('/food-overview')}}" class="btn btn-black btn-round btn-cross-lg">
                        <!-- <img src="img/icon/Close-light.png" alt=""> -->
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container profile">

        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <h1 class="profile-title">N&auml;hrwerte Zuweisen</h1>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-6 offset-md-3">

                <div class="row ">
                    <form action="food-overview" method="POST">
                    <div class="col-md-5 mb-2">
                        <input type="text" class="form-control" id="nutritional-values" name="nutritional" placeholder="Nutritional values">
                    </div>
                    <div class="col-md-5 mb-2">
                        <input type="text" class="form-control" id="amount-per-100g" name="amount" placeholder="Amount per 100g">
                    </div>
                    <div class="col-md-2 mb-2 text-end">
                        <button type="button" class="btn btn-theme btn-round btn-add-lg" onclick="addRow()">
                            <!-- <img src="img/icon/Close-light.png" alt=""> -->
                            <i class="fas-solid fa-plus" aria-hidden="true"></i>
                        </button>

                    </div>
                    </form>
                </div>
                <div class="row ">
                    <div class="col-md-12 mb-4">
                        <div class="tablebox">
                            <table id="nutritional-table">
                                <tbody>
                                    <tr>
                                        <td>Calcium</td>
                                        <td id="calcium-value">1</td>
                                        <td>
                                            <a class="btn-delete btn" href="#" onclick="deleteRow(this)">
                                                <!-- <img src="img/icon/trash-light.png" alt=""> -->
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carbohydrate</td>
                                        <td id="carbohydrate-value">2</td>
                                        <td>
                                            <a class="btn-delete btn" href="#" onclick="deleteRow(this)">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-8 offset-sm-2 col-12 d-grid">
                        <a class="btn btn-login" type="submit" href="{{url('/food-overview')}}">Upload</a>
                        <!-- <link rel="" type="" href="{{url('/food-overview')}}"> -->
                    </div>
                </div>

            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script>
        function addRow() {
            var nutritionalValues = document.getElementById("nutritional-values").value;
            var amountPer100g = document.getElementById("amount-per-100g").value;

            if (nutritionalValues && amountPer100g) {
                var table = document.getElementById("nutritional-table").getElementsByTagName("tbody")[0];
                var newRow = table.insertRow();
                var cell1 = newRow.insertCell(0);
                var cell2 = newRow.insertCell(1);
                var cell3 = newRow.insertCell(2);

                cell1.innerHTML = nutritionalValues;
                cell2.innerHTML = amountPer100g;

                var deleteButton = document.createElement("a");
                deleteButton.setAttribute("class", "btn-delete btn");
                deleteButton.setAttribute("href", "#");
                deleteButton.setAttribute("onclick", "deleteRow(this)");

                var icon = document.createElement("i");
                icon.setAttribute("class", "fa fa-trash-o");
                icon.setAttribute("aria-hidden", "true");

                deleteButton.appendChild(icon);
                cell3.appendChild(deleteButton);

                // Clear input fields
                document.getElementById("nutritional-values").value = "";
                document.getElementById("amount-per-100g").value = "";
            }
        }

        function deleteRow(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>

</html>
