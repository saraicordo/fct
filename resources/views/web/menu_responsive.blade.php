    <div class="menu_responsive">
        <ul class="menu_2">
            <li><a href="#"><span class="current">home</span></a>
            </li>
            <li><a href="" class="nav-link dropdown-toggle flecha2">categories</a>
                <ul class="nav_desplegable_2 flex-column">
                
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category 3</a>
                    </li>
                </ul>
            </li>
            <li><a href="">about us</a>
            </li>
            <li><a href="">contact</a></li>
        </ul>
    </div>

    <div class="nav-toggle">  
        <span></span>
        <span></span>
        <span></span>
    </div>

    <script>
        $(document).ready(function(){
            var contador="uno";
            
            $('.nav-toggle').click(function(){
                if(contador == 'uno'){
                    $('.nav-toggle').addClass('cruz');
                    contador = 'cero';              
                }else{
                    $('.nav-toggle').removeClass('cruz');
                    contador = 'uno';
                }
            });
            
            $('.nav-toggle').click(function(){
                $('.menu_responsive').slideToggle();

                $('.flecha2').click(function(){
                    $('.nav_desplegable_2').slideToggle();
                });
            });

        });

    </script> 