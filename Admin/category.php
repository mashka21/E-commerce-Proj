<?php require_once 'include/header.php'; ?>

<div class="container">
    <section class="category-section">
        <h1 class="text-uppercase border-bottom">category</h1>

        <button class="btn btn-primary add_category">Add New Category</button>

        <div class="modal" id="catModel" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" id="catForm">
                            <div class="form-group">
                                <label for="category_name">Category Name</label>
                                <input type="text" class="form-control" name="category_name" id="category_name">
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary save">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php require_once 'include/footer.php'; ?>


<script>
    $(document).ready(function() {
        $(document).on('submit','#catForm', function(e) {
            e.preventDefault();

            var fd = new FormData(this);

            $.ajax({
                url: 'insert/cat_insert.php',
                type: 'POST',
                data: fd,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(response){
                    console(response);
                },
                
            });
        });
    });
</script>