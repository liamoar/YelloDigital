@extends('layouts.app')
@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-8">
            @foreach($posts as $post)
              <article class="post-item">
                  @if($post->cover_image)
                    <div class="post-item-image">
                        <a href="post.html">
                            <img src="/img/{{$post->cover_image}}" alt="">
                        </a>
                    </div>
                  @endif
                  <div class="post-item-body">
                      <div class="padding-10">
                          <h2><a href="post.html">{{$post->title}}</a></h2>
                          <p>{{$post->exerpt}}.</p>
                      </div>

                      <div class="post-meta padding-10 clearfix">
                          <div class="pull-left">
                              <ul class="post-meta-group">
                                {{dd ('fgvghvhg',$post->userss}}
                                  <li><i class="fa fa-user"></i><a href="#">{{$post->userss->name}}</a></li>
                                  <li><i class="fa fa-clock-o"></i><time>{{$post->created_at->diffForHumans()}}</time></li>
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
            @endforeach


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
   <!--pagination-->
  <div class="container">
    <div class="col-md-3 offset-md-3">
      <nav>
        {{$posts->links()}}
      </nav>
    </div>
  </div>
@endsection
