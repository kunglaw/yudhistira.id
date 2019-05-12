<!DOCTYPE html>
<html>
    <head>
        @include("head")
    </head>
    <body>

       @include("nav")
        <div class="v-space"></div>
        <section class="container">
          <div class="row"> 
            <div class="col-md-9"> 
                <div class="col-md-offset-1"> 
                    <div class="card">
                        
                        <div class="card-body">
                            <h2 class="card-title"> Post List </h2>
                            <hr>

                            <table class="table table-bordered">
                                <thead>
                                    <th> Title </th>
                                    <th> Username </th>
                                    <th> Action </th>   
                                </thead>
                                <tbody>
                                   <?php foreach($post as $row){ ?>
                                   <tr>
                                    <td><a href="<?=url("post/detail/".$row->id)?>"> {{ $row->title }} </a> </td>
                                    <td>{{ $row->name }}</td>
                                    <td>
                                        <a href="<?=url("post/update/".$row->id)?>" class="btn btn-primary"> U </a>
                                        <a href="<?=url("post/delete/".$row->id)?>" class="btn btn-danger"> D </a>
                                    </td>
                                   <tr>
                                   <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-3"> 
                <div class=""> 
                    <ul class="list-group">
                        <li class="list-group-item bg-primary"> <h4 class="text-white"> Category </h4> </li>
                        <li class="list-group-item">
                            <a href="#" class="nav-link"> HTML + CSS</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="nav-link"> PHP </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="nav-link"> Codeigniter </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="nav-link"> Laravel </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="nav-link"> React Native </a>
                        </li>
                    </li>
                </div>
            </div> 
          </div>
        </section>
        <div class="v-space"></div> 
        @include("footer")
    </body>

</html>