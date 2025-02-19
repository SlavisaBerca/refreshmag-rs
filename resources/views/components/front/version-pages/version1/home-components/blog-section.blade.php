

          

            <!-- Blog Section Start -->
            <section class="blog-section bg-lightest-gray py-40">
                <div class="container-fluid">
                    <div class="top-bar mb-16">
                        <h5>{{ $sectionData->parentSection->getContent()['title'] }}</h5>
                        <div class="slider-arrow">
                            <button class="arrow btn-prev" data-slide="blog-slider">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                                    <path d="M12.8057 23C12.8057 20 10.0057 16 6.80566 16M6.80566 16C8.639 16 12.8057 15 12.8057 9M6.80566 16H25.8057" stroke="#1B1918" stroke-width="2"></path>
                                </svg>
                            </button>
                            <button class="arrow btn-next" data-slide="blog-slider">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M19.3545 23C19.3545 20 22.1545 16 25.3545 16M25.3545 16C23.5212 16 19.3545 15 19.3545 9M25.3545 16H6.35449" stroke="#1B1918" stroke-width="2"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="blog-slider" data-parent="blog-slider">
                    @for($i=0; $i < 12; $i++)
                        <a href="blog-detail.html" class="blog-block bg-white">
                            <div class="blog-image">
                               @if($i==0)
                               <img src="{{ asset('front/version1/assets/media/blogs/blog-1.png') }}" alt="">
                               @else    
                               <img src="{{ asset('front/version1/assets/media/blogs/blog-'.$i.'.png') }}" alt="">
                               @endif 
                            </div>
                            <div class="blog-content">
                                <p class="mb-16 fw-500 dark-black">24 June, 2024</p>
                                <h6 class="mb-16 fw-600">Headphone Heroes: Elevating Your Experience Quality Sound</h6>
                                <div class="d-flex align-items-center justify-content-between mb-16">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('front/version1/assets/media/users/user-1.png') }}" alt="">
                                        <p class="light-gray">By <span class="color-primary">Emily</span></p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('front/version1/assets/media/icons/icon-1.png') }}" alt="">
                                        <p class="light-gray">Comments</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{ asset('front/version1/assets/media/icons/icon-2.png') }}" alt="">
                                        <p class="light-gray">Views</p>
                                    </div>
                                </div>
                                <p class="light-gray mb-32">Lorem ipsum dolor sit amet consectetur. Vitae vel sit convallis aliquet amet vestibulum maecenas ac.</p>
                                <div class="cus-btn-arrow">Read More 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15" fill="none">
                                        <path d="M13.3545 14.7476C13.3545 11.7476 16.1545 7.74756 19.3545 7.74756M19.3545 7.74756C17.5212 7.74756 13.3545 6.74756 13.3545 0.747559M19.3545 7.74756H0.354492"
                                            stroke="#0C0C0D" stroke-width="2" />
                                    </svg>
                                </div>                
                            </div>
                        </a>
                        @endfor
                       
                       
                    </div>
                </div>
            </section>
            <!-- Blog Section End -->