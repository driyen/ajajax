function ajaxquery() {
$.post({
    url: "ex_user/test.php",
    data: {
        name : $("Salut").val(),
        name2 : $("test").val(),
      },
    success: function (articles) {
        $("#clonecard0").css('visibility','visible');
        
       
        
        articles.forEach(function(article) {
             var clone = $("#clonecard0").clone().attr('id', 'clonecard' + article.id );
             var selector =  '#clonecard' + article.id;
             var text2 = selector + " h5";
             var content = selector + " p";
             $("#containercard").append(clone);
             
              $(text2).text("lala"); 
              $(content).text(article.content);
              
              
              id_last_article = article.id;
          });
 
        
        $("#buttonspin").css('visibility','visible');

      
    },
    dataType: "json" 
})
}

