
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>

    @include('inc.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post-item">
                    <div class="post-item-image">
                        <a href="post.html">
                            <img src="/img/Post_Image_1.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="padding-10">
                            <h2><a href="post.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptas, blanditiis impedit repellat harum, eaque saepe aspernatur quo magnam obcaecati dolor! Deleniti quod repellendus non iste architecto, voluptate excepturi velit.</p>
                        </div>

                        <div class="post-meta padding-10 clearfix">
                            <div class="pull-left">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <a href="post.html">Continue Reading &raquo;</a>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
            <div class="col-md-4">
                <aside class="right-sidebar">
                    <div class="search-widget">
                        <div class="input-group">
                          <input type="text" class="form-control input-lg" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-lg btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                          </span>
                        </div><!-- /input-group -->
                    </div>

                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Categories</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="categories">
                                <li>
                                    <a href="#"><i class="fa fa-angle-right"></i> Web Development</a>
                                    <span class="badge pull-right">10</span>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right"></i> Web Design</a>
                                    <span class="badge pull-right">10</span>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right"></i> General</a>
                                    <span class="badge pull-right">10</span>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right"></i> DIY</a>
                                    <span class="badge pull-right">10</span>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-right"></i> Facebook Development</a>
                                    <span class="badge pull-right">10</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Popular Posts</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="popular-posts">
                                <li>
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="img/Post_Image_5_thumb.jpg" />
                                        </a>
                                    </div>
                                    <div class="post-body">
                                        <h6><a href="#">Blog Post #5</a></h6>
                                        <div class="post-meta">
                                            <span>36 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="img/Post_Image_4_thumb.jpg" />
                                        </a>
                                    </div>
                                    <div class="post-body">
                                        <h6><a href="#">Blog Post #4</a></h6>
                                        <div class="post-meta">
                                            <span>36 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="img/Post_Image_3_thumb.jpg" />
                                        </a>
                                    </div>
                                    <div class="post-body">
                                        <h6><a href="#">Blog Post #3</a></h6>
                                        <div class="post-meta">
                                            <span>36 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Tags</h4>
                        </div>
                        <div class="widget-body">
                            <ul class="tags">
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">Codeigniter</a></li>
                                <li><a href="#">Yii</a></li>
                                <li><a href="#">Laravel</a></li>
                                <li><a href="#">Ruby on Rails</a></li>
                                <li><a href="#">jQuery</a></li>
                                <li><a href="#">Vue Js</a></li>
                                <li><a href="#">React Js</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">&copy; 2016 Edo Masaru</p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul class="social-icons">
                            <li><a href="#" class="i fa fa-facebook"></a></li>
                            <li><a href="#" class="i fa fa-twitter"></a></li>
                            <li><a href="#" class="i fa fa-google-plus"></a></li>
                            <li><a href="#" class="i fa fa-github"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
