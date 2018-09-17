$(document).ready(function(){
  let maskTelefone = "(00) 0000-0000";
  var optionsTelefone =  {
  	onKeyPress: function(cep, e, field, options) {
      var masks = ["(00) 0000-0000", "(00) 00000-0000"];
      var mask = (cep.length>13) ? masks[1] : masks[0];
      $(field).mask(mask, optionsTelefone);
  }};

  $('#numeroDeOrigem').mask(maskTelefone, optionsTelefone);
  $('#numeroDeDestino').mask(maskTelefone, optionsTelefone);
});