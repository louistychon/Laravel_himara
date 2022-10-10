@extends('front.layouts.blog')
@section('content')
      <!-- ========== PAGE TITLE ========== -->
      @include('front.components.pagetitle')
      <!-- ========== MAIN ========== -->
      <main>
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-12">
              <!-- POSTS -->
              <div class="blog-posts">
                <!-- POST -->
                @foreach ($articles as $article )
                <article class="post">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="post-thumbnail">
                        <figure class="gradient-overlay-hover link-icon">
                          <a href="#">
                            <img src="{{asset('storage/blog/thumbnail/'. $article->src)}}" class="img-fluid" alt="Image">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="post-details">
                        <h2 class="post-title">
                          <a href="#">{{$article->title}}</a>
                        </h2>
                        <div class="post-meta">
                          <span class="author">
                            <a href="#"><img src="images/users/admin.jpg" width="16" alt="Image">{{$article->users->name}}</a>
                          </span>
                          <span class="date">
                            <a href="#">
                              <i class="fa fa-clock-o"></i>{{date('d-m-Y', strtotime($article->updated_at))}}</a>
                          </span>
                          <span class="comments">
                            <a href="#">
                              <i class="fa fa-commenting-o"></i>{{$article->comments}} Comment</a>
                          </span>
                          <span class="category">
                            <i class="fa fa-folder-open-o"></i>IN
                            <a href="#">News</a>,
                            <a href="#">Events</a>
                          </span>
                        </div>
                        <p>{{$article->long_desc}}</p>
                      </div>
                    </div>
                  </div>
                </article>
                @endforeach

              </div>
              <!-- ========== PAGINATION ========== -->
             {{$articles->links()}}
            </div>
            <!-- SIDEBAR -->
            <div class="col-lg-3 col-12">
              <div class="sidebar">
                <aside class="widget noborder">
                  <div class="search">
                    <form class="widget-search">
                      <input type="search" placeholder="Search">
                      <button class="btn-search" id="searchsubmit" type="submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </form>
                  </div>
                </aside>
                <!-- WIDGET -->
                <aside class="widget">
                    <h4 class="widget-title">CATEGORIES</h4>
                    <ul class="categories">
                        @foreach ($categories as $category)

                        <li>
                            <a href="#">{{$category->name}}<span class="posts-num">{{$category->articles_count}}</span></a>
                        </li>
                        @endforeach
                    </ul>
                </aside>
                <!-- WIDGET -->
                <aside class="widget">
                  <h4 class="widget-title">Latest Posts</h4>
                  <div class="latest-posts">
                    <!-- ITEM -->
                    @foreach ($articles as $article )
                    <div class="latest-post-item">
                        <div class="row">
                            <div class="col-5">
                                <figure class="gradient-overlay-hover link-icon sm">
                                    <a href="#">
                                        <img src="{{asset('storage/blog/'. $article->src)}}" class="img-fluid" alt="Image">
                                    </a>
                                </figure>
                            </div>
                            <div class="col-7">
                                <div class="post-details">
                                    <h6 class="post-title">
                                        <a href="#">{{$article->title}}</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  </div>
                </aside>
                <!-- WIDGET -->
                <aside class="widget">
                  <h4 class="widget-title">Tags</h4>
                  <div class="tagcloud">
                    @foreach ($tags as $tag)
                    <a href="#">
                        <span class="tag">{{$tag->name}}</span></a>
                        @endforeach
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </main>
@endsection
