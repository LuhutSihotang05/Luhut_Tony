<?php
echo"<div class='d-grid gap-2 d-md-flex'>
    <button class='btn btn-primary' type='button' data-bs-toggle='modal' data-bs-target='#updateDataModal'>
        <i class='fa-solid fa-pen-to-square'></i>
    </button>
    <!-- Awal Update Modal -->
    <div class='modal fade' id='updateDataModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <!-- Rest of your modal code -->
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h1 class='modal-title fs-5' id='exampleModalLabel'>Update Data</h1>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <!-- awal form update -->
                    <form action='updatedata.php' method='POST' enctype='multipart/form-data'>
                        <div class='row mb-3'>
                            <label for='inputPassword3' class='col-sm-4 col-form-label'>ID</label>
                            <div class='col-sm-8'>
                                <input type='text' class='form-control' id='inputPassword3' name='id' value='#'>
                            </div>
                        </div>
                        <!-- Rest of the form inputs -->

                        <div class='mt-2 mb-3'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                            <button type='submit' class='btn btn-primary' value='updatedata' name='updatedata'>Update</button>
                        </div>
                    </form>
                    <!-- /awal form update -->
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Update Modal -->
    <button class='btn btn-primary' type='button' onclick='confirmDelete(<?php echo $data['id']; ?>)'>
        <i class='fa-solid fa-trash-can'></i>
    </button>
</div>";
?>
