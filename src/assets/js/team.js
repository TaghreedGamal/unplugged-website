var cols,item,i,row,col,pos,curr_row,curr_col,t,b,l,r;

cols = Math.floor($('.team-info').width() / $('.team-info  .team-info__perMember').width());

$(window).resize(function(event) {
    cols = Math.floor($('.team-info').width() / $('.team-info .team-info__perMember').width());
});

function get_row(index) {
    return Math.ceil(index/cols);
}

function get_column(index) {
    return (index % cols == 0) ? cols : (index % cols);
}

$('.team-info  .team-info__perMember .perMember__img').hover(function() {
    if ( $(window).width() > 720) { 
        item = $(this).parent('.team-info__perMember');
        i = item.index() + 1;
        row = get_row(i); //hovered row
        col = get_column(i); //hovered column

        $('.perMember__description').addClass("show");

        $('.f-img').addClass("visible");

        $('.team-info  .team-info__perMember').each(function(index, el) {
            curr_row = get_row(index + 1);
            curr_col = get_column(index + 1);
            t=0,b=0,l=0,r=0;
            if (curr_row > row){
                t=1;
            }
            else if (curr_row < row){
                b=1;
            }

            if(curr_col > col){
                l=1;
            }
            else if (curr_col < col){
                r=1;
            }
            if (t & l){
               $(this).find('.perMember__description').removeClass('show');
               $(this).find('.member-img').removeClass("visible");
               $(this).find('.tl-img').addClass("visible");
            }
            else if ( t & r){
                $(this).find('.perMember__description').removeClass('show');
                $(this).find('.member-img').removeClass("visible");
                $(this).find('.tr-img').addClass("visible");
            }
            else if ( b & l){ 
                $(this).find('.perMember__description').removeClass('show');
                $(this).find('.member-img').removeClass("visible");
                $(this).find('.bl-img').addClass("visible");
            }
            else if ( b & r){ 
                $(this).find('.perMember__description').removeClass('show');
                $(this).find('.member-img').removeClass("visible");
                 $(this).find('.br-img').addClass("visible");
            }
            else if (t){ 
                $(this).find('.perMember__description').removeClass('show');
                $(this).find('.member-img').removeClass("visible");
                $(this).find('.t-img').addClass("visible");
            }
            else if (b){ 
                $(this).find('.perMember__description').removeClass('show');
                $(this).find('.member-img').removeClass("visible");
                $(this).find('.b-img').addClass("visible");
            }
            else if (r){ 
                $(this).find('.perMember__description').removeClass('show');
                $(this).find('.member-img').removeClass("visible");
                $(this).find('.r-img').addClass("visible");
            }
            else if (l){ 
                $(this).find('.perMember__description').removeClass('show');
                $(this).find('.member-img').removeClass("visible");
                $(this).find('.l-img').addClass("visible");
            }
        });
    } 
},function() {
    if ( $(window).width() > 720) { 
        $('.member-img').removeClass("visible");
        $('.perMember__description').removeClass("show");
    }
});
