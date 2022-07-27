@extends('layouts.app')

@section('content')


<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</div>
<!-- End All Pages -->

<!-- Start blog details -->
<div class="blog-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Blog</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-12">
                <div class="blog-inner-details-page">
                    <div class="blog-inner-box">
                        <div class="side-blog-img">
                            <img class="img-fluid" src="images/inner-blog-img.jpg" alt="">
                            <div class="date-blog-up">
                                27 Fab
                            </div>
                        </div>
                        <div class="inner-blog-detail details-page">
                            <h3>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h3>
                            <ul>
                                <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
                                <li>|</li>
                                <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
                            </ul>
                            <p>Vestibulum quis ultricies enim. Quisque eu sapien a erat congue lacinia bibendum ac massa. Morbi vehicula aliquet libero sit amet dictum. Integer vel mauris non magna consequat porttitor. Nulla facilisi. Suspendisse posuere, elit eu fringilla congue, turpis magna tempor odio, a placerat magna tortor a mauris. Phasellus lobortis turpis dui, eget mollis ex vestibulum auctor. Nunc viverra leo ut accumsan aliquet. Maecenas aliquam dolor eget felis bibendum blandit.</p>
                            <p>Nunc iaculis, massa eget pellentesque mollis, nulla mauris aliquam eros, vitae condimentum leo nisl ut purus. Etiam nibh diam, vehicula non tincidunt id, consequat nec ex. Praesent vulputate sapien non tellus ultrices hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus pellentesque arcu erat. Curabitur dapibus fringilla porta. Sed in neque sit amet ante feugiat blandit. Nulla fringilla purus diam, cursus venenatis diam luctus nec.</p>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non feugiat lacus. Nunc nisi velit, consectetur vitae ex porttitor, placerat scelerisque mauris. Phasellus sit amet tincidunt metus, quis tempus ex. Quisque in lorem ut mi ullamcorper suscipit eu nec purus. Nam maximus sagittis iaculis.</p>
                            </blockquote>
                            <p>Vestibulum quis ultricies enim. Quisque eu sapien a erat congue lacinia bibendum ac massa. Morbi vehicula aliquet libero sit amet dictum. Integer vel mauris non magna consequat porttitor. Nulla facilisi. Suspendisse posuere, elit eu fringilla congue, turpis magna tempor odio, a placerat magna tortor a mauris.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                <div class="right-side-blog">
                    <h3>Recent Post</h3>
                    <div class="post-box-blog">
                        <div class="recent-post-box">
                            <div class="recent-box-blog">
                                <div class="recent-img">
                                    <img class="img-fluid" src="images/post-img-01.jpg" alt="">
                                </div>
                                <div class="recent-info">
                                    <ul>
                                        <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
                                        <li>|</li>
                                        <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
                                    </ul>
                                    <h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
                                </div>
                            </div>
                            <div class="recent-box-blog">
                                <div class="recent-img">
                                    <img class="img-fluid" src="images/post-img-02.jpg" alt="">
                                </div>
                                <div class="recent-info">
                                    <ul>
                                        <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
                                        <li>|</li>
                                        <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
                                    </ul>
                                    <h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
                                </div>
                            </div>
                            <div class="recent-box-blog">
                                <div class="recent-img">
                                    <img class="img-fluid" src="images/post-img-03.jpg" alt="">
                                </div>
                                <div class="recent-info">
                                    <ul>
                                        <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
                                        <li>|</li>
                                        <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
                                    </ul>
                                    <h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
                                </div>
                            </div>
                            <div class="recent-box-blog">
                                <div class="recent-img">
                                    <img class="img-fluid" src="images/post-img-01.jpg" alt="">
                                </div>
                                <div class="recent-info">
                                    <ul>
                                        <li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
                                        <li>|</li>
                                        <li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
                                    </ul>
                                    <h4>Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End details -->

@endsection
