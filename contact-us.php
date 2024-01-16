<?php require_once("header.php") ?>
<main class="contact">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Names:</label>
            <input type="text" class="form-control" placeholder="Enter your Names">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Enter Your Email">

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="Enter your Address">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product ID</label>
            <input type="text" class="form-control" placeholder="Enter Product ID">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Select Products</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Choose a Product</option>
                <option value="1">Sim Card</option>
                <option value="2">4G</option>
                <option value="3">MOMO</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quantity</label>
            <input type="text" class="form-control" placeholder="Enter Product Quantity">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Brand</label>
            <input type="text" class="form-control" placeholder="Enter Product Brand">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Unit Price</label>
            <input type="text" class="form-control" placeholder="Enter Product Unit Price">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Total Cost</label>
            <input type="text" class="form-control" placeholder="Enter Product Total Cost">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</main>
<?php require_once("footer.php") ?>