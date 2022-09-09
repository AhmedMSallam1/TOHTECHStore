<?php
include 'header.php';

if ($_POST) {
    $title = $_POST['title'];
    $cat = $_POST['cid'];
    $img = $_POST['img'];
    $content = $_POST['content'];
    $price = $_POST['price'];

    $qry = "INSERT INTO `products`(`TITLE`, `cid`, `IMAGE`, `CONTENT`,`PRICE`) VALUES 
            ('$title', '$cat', '$img', '$content', '$price')";
    $res = mysqli_query($cdb, $qry);
} ?>        


    <div class="col-10 mt-150">
        <p class="text-center h3">Add Product</p>
        <table class="table table-hover table-bordered mt-3">
            <tr>
                <form action="#" method="post">
                    <td colspan="2"></td>
                    <td>
                        <button type="button" class="form-control btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">Add
                        </button>
                    </td>
                </form>
            </tr>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Action</th>
            </tr>

            <?php
            $qry = 'select * from products order by ID desc';
            $res = mysqli_query($cdb, $qry);
            $n = 1;
            foreach ($res as $r): ?>
                <tr>
                    <th><?= $n++ ?></th>
                    <td><?= $r['TITLE'] ?></td>
                    <td>
                        <a  href="del_product.php ? id= <?= $r['ID'] ?>">
                            <i class="fas fa-trash-alt text-danger fa-2x"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
    </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="title">Product Title</label>
                            <input type="text" name="title" id="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label for="cid">Category</label>
                            <select name="cid" id="cid" required>
                                <?php
                                $sql = 'select * from cat order by cid';
                                $res = mysqli_query($cdb, $sql);
                                foreach ($res as $r): ?>
                                    <option value="<?= $r['cid'] ?>"><?= $r['cn'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="img">Product Image</label>
                            <input type="text" name="img" id="img" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>
