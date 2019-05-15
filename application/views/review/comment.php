<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment</title>
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
    <style>
    .blas {
    	margin-top: 20px !important;
    }
</style>
</head>

<body>

        <!-- Comment -->
        <div class="container">
            <div class="row blas">
                <div class="col-lg-8">
                    <h5>73 Comment Founds</h5>

                        <!-- Comment orang lain -->
                        <div class="card a-comment">
                            <div class="card-header">
                                Username <span class="date">Date</span>
                            </div>
                            <div class="card-body">
                                
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti autem minima quas quis quidem aut. Repellat officia nemo fugiat, ratione numquam laborum porro ipsum accusantium ipsam libero quia, sequi labore.</p>
                                
                            </div>
                            <!-- Akhir Comment orang lain -->


                            
                            <!-- Balas komentar -->
                            <div class="card-footer">
                                <a href = "#" id="pemicu" class="balas"> Reply</a>
                                
                                <div class="input-group mb-3 reply reply-a" id="target">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">reply</button>
                                    </div>
                                    </div>
                            </div>
                        </div>


                        <!-- Akgir comment orang lain -->
                       

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

                </div>
            </div>
        </div>


        <div class="container bawah">
            <div class="row">
                <div class="col-lg-8">
                <div class="card">
                            <div class="card-body">
                            <div class="kotak"><span>User</span></div>
                            <input type="comment" class="form-control komentar"  aria-describedby="emailHelp" placeholder="enter comment">
                            <button type="button" class="btn btn-info tblpost">Post Comment</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <script>
        $(document).ready(function(){
           $('#pemicu').click(function(){
               $('#target').removeClass("reply-a");
               $('#pemicu').hide();
            });
        });
        </script>
</body>
</html>