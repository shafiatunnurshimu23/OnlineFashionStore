
<section id="blog-details">
<div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Blog</span></li>
                <li class="item-link"><span>detail</span></li>
            </ul>
        </div>
        <h1>{{$blog->name}}</h1>
        <h5>{{$blog->created_at}}</h5>
        <h5>--by {{$blog->writer}}</h5>
        <div class="blog-box">
        <div class="blog-img">
                <img src="{{ asset('asset/blog')}}/{{$blog->image}}.webp" style="height:600px;width:600px;"alt="">
            </div>   
            <div class="blog-details">
                <h3>
               Let's Start
                </h3>
                <p>
                {{$blog->description}}
                    </p>
            </div>
        </div>
        <div class="blog-box " style="padding-right:210px;">
                <p>
                {{$blog->description}}
                    </p>
                    
           
            
        </div>


        


    </section>
        



        



   