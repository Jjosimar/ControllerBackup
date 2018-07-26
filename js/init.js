(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery);

$(document).ready(function(){
      $('.slider').slider();
    });

$(document).ready(function() {
    $('select').material_select();
  });
 
  
$("#dado").click(function(){
    $.ajax({url: "pages/backupCliente.php", success: function(result){
            $(".revela").html(result);
    }});
});

$("#agenda").click(function(){
    $.ajax({url: "pages/agenda.php", success: function(result){
            $(".revela").html(result);
    }});
});

$("#func").click(function(){
    $.ajax({url: "pages/funcAdd.php", success: function(result){
            $(".revela").html(result);
    }});
});

$("#atendimento").click(function(){
    $.ajax({url: "pages/atendimento.php", success: function(result){
            $(".revela").html(result);
    }});
});

$("#cadperguntas").click(function(){
    $.ajax({url: "pages/cadperguntas.php", success: function(result){
            $(".revela").html(result);
    }});
});

$("#cadastro").click(function(){
    $.ajax({url: "cadcontato.php", success: function(result){
            $(".revela").html(result);
    }});
});

$("#areaadd").click(function(){
    $.ajax({url: "pages/areaAdd.php", success: function(result){
            $(".revela").html(result);
    }});
});   

$("#probadd").click(function(){
    $.ajax({url: "pages/probAdd.php", success: function(result){
            $(".revela").html(result);
    }});
});

$("#unidadd").click(function(){
    $.ajax({url: "pages/unidAdd.php", success: function(result){
            $(".revela").html(result);
    }});
});

$("#listtask").click(function(){
    $.ajax({url: "pages/listOcorrencia.php", success: function(result){
            $(".revela").html(result);
    }});
});

$("#mytask").click(function(){
    $.ajax({url: "pages/minhasOcorrencias.php", success: function(result){
            $(".revela").html(result);
    }});
});

