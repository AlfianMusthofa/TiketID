<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>TicketID | Content Management System</title>

    <link rel="stylesheet" href="<?= BASEURL ?>/css/<?= $data['css'] ?>">
</head>

<body>

    <div class="header">
        <div class="logo">
            <a href="#">TicketID</a>
        </div>
    </div>

    <div class="main-content">

        <button type="button" class="btn btn-primary tambahData" data-bs-toggle="modal" data-bs-target="#modalBox">
            Tambah Data Hotel
        </button>

        <div class="modal fade" id="modalBox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Address</th>
                    <th scope="col">Price</th>
                    <th scope="col">Disc</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1;
                foreach ($data['datas'] as $data) : ?>
                    <tr>
                        <th scope="row"><?= $counter++ ?></th>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['img'] ?></td>
                        <td><?= $data['address'] ?></td>
                        <td><?= $data['lp'] ?></td>
                        <td><?= $data['np'] ?></td>
                        <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalBox" class="updateButton">Update |</a>
                            <a href="<?= BASEURL ?>/cms/hapus/<?= $data['id'] ?>" id="deleteButton"> Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?= BASEURL ?>/js/cms.js"></script>
</body>

</html>