<?php
/**
 * File Template for displaying the Footer. It is called when using the wp_footer()
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
            </main>
            <footer class="footer">
                <div class="container row">
                    <div class="footer_area xs-12 sm-6 md-3">					
						<?php
 			                 if(is_active_sidebar('footer_1')):
            	        ?>
                		<?php dynamic_sidebar('footer_1'); ?>
                		<?php endif;?>	
                    </div>
                    <div class="footer_area xs-12 sm-6 md-3">
                      	<?php
 			                 if(is_active_sidebar('footer_2')):
            	        ?>
                		<?php dynamic_sidebar('footer_2'); ?>
                		<?php endif;?>	
                    </div>
                    <div class="footer_area xs-12 sm-6 md-3">
                        <ul class="footer_list">
                            <p class="footer_title">Información</p>
                            <li>
                                <p>
                                    <strong>Proyecto Prometeo CR</strong>  <br>
                                    Oficina 6, Edificio Centro Colon, Piso 7, San José, Mántica, 10101, Costa Rica
                                </p>
                            </li>
                            <li>
                                <strong>Teléfono:</strong><br>
                                <a href="tel:+50662391461">(506) 62391461</a>
                            </li>
                            <li>
                                <strong>Email</strong> <br>
                                <a href="mailto:contacto@prometeonline.com">contacto@prometeonline.com</a>
                            </li>

                        </ul>

                    </div>
                    <div class="footer_area xs-12 sm-6 md-3">
                        <ul class="footer_list menu">
                            <p class="footer_title">Redes</p>
                            <li class="menu-item">
                                <a href="https://www.facebook.com/prometeonline" target="_blank" class="footer_social-link">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                                    <span>Facebook</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://www.instagram.com/prometeonline/" target="_blank" class="footer_social-link">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                                    <span>Instagram</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://www.tiktok.com/@proyectoprometeo" target="_blank" class="footer_social-link">
                                    <svg fill="#000000" width="800px" height="800px" viewBox="0 0 512 512" id="icons" xmlns="http://www.w3.org/2000/svg"><path d="M412.19,118.66a109.27,109.27,0,0,1-9.45-5.5,132.87,132.87,0,0,1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14,23.9,350,16,350.13,16H267.69V334.78c0,4.28,0,8.51-.18,12.69,0,.52-.05,1-.08,1.56,0,.23,0,.47-.05.71,0,.06,0,.12,0,.18a70,70,0,0,1-35.22,55.56,68.8,68.8,0,0,1-34.11,9c-38.41,0-69.54-31.32-69.54-70s31.13-70,69.54-70a68.9,68.9,0,0,1,21.41,3.39l.1-83.94a153.14,153.14,0,0,0-118,34.52,161.79,161.79,0,0,0-35.3,43.53c-3.48,6-16.61,30.11-18.2,69.24-1,22.21,5.67,45.22,8.85,54.73v.2c2,5.6,9.75,24.71,22.38,40.82A167.53,167.53,0,0,0,115,470.66v-.2l.2.2C155.11,497.78,199.36,496,199.36,496c7.66-.31,33.32,0,62.46-13.81,32.32-15.31,50.72-38.12,50.72-38.12a158.46,158.46,0,0,0,27.64-45.93c7.46-19.61,9.95-43.13,9.95-52.53V176.49c1,.6,14.32,9.41,14.32,9.41s19.19,12.3,49.13,20.31c21.48,5.7,50.42,6.9,50.42,6.9V131.27C453.86,132.37,433.27,129.17,412.19,118.66Z"/></svg>
                                    <span>TikTok</span>
                                </a>
                            </li>

                            <li class="menu-item" hidden>
                                <a href="#" class="footer_social-link">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                                    <span>X</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://www.youtube.com/@PrometeoOnline" target="_blank" class="footer_social-link">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                    <span>YouTube</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="https://www.linkedin.com/company/proyectoprometeocr/" target="_blank" class="footer_social-link">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                    <span>LinkedIn</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>

                <p class="footer_copyright">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. | <a href="https://qoopala.com" target="_blank">Powered by <strong>qoopala</strong></a></p>
            </footer>
        </div>

<a href="https://wa.me/+50662391461" class="btn-whatsapp" aria-label="Chat on WhatsApp" target="_blank" data-astro-cid-sz7xmlte=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M6.88595 5.16985C7.06891 5.17475 7.27175 5.18465 7.46474 5.61303C7.59271 5.89821 7.80829 6.42321 7.9839 6.85087C8.12055 7.18366 8.233 7.45751 8.26114 7.51356C8.32544 7.64156 8.36502 7.78926 8.28093 7.96156C8.27102 7.98188 8.26165 8.00132 8.25264 8.02003C8.18518 8.16003 8.13717 8.25966 8.02373 8.38994C7.97709 8.44348 7.9285 8.50219 7.88008 8.56069C7.79494 8.66358 7.71035 8.7658 7.63785 8.83802C7.50924 8.96593 7.37563 9.10391 7.52402 9.35991C7.6725 9.6159 8.19192 10.4579 8.95868 11.1373C9.783 11.8712 10.4998 12.1805 10.8622 12.3368C10.9325 12.3672 10.9895 12.3918 11.0313 12.4126C11.2886 12.5406 11.4419 12.5209 11.5903 12.3486C11.7388 12.1762 12.2334 11.6001 12.4066 11.3441C12.5748 11.0881 12.7479 11.1275 12.9854 11.2161C13.2228 11.3047 14.4892 11.9251 14.7464 12.0531C14.7972 12.0784 14.8448 12.1012 14.8889 12.1224C15.0678 12.2082 15.1895 12.2665 15.2411 12.3535C15.3054 12.4618 15.3054 12.9739 15.0927 13.5746C14.8751 14.1752 13.8263 14.7513 13.3514 14.7956C13.3064 14.7999 13.2617 14.8053 13.2156 14.8108C12.7804 14.8635 12.228 14.9303 10.2596 14.1555C7.83424 13.2018 6.23322 10.8354 5.90953 10.357C5.88398 10.3192 5.86638 10.2932 5.85698 10.2806L5.8515 10.2733C5.70423 10.0762 4.80328 8.87067 4.80328 7.62685C4.80328 6.43682 5.38951 5.81726 5.65689 5.53467C5.67384 5.51676 5.6895 5.50021 5.70366 5.48494C5.94107 5.22895 6.21814 5.16495 6.39125 5.16495C6.56445 5.16495 6.73756 5.16495 6.88595 5.16985Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M0.18418 19.3314C0.102363 19.6284 0.372852 19.9025 0.6709 19.8247L5.27824 18.6213C6.7326 19.409 8.37 19.8275 10.0371 19.8275H10.0421C15.5281 19.8275 20 15.3815 20 9.91626C20 7.26735 18.966 4.77594 17.0863 2.90491C15.2065 1.03397 12.7084 0 10.042 0C4.55607 0 0.0841071 4.44605 0.0841071 9.91136C0.0834837 11.65 0.542402 13.3582 1.41479 14.8645L0.18418 19.3314ZM2.86092 15.2629C2.96774 14.8752 2.91437 14.4608 2.71281 14.1127C1.97266 12.8348 1.58358 11.3855 1.58411 9.91136C1.58411 5.28158 5.37738 1.5 10.042 1.5C12.3119 1.5 14.4296 2.37698 16.0281 3.96805C17.6248 5.55737 18.5 7.66611 18.5 9.91626C18.5 14.5459 14.7068 18.3275 10.0421 18.3275H10.0371C8.62061 18.3275 7.22863 17.9718 5.99266 17.3023C5.65814 17.1211 5.26726 17.0738 4.89916 17.17L2.13676 17.8915L2.86092 15.2629Z" fill="white"></path></svg></a>
        <?php wp_footer(); ?>

        <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            const lenis = new Lenis()

            lenis.on('scroll', (e) => {
             //console.log(e)
            })

            function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
            }

            requestAnimationFrame(raf)


            const swiper = new Swiper('.swiper-brands', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                slidesPerView: 2,
                autoplay: {
                    delay: 3000
                },
                breakpoints: {
                    400: {
                        slidesPerView: 3
                    },
                    600: {
                        slidesPerView: 4
                    },
                    900: {
                        slidesPerView: 5
                    },
                    1200: {
                        slidesPerView: 7
                    }
                }

            });

            const swiper2 = new Swiper('.swiper-reviews', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                slidesPerView: 1,
                centeredSlides: true,
                autoHeight: true,
                speed: 600,
                autoplay: {
                    delay: 3000
                }

            });

                //Header class on scroll
                let scrollpos = window.scrollY
                const header = document.querySelector(".header")
                const header_height = header.offsetHeight

                const add_class_on_scroll = () => header.classList.add("scrolled")
                const remove_class_on_scroll = () => header.classList.remove("scrolled")

                window.addEventListener('scroll', function() { 
                    scrollpos = window.scrollY;

                    if (scrollpos >= header_height) { add_class_on_scroll() }
                    else { remove_class_on_scroll() }
                })

            let parx1 = document.querySelector('.planet-y');


            window.addEventListener('scroll', function(){
                let value = window.scrollY;
                parx1.style.transform = 'translateY(' + value * 0.25 + 'px)';
            })
            
            const btnMenu = document.querySelector('.btn-menu');
            const theMenu = document.querySelector('.nav');
            
            btnMenu.addEventListener('click', (e)=>{
            	theMenu.classList.toggle('show');
                btnMenu.classList.toggle('active');
            })
        </script>
        
		<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
        
        <script>
         	jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1200
                });
            });
        </script>
    </body>
</html>