/*vérification des regex*/

var regexnom = new RegExp("^[a-zA-Z -]+$");
var regexprenom = new RegExp("^[a-zA-Z -]+$");
var regexemail = new RegExp("^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}$");
var regexfacturation = new RegExp("^[0-9]{1,3}[A-Za-z0-9 -]+$");
var regexlivraison = new RegExp("^[0-9]{1,3}[A-Za-z0-9 -]+$"); 

var nom = $("#Nom_Client");
var prenom = $("#Prenom_Client");
var email = $("#Authentif");
var facturation = $("#Adr_Factur");
var livraison =$("#Adr_Livr");


nom.on("input", function()
{
    if($("#Nom_Client").val() == ""){
      nom.css("backgroundColor", "white");
    }

    else{

    	if (regexnom.test(nom.val()) == true)
    	{
    		nom.css("backgroundColor", "#CCFF99");
    	}
    	else{


    		nom.css("backgroundColor", "red");
      } 
    }

});

prenom.on("input", function()
{
  if($("#Prenom_Client").val() == ""){
      prenom.css("backgroundColor", "white");
    }

  else{

  	if (regexprenom.test(prenom.val()) == true)
  	{
  		prenom.css("backgroundColor", "#CCFF99");
  	}
  	else
  		prenom.css("backgroundColor", "red");
  }
});

email.on("input", function()
{
  if($("#Authentif").val() == ""){
      email.css("backgroundColor", "white");
    }

  else{

    if (regexemail.test(email.val()) == true)
    {
      email.css("backgroundColor", "#CCFF99");
    }
    else
      email.css("backgroundColor", "red");
  }
});


facturation.on("input", function()
{
  if($("#Adr_Factur").val() == ""){
      facturation.css("backgroundColor", "white");
    }
  else{

  	if (regexfacturation.test(facturation.val()) == true)
  	{
  		facturation.css("backgroundColor", "#CCFF99");
  	}
  	else{     
  		facturation.css("backgroundColor", "red");
    }
  }
});

livraison.on("input", function()
{
  if($("#Adr_Livr").val() == ""){
      livraison.css("backgroundColor", "white");
    }

  else{

  	if (regexlivraison.test(livraison.val()) == true)
  	{
  		livraison.css("backgroundColor", "#CCFF99");
  	}
  	else{
  		livraison.css("backgroundColor", "red");
    }
  }

});

/*fin de verification des regex*/




/*menu deroulant*/

(function ($, window, delay) {
  
  var theTimer = 0;

  var theElement = null;

  var theLastPosition = {x:0,y:0};

  $('[data-toggle]')
    .closest('li')
    .on('mouseenter', function (inEvent) {
    if (theElement) theElement.removeClass('open');
    window.clearTimeout(theTimer);
    theElement = $(this);

    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mousemove', function (inEvent) {
        if(Math.abs(theLastPosition.x - inEvent.ScreenX) > 4 || 
           Math.abs(theLastPosition.y - inEvent.ScreenY) > 4)
        {
            theLastPosition.x = inEvent.ScreenX;
            theLastPosition.y = inEvent.ScreenY;
            return;
        }
        
    if (theElement.hasClass('open')) return;
    window.clearTimeout(theTimer);
    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mouseleave', function (inEvent) {
    window.clearTimeout(theTimer);
    theElement = $(this);
    theTimer = window.setTimeout(function () {
      theElement.removeClass('open');
    }, delay);
  });
})(jQuery, window, 200); // 200 est le delai en millisecondes

/*fin de code du menu deroulant*/

//formulaire popover
$('#popover').popover({ 
    html : true,
    title: function() {
      return $("#popover-head").html();
    },
    content: function() {
      return $("#popover-content").html();
    }
});