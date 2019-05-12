<!DOCTYPE html>
<html>
    <head>
        @include("head")
        <style>
            #header{
                height:400px;
                background-image:url("http://localhost:8000/img/background-img.jpg");
                background-size:cover;
            }

            #header h1{ font-size:60px;}
        </style>
    </head>
    <body>

        @include("nav")
        <section id="header" class="" style="">
           <div style="height:100%;display:table;width: 100%;padding: 0;">
            <div style="height: 100%; display:table-cell; vertical-align: middle;" class="text-center text-white">
               <span style="margin:0 auto; float:none" class="">
                <h1> Yudhistira Blog </h1>
                <p> Your Inspirational Article </p>
               </span>
            </div>
           </div>
        </section>
        <section id="post">
            <div class="container">
                <center>
                    <h1> Latest Post </h1>
                    <p> My Awesome Updated Post </p>
                </center>
            </div>
        </section>
        @include("footer")
    </body>

</html>