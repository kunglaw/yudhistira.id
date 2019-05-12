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
                            <h2 class="card-title"> {{ $post->title }} </h2>
                            <div class="small">Posted By : {{ $post->name }}</div>
                            <hr>
                            <div>{{ $post->content }}</div>
                        </div>
                    </div>
                    <div class="v-space"></div>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <h5 class="card-title"> Comments </h5>
                            </div>
                            <ul class="list-group list-group-flush">
                            <?php foreach($post->comments as $row1){ ?>
                                <li class="list-group-item">
                                    <div class="small"> {{ $row1->user->name }} : </div> 
                                    <div> {{ $row1->comment }}</div> 
                                </li>
                              
                            <?php }?>
                            </ul>
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