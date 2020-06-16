    <div class="menu_responsive">
        <ul class="menu_2">
            <li><a href="/"><span class="current">Home</span></a>
            </li>
            <li><span class="nav-link dropdown-toggle flecha2">categories</span>
                <ul class="nav_desplegable_2 flex-column">
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::action('ViewController@category', $category->id) }}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="/about">about us</a>
            </li>
            <li><a href="/contact">contact</a></li>
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