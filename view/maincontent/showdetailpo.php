      <?php
            extract($onesp);
            $hinh=$imgPath.$hinhanh;
      ?>    
          <!-- nội dung -->
           <section class="content-section-1">
                <h1 class="section-header">Chi tiết sản phẩm<?=$TENSP?></h1>
                
            </section>

            <!-- nội dung -->
            <section class="content-section">
                    <!-- của nguyên -->
                <div class="card">
                    <!-- hình ảnh -->
                    <div class="container-fliud">
                        <div class="anhdot">
                          <?php echo '  <img class="dot" src="'.$hinh.'" onclick="currentSlide(1)" alt="Image 1">' ?>
                            <img class="dot" src="/view/images/11.png" onclick="currentSlide(2)" alt="Image 2">
                            <img class="dot" src="/view/images/8.png" onclick="currentSlide(3)" alt="Image 3">
                        </div>
                        <div class="slideshow-container">
                
                            <div class="mySlides fade">
                            
                            <img src="/view/images/10.png"  width="500" height="500">
                            
                            </div>
                    
                            <div class="mySlides fade">
                            
                            <img src="/view/images/11.png"  width="500" height="500">
                            
                            </div>
                    
                            <div class="mySlides fade">
                            
                            <img src="/view/images/8.png"  width="500" height="500">
                            
                            </div>
                
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>
                
                        
                        
                        
                        <!-- <div style="text-align:center"> -->
                        
                    </div>
                
                
                        <!-- ======== -->
                        <div class="details-col-md-6">
                        <h3 class="product-title">truyện cười dân gian</h3>
                            <div class="rating">
                            
                                <span class="review-no">999 reviews</span>
                            </div>
                            <p class="product-description">rat buon cuoi</p>
                            <div class="text-muted">Giá cũ: <s><span>10,990 vnđ</span></s></div>
                            <h4 class="price">Giá hiện tại: <span>10,000 vnđ</span></h4>
                            <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                <strong>Uy
                                    tín</strong>!</p>
                            
                            
                            <div class="form-group">
                                <div class="soluongngoai">
                                    <label for="soluong">Số lượng đặt mua:</label>
                                
                                    <div class="quantity">
                                        <button class="minus-btn" type="button" name="button">
                                            -
                                        </button>
                                        <input class="input-so" type="text" name="name" value="1" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                        <button class="plus-btn" type="button" name="button">
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="action">
                                    <a class="add-to-cart btn btn-default" id="btnThemVaoGioHang">Thêm vào giỏ hàng</a>
                                    <a class="muangay btn btn-default" href="#"></span>mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- ==== -->
                  
            </section>
            <!-- nội dung -->
            <section class="content-section">

                <!-- nguyên -->

                <div class="card">
                    <div class="container-fluid">
                        <h3>Thông tin chi tiết về Sản phẩm</h3>
                        <div class="row">
                            <div class="col">
                                <p><?php   echo $MOTA;  ?> <span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                                    <button onclick="myFunction()" id="myBtn" class="btnmoreless"></button>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== -->

            </section>
            <!-- nội dung -->
            <section class="content-section">

                <!-- nguyên -->
                
                <div class="card">
                    <div class="container-fluid">
                        <h3>Đánh giá sản phẩm</h3>
                            <div class="product-view-tab-content-rating-chart">
                                <div>
                                    <div>
                                        <div>
                                            <div>
                                                5<span>/5</span>
                                            </div>
                                            <div>
                                                <div class="rating-box">
                                                    <div class="rating" style="width:100%"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                        
                        <div>
                            <div>
                                <span>5 sao</span>
                                <div class="review-rating">
                                    <div style="width:100%;"></div>
                                </div>
                                <span>100%</span>
                            </div>
                            
                            <div>
                                <span>4 sao</span>
                                <div class="review-rating">
                                    <div style="width:0%;"></div>
                                </div>
                                <span>0%</span>
                            </div>

                            <div>
                                <span>3 sao</span>
                                <div class="review-rating">
                                    <div style="width:0%;"></div>
                                </div>
                                <span>0%</span>
                            </div>

                            <div>
                                <span>2 sao</span>
                                <div class="review-rating">
                                    <div style="width:0%;"></div>
                                </div>
                                <span>0%</span>
                            </div>

                            <div>
                                <span>1 sao</span>
                                <div class="review-rating">
                                    <div style="width:0%;"></div>
                                </div>
                                <span>0%</span>
                            </div>
                        </div>


                        
                           
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==== -->

            </section>

            <section class="content-section">
                
                <!-- nguyên -->
                
                <div class="card-2" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <center><p>Chỉ có thành viên mới có thể viết nhận xét. Vui lòng <a href="">đăng nhập</a>  hoặc <a href="">đăng ký</a> .</p></center>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==== -->

            </section>
            <script src="/js(new)/slideshow.js"></script>
            <section class="content-section">
                
                <!-- pu -->
                
                <div class="wrapper">
                    <h3> ĐÁNH GIÁ CỦA KHÁCH HÀNG</h3>
                    <form>
                        <div class="rating">
                            <input type="number" name="rating" hidden>
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                            <i class='bx bx-star star'></i>
                        </div>
                        <textarea name="opinion" cols="70" row="9" placeholder="FutureBooks xin đánh giá của quý khách..."></textarea>
                        <div class="btn-group">
                            <button type="submit" class="btn submit">Submit</button>
                            <button onclick="cancel" class="btn cancel">Cancel</button>
            
                        </div>
                    </form>
                </div>
                <script src="/js(new)/danhgia.js"></script>
            
                <script>
                    function cancel() {
                        document.getElementsByClassName('btn cancel').reset();
                    }
                    
                </script>

                <!-- ==== -->

            </section>