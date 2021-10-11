<div id="about" class="grid wide">
    <div class="row">
        <div class="col l-12">
            <div class="header row">
                <div class="col l-10">
                    <h1>Giới thiệu về CLB Tin Học</h1>
                </div>
                <?php
                if ($role == 1) {
                    echo "
                    <div class='col l-2'>
                        <button id='about_update'>Sửa</button>
                    </div>
                    ";
                }
                ?>
               
            </div>
            <div class="us">
                <div class="vd">
                    <video autoplay muted loop id="myVideo" onclick="about();">
                        <source src="../../public/video/about_us.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="content">
                    <h1>Heading</h1>
                    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
                    <button id="myBtn" onclick="about();">Pause</button>
                </div>
            </div>
        </div>
    </div>
</div>