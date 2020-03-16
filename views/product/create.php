<section class="col">
    <fieldset class="leftbox">
        <div class="form-group">
            <label for="sku">SKU:</label>
            <input type="text" class="form-control" name="sku"
                   value="<?php echo $_SESSION['sku'] ?? null ?>">
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="<?php echo $_SESSION['nameField'] ?? "form-control"; ?>" name="name"
                   value="<?php echo $_SESSION['name'] ?? null ?>">
        </div>

        <div class="form-group">
            <label for="price">Price (in cents):</label>
            <input type="text" class="form-control" name="price"
                   value="<?php echo $_SESSION['price'] ?? null ?>">
        </div>

        <div class="form-group">
            <form action="" method="get" name="typesForm">
                <label for="typeSelect">Type</label>
                <select class="form-control" id="typeSelect" name="type">
                    <option value="dvd" selected>DVD-disc</option>
                    <option value="book">Book</option>
                    <option value="furniture">Furniture</option>
                </select>
            </form>
        </div>
    </fieldset>

    <section class="dvd select">
        <div class="card border-light rightbox col-md-3 p-0">
            <div class="card-header">DVD-disc</div>
            <div class="card-body">
                <h4 class="card-title">Size(MB):</h4>
                <input type="number" class="form-control" name="size">
                <p class="card-text">Please, enter storage capacity of a DVD-disc in megabytes.</p>
            </div>
        </div>
    </section>

    <section class="book select">
        <div class="card border-light rightbox col-md-3 p-0">
            <div class="card-header">Book</div>
            <div class="card-body">
                <h4 class="card-title">Weight(g):</h4>
                <input type="number" class="form-control" name="weight">
                <p class="card-text">Please, enter weight of a book in grams.</p>
            </div>
        </div>
    </section>

    <section class="furniture select">
        <div class="card border-light rightbox col-md-3 p-0">
            <div class="card-header">Furniture</div>
            <div class="card-body">
                <h4 class="card-title">Height(mm):</h4>
                <input type="number" class="form-control" name="height">
                <h4 class="card-title">Width(mm):</h4>
                <input type="number" class="form-control" name="width">
                <h4 class="card-title">Length(mm):</h4>
                <input type="number" class="form-control" name="length">
                <p class="card-text">Please, enter dimensions in millimeters.</p>
            </div>
        </div>
    </section>

    </form>
</section>
