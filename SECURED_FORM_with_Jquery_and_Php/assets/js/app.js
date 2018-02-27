//securing  Pseudo input with Jquery
$(document).ready(function(){
	//jq get content
	$('#InputPseudo').keyup(function(){
		var inputValue = this.value;
        var tmp = inputValue.length;
        if(tmp>=4 && tmp<=255){
			//jq set content	
			$('#mContent').val(inputValue);
			} else {
			alert('4 ka hatramin ny 255 charactere iany');
		}
		});		
});

//securing Email input with Jquery
$(document).ready(function(){
	//jq get content
	$('#InputEmail').keyup(function(){
		var inputValue = this.value;
        var tmp = inputValue.length;
        if(tmp>=4 && tmp<=255){
			//jq set content	
			$('#mContent').val(inputValue);
			} else  {
			alert('4 ka hatramin ny 255 charactere iany ary tsy maintsy misy "@" sy domaine ".com, .mg, ..."');
		}
		});		
});

//securing Password input with Jquery
$(document).ready(function(){
	//jq get content
	$('#InputPwd').keyup(function(){
		var inputValue = this.value;
        var tmp = inputValue.length;
        if(tmp>=4 && tmp<=255){
			//jq set content	
			$('#mContent').val(inputValue);
			} else {
			alert('4 ka hatramin ny 255 charactere iany');
		}
		});		
});

