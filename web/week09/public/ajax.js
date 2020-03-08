$(document).ready(function(){
    $("form#rateCalculation").on('submit', function(e){
        e.preventDefault();
        var weight = $('input[name=weight]').val();
        var mailType = $('input[name=mailType]').val();

        $.ajax({
            type: 'post',
            url: '/ajax',
            data: data{
  		weight: weight,
		mailType: mailType,
		},
            dataType: 'text'
        })
        .done(function(data){
            $('h1').html(data.quote);
        });
    });
});
