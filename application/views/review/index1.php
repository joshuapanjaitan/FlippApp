<style>
    .blas {
    	margin-top: 20px !important;
    }
</style>
<link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />

<div class="container">
    <div class="row blas">
        <!-- head dari setiap kolom review -->
            <div class="head-of-review">
                <h4>  <span class="total-reviews"><?=$count?></span>  Reviews <span class="star"></span></h4>
           </div>
           <select class="custom-select" id="inputGroupSelect02">
                <option selected>Sort by Newsest</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            
    </div>
    
    <div class="row">
        <div class="col-lg-7">
            <hr class="batas">

            <!--Card Of Review  --> 
            <?php foreach ($review as $row) : ?>
            <div class="card rev">
            <div class="card-header">
                <span class="rate"><?= $row["rate"] ?>/5 <b>Rate For Us</b></span> <!--Tempat rating star -->
               <span class="owner">by <a href='#'>user</a></span> <!--Nama user yang merevirew -->
               <span class="waktu"><?= $date = date('Y-m-d'); ?></span> <!--Waktu review -->
               <div class="dropdown">
                <a class="dropdown-toggle ex" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" name="edit" data-toggle="modal" data-target="#edit<?=$row["id"]?>">Edit</a>
                    <a class="dropdown-item" name ="hapus" href="<?=base_url();?>cReview/hapusReview/<?=$row['id']?>" onclick="return confirm('Apakah anda yakin ?');">Delete</a>
                </div>
                </div>
            </div>
            
            <div class="card-body">
           
                <p class="card-text"><?= $row['reviews']; ?></p>
                
            </div>
            </div>


            <div class="modal" id="edit<?=$row["id"]?>">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Edit Komentar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form action ="<?=base_url()?>cReview/edit" method="post">
                    <select class="browser-default custom-select ink" name="e_rating">
                        <?php foreach($rate as $r): ?>
                            <?php if($r == $row["rate"]) :?>
                                <option value="<?=$r?>" selected><?=$r?></option>
                            <?php else: ?>
                                <option value="<?=$r?>"><?=$r?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" name="e_komen"><?=$row["reviews"]?></textarea>
                            <input type="hidden" name="id_edit" value="<?=$row['id'];?>">
                        </div>
                    
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" name="ubah" class="btn btn-primary">Edit</button>
                </form>
                </div>
                
            </div>
            </div>
        </div>
    <?php endforeach; ?>
            <!--End Card Of Review  --> 

        
           
        <!-- Pagination -->

            <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end odin">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">></a>
                </li>
            </ul>
            </nav>
        </div>
    <!-- End of Pagination -->



<!-- Card yang disamping card review -->
        <div class="col-lg-5">
        <div class="card samping">
            <div class="card-body">
                <h5 class="card-title">Regular License</h5>
                <hr>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias, maiores quae. Laudantium reiciendis temporibus molestias enim sed quae eligendi soluta facilis, consequatur quibusdam at iure facere quo odit expedita maiores.</p>
            </div>
            </div>
        </div>
    </div>
<!-- End Card yang disamping card review -->
</div>

<!-- End of Container -->


