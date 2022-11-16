<?php  include(VIEWS.'inc'.DS.'header.php'); ?>
<?php
if(isset($data)){
    
     extract($data);
     echo $name;

}
?>
<h1 class="text-center  my-5 py-3">Edit New Product </h1>

<div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
               
                <form class="p-5 border mb-5" method="POST" action="<?php url('product/update/'.$id); ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required name="name" class="form-control" id="name" value = <?php echo  $name?>>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" required class="form-control" name="price" id="price"  value = <?php echo  $price?>>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" required class="form-control" name="description" id="description"  value = <?php echo $description?>>
                    </div>

                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="number" required class="form-control" name="qty" id="qty"  value = <?php echo $qty?>>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                            
            </div>
        </div>
    </div>


<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>