@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/{{$blog->thumbnail}}" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">{{$blog->created_at}}</div>
                            <a href="#" class="tag">#{{$blog->tags}}</a>
                        </div>
                        <h4><a href="./blog-detay">{{@$blog->head}}</a></h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Blog Section End -->

@include('layouts.footer')
