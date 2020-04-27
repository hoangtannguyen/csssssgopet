@extends('home.layuot.slide')
@section('content')


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row no-gutters ftco-services">
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-shipped"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Ship dịch vụ COD</h3>
        <span>Trên phạm vi toàn quuốc chỉ với 20k - 34k</span>
      </div>
    </div>
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-diet"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Phụ kiện</h3>
        <span>Đa dạng & phù hợp - chất lượng </span>
      </div>
    </div>
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-award"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Thanh Toán </h3>
        <span>Khi nhận hàng & kiểm tra chất lượng</span>
      </div>
    </div>
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services mb-md-0 mb-4">
      <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-customer-service"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Hotline : 093.195.1945</h3>
        <span>Tư vấn miễn phí 24/24</span>
      </div>
    </div>
    </div>
    </div>
    </div>
    <br><br><br><br>
    <div class="container">
      <div class="row">



        <div class="col-lg-8 ftco-animate">
                      <h2 class="mb-3">#1 {{ $ct_lt->name }}</h2>
          <p>* {{ $ct_lt->describe }}</p>
          <p>
            <img src="{{ $ct_lt->image }}" alt="" class="img-fluid" style="width:500px;height:500px">
          </p>
          <p>{{ $ct_lt->describetion }}</p>
          <h2 class="mb-3 mt-5">#2 {{ $ct_lt->name2 }}</h2>
          <p>* {{ $ct_lt->describe2 }}</p>
          <p>
            <img src="{{ $ct_lt->image2 }}" alt="" class="img-fluid" style="width:500px;height:500px">
          </p>
          <p>{{ $ct_lt->describetion2 }}</p>

          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">Life</a>
              <a href="#" class="tag-cloud-link">Sport</a>
              <a href="#" class="tag-cloud-link">Tech</a>
              <a href="#" class="tag-cloud-link">Travel</a>
            </div>
          </div>

          <div class="about-author d-flex p-4 bg-light">
            <div class="bio align-self-md-center mr-4">
              <img src="/images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
            </div>
            <div class="desc align-self-md-center">
              <h3>Lance Smith</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>


          <div class="pt-5 mt-5">
            <h3 class="mb-5">6 Comments</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                  <img src="/images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">June 27, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="/images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">June 27, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="/images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">June 27, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>


                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="/images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta">June 27, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>

                          <ul class="children">
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="/images/person_1.jpg" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                                <h3>John Doe</h3>
                                <div class="meta">June 27, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                              </div>
                            </li>
                          </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="/images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">June 27, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="p-5 bg-light">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
            </div>
          </div>
        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon ion-ios-search"></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
              <h3 class="heading">Categories</h3>
            <ul class="categories">
              <li><a href="#">Vegetables <span>(12)</span></a></li>
              <li><a href="#">Fruits <span>(22)</span></a></li>
              <li><a href="#">Juice <span>(37)</span></a></li>
              <li><a href="#">Dries <span>(42)</span></a></li>
            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading">Recent Blog</h3>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(/images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(/images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(/images/image_3.jpg);"></a>
              <div class="text">
                <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading">Tag Cloud</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">fruits</a>
              <a href="#" class="tag-cloud-link">tomatoe</a>
              <a href="#" class="tag-cloud-link">mango</a>
              <a href="#" class="tag-cloud-link">apple</a>
              <a href="#" class="tag-cloud-link">carrots</a>
              <a href="#" class="tag-cloud-link">orange</a>
              <a href="#" class="tag-cloud-link">pepper</a>
              <a href="#" class="tag-cloud-link">eggplant</a>
            </div>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading">Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>

      </div>


    </div>
  </section> <!-- .section -->

  @endsection
