$(document).ready(function(){
    console.log('READY!!');
    
    //Control when user clicks burguer
    $('.burguer').click(function(){
        console.log('menú click'); 
        //Slide down/up menu
        //$('header nav').slideToggle('hide');
        
        //Slide right/left menu
        $('header nav').toggleClass('hide');
    });
    
    $('.portfoli .filter span').click(function(){
        //console.log('Clicked', this);
        var classe = $(this).attr('class');
        console.log(classe);
        
        if (classe=='all'){
            $('.portfoli .item').show();
            $('.portfoli .filter span').removeClass('active');
            $(this).addClass('active');
        }else{
            if ($(this).hasClass('active')){
            }else{
                $('.portfoli .items .item').hide();
                $('.portfoli .filter span').removeClass('active');
                $(this).addClass('active');
                $('.portfoli .'+classe).show();
            }
        }
    });
});
$(document).ready(function(){
    $('.gallery').slick({
        arrows: true,
        nextArrow: '<span class="next"><i class="fas fa-angle-right"></i></span>',
        prevArrow: '<span class="prev"><i class="fas fa-angle-left"></i></span>'
    });
});