<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <!-- Table data -->
        <table class="table" id="usertable">
            <thead class="table-dark">
                <tr>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Picture 1</th>
                <td>Joe Tech</td>
                <td>joetech@gmail.com</td>
                <td>+254 797737128</td>
                <td>
                    <a href="#" class="mr-3 profile" data-target="#userViewModal" data-toggle="modal" title="View Profile"><i class="fas fa-eye text-info"></i></a>
                    <a href="#" class="mr-3 edituser"><i class="fas fa-edit text-success" data-target="#usermodal" data-toggle="modal"  title="Edit Profile"></i></a>
                    <a href="#" class="mr-3 deleteuser"><i class="fas fa-trash-alt text-danger"  title="Delete Profile"></i></a>
                </td>
            </tbody>
        </table>
        <!-- End Table data -->

        <!-- Pagination -->
        <div>
            <nav aria-label="Page navigation example" id="pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <!-- End Pagination -->
    </div>
</body>
</html>