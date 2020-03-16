<?php
require_once 'Controllers/ProductsController.php';
require_once 'Controllers/DvdsController.php';
require_once 'Controllers/BooksController.php';
require_once 'Controllers/FurnituresController.php';

use Controllers\BooksController;
use Controllers\DvdsController;
use Controllers\FurnituresController;

?>

<?php
$dvds = DvdsController::getDvds();
$books = BooksController::getBooks();
$furnitures = FurnituresController::getFurnitures();
?>
<button type="submit" class="btn btn-warning saveButton float-right" id="applyButton" name="apply">Apply</button>
<section class="massDelete grouped d-inline-block">

    <section class="viewDvds grouped">
        <?php foreach ($dvds as $dvd): ?>
            <div class="card border-primary m-2 text-center d-inline-block" style="width: 18rem; height: 14rem;">

                <h5 class="card-header" style="background-color: lightblue;"><?php echo $dvd->getType() ?>
                    <input type="checkbox" name="checkBoxArray[]" class="checkbox checkboxDvd float-right" value="<?php echo $dvd->getSku(); ?>">
                </h5>
                <div class="card-body">
                    <h6 class="card-title"><?php echo $dvd->getSku() ?></h6>
                    <h6 class="card-title"><?php echo $dvd->getName() ?></h6>
                    <h6 class="card-title"><?php echo $dvd->convertPrice() ?></h6>
                    <h6 class="card-title">Size: <?php echo $dvd->getSize() ?> MB</h6>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="viewBooks grouped">
        <?php foreach ($books as $book): ?>
            <div class="card border-primary m-2 text-center d-inline-block" style="width: 18rem; height: 14rem;">
                <h5 class="card-header" style="background-color: lightsalmon;"><?php echo $book->getType() ?>
                    <input type="checkbox" name="checkBoxArray[]" class="checkbox checkboxBook float-right" value="<?php echo $book->getSku(); ?>">
                </h5>
                <div class="card-body">
                    <h6 class="card-title"><?php echo $book->getSku() ?></h6>
                    <h6 class="card-title"><?php echo $book->getName() ?></h6>
                    <h6 class="card-title"><?php echo $book->convertPrice() ?></h6>
                    <h6 class="card-title">Weight: <?php echo $book->convertWeight() ?></h6>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="viewFurnitures grouped">
        <?php foreach ($furnitures as $furniture): ?>
            <div class="card border-primary m-2 text-center d-inline-block" style="width: 18rem; height: 14rem;">
                <h5 class="card-header" style="background-color: #e5ee8e;"><?php echo $furniture->getType() ?>
                    <input type="checkbox" name="checkBoxArray[]" class="checkbox checkboxFurniture float-right" value="<?php echo $furniture->getSku(); ?>">
                </h5>
                <div class="card-body">
                    <h6 class="card-title"><?php echo $furniture->getSku() ?></h6>
                    <h6 class="card-title"><?php echo $furniture->getName() ?></h6>
                    <h6 class="card-title"><?php echo $furniture->convertPrice() ?></h6>
                    <h6 class="card-title">Dimensions(cm): <?php echo $furniture->getDimensions() ?></h6>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

</section>



