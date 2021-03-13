<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/BlogController.php");

$blog = new BlogController;
$eloquent = new Eloquent;

?>

<!-- YOUR PAGE DESIGN WILL GO BELOW -->

<!-- Slider Part Start-->

 <div class="breadcrumb-area-2 breadcrumb-bg-5 jarallax mt-175">
            <div class="container-fluid">
                <div class="breadcrumb-content-2 text-center">
                    <div class="breadcrumb-title-2">
                        <h2>Hello London</h2>
                        <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget
                        </p>
                    </div>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li>
                            <a href="#">Travel </a>
                        </li>
                        <li class="active"> Hello London</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- blog start -->
        <div class="blog-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                        <div class="blog-details-content mb-65">
                            <div class="reason-reason-area blog-mrg-increase">
                                <h3>Why Visit London, UK?</h3>
                                <p>London is a real world city – with some of the most famous buildings, museums and galleries in the world and 2000 years of history to go with them.</p>
                                <p>But it’s not just looking backwards, there’s always a new bar, play or concert to see. London is also one of the most international cities, with people from all around the world making their home here, so it’s just as easy to get Indian street food as it is a roast dinner.Yes, it might rain a lot and no people won’t smile on the Tube, but whatever you’re interested in – from museums to shopping, rock to opera, budget to luxury – there’s a London that will suit you.</p>
                            </div>
                            <div class="blog-details-list">
                                <h3>Best Things to Do in London, UK</h3>
                                <ul>
                                    <li>Walk along South Bank: follow the Thames from the London Eye along to Tower Bridge and you’ll pass some of London’s most famous buildings, like the Tower of London, Shakespeare’s Globe and Tate Modern.</li>
                                    <li>Get a great view: to see the city from above, you can climb to the top of the Monument and the dome of St Paul’s Cathedral, and from February there’ll be a viewing platform at the top of London’s new tallest building, the Shard.</li>
                                    <li>Visit the museums: the permanent collections at London’s museums are free so you can dip into as many as you like. Choose from big names like the British Museum and National Gallery, or check out some of the smaller museums like Sir John Soane’s Museum and the Cabinet War Rooms.</li>
                                </ul>
                            </div>
                            <div class="reason-reason-area blog-mrg-increase">
                                <h3>Where to eat in London</h3>
                                <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget, ultrices metus. Nulla facilisi. Duis aliquet, eros in auctor aliquam, tortor justo laoreet nisi, nec pulvinar lectus diam nec libero. Nullam sit amet dia</p>
                                <p>Cras porta posuere lectus, vitae consectetur dolor elementum id. Ut interdum, sem eget varius eleifend, ex risus gravida purus, sed finibus tortor nisi maximus orci. Etiam vel sollicitudin nisi. In ipsum tortor, vulputate nec est in, pharetra malesuada diam. Praesent ullamcorper lacinia ultrices. Etiam semper cursus mi, id tempor neque porta non. Praesent nec faucibus risus. Morbi aliquam hendrerit felis, eu cursus orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="blog-details-banner">
                            <img src="assets/images/blog/blog-details-3.jpg" alt="banner">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="blog-details-banner">
                            <img src="assets/images/blog/blog-details-4.jpg" alt="banner">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="blog-details-banner">
                            <img src="assets/images/blog/blog-details-5.jpg" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-area video-area-ptb-3 bg-img jarallax" style="background-image:url(assets/images/bg/bg-8.jpg);">
                <div class="container">
                    <div class="video-content text-center">
                        <div class="video-btn">
                            <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><img src="assets/images/icon-img/play-btn-white.png" alt="icon-img"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                        <div class="blog-details-content mt-65">
                            <div class="reason-reason-area blog-mrg-increase">
                                <h3>I love London because..</h3>
                                <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales dolor nec mattis convallis. Quisque ut nulla viverra, posuere lorem eget, ultrices metus. Nulla facilisi. Duis aliquet, eros in auctor aliquam, tortor justo laoreet nisi, nec pulvinar lectus diam nec libero. Nullam sit amet dia</p>
                                <p>Cras porta posuere lectus, vitae consectetur dolor elementum id. Ut interdum, sem eget varius eleifend, ex risus gravida purus, sed finibus tortor nisi maximus orci. Etiam vel sollicitudin nisi. In ipsum tortor, vulputate nec est in, pharetra malesuada diam. Praesent ullamcorper lacinia ultrices. Etiam semper cursus mi, id tempor neque porta non. Praesent nec faucibus risus. Morbi aliquam hendrerit felis, eu cursus orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ant</p>
                                <blockquote>
                                    <p>“Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed rutrum at ante in lacinia. Maecenas dignissim lacus orci, a euismod ipsum ornare convallis. Morbi tristique consectetur purus, quis cursus ante posuere nec. Cras quis pharetra ex. Cras vehicula dignissim suscipit.”</p>
                                    <span>Tim Cook - CEO Apple</span>
                                </blockquote>
                                <p>Consectetur adipiscing elit. Fusce et ante a felis egestas varius quis eget urna. Mauris blandit, sem venenatis blandit vehicula, neque leo eleifend ante, id porta enim odio sit amet dolor. Duis finibus magna id justo egestas tincidunt. Aliquam eu tristique lorem. Morbi rutrum accumsan sem, ut rhoncus tortor tincidunt eget. Phasellus eros massa, molestie id molestie a, maximus id tortor.</p>
                            </div>
                            <div class="blog-dec-tag-social">
                                <div class="blog-dec-tag">
                                    <span><i class="fa fa-tags"></i></span>
                                    <span class="tags-list-item"><a href="#">Business</a>, <a href="#">Creative</a>, <a href="#">Start-up</a></span>
                                </div>
                                <div class="blog-dec-social-wrap">
                                    <div class="share-post"><span>Share this post <i class="fa fa-share-alt"></i></span>
                                        <div class="blog-dec-social">
                                            <a class="facebook" data-toggle="tooltip" title="Share this post on Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                            <a class="twitter" data-toggle="tooltip" title="Share this post on Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                            <a class="pinterest" data-toggle="tooltip" title="Share this post on Pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                            <a class="google" data-toggle="tooltip" title="Share this post on Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-comment">
                                <div class="no-review">
                                    <p>There are no comments</p>
                                </div>
                                <div class="comment-form">
                                    <h3>Leave a Reply </h3>
                                    <p> Your email address will not be published. Required fields are marked <span>*</span></p>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-12 col-md-12">
                                                <div class="leave-form">
                                                    <label>Comment</label>
                                                    <textarea></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="leave-form">
                                                    <label>Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="leave-form">
                                                    <label>Email <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="leave-form">
                                                    <label>Website</label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-submit">
                                            <input type="submit" value="Post Comment">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog end -->
        <div class="blog-related-post bg-img pt-75 pb-80" style="background-image:url(assets/images/bg/bg-9.jpg);">
            <div class="container">
                <div class="blog-related-wrap">
                    <div class="blog-related-title text-center">
                        <h3>Next Post</h3>
                    </div>
                    <div class="blog-related-active owl-carousel">
                        <div class="single-blog-related text-center">
                            <h2><a href="#">Freddie Harrel</a></h2>
                            <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales…</p>
                            <div class="blog-related-btn">
                                <a href="#">Read more</a>
                            </div>
                        </div>
                        <div class="single-blog-related text-center">
                            <h2><a href="#">Freddie Harrel</a></h2>
                            <p>Praesent sed ex vel mauris eleifend mollis. Vestibulum dictum sodales ante, ac pulvinar urna sollicitudin in. Suspendisse sodales…</p>
                            <div class="blog-related-btn">
                                <a href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>