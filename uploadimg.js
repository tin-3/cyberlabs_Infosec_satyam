function triggerClick1(){

document.querySelector('#image1').click();

}

function display1(e){

    if(e.files[0]){
        var reader = new FileReader();

        reader.onload = function(e){
           document.querySelector('#displayimg1').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    }
}
function triggerClick2(){

    document.querySelector('#image2').click();
    
    }
    
    function display2(e){
    
        if(e.files[0]){
            var reader = new FileReader();
    
            reader.onload = function(e){
               document.querySelector('#displayimg2').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }
    function triggerClick3(){

        document.querySelector('#image3 ').click();
        
        }
        
        function display3(e){
        
            if(e.files[0]){
                var reader = new FileReader();
        
                reader.onload = function(e){
                   document.querySelector('#displayimg3').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
        function triggerClick4(){

            document.querySelector('#image4').click();
            
            }
            
            function display4(e){
            
                if(e.files[0]){
                    var reader = new FileReader();
            
                    reader.onload = function(e){
                       document.querySelector('#displayimg4').setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(e.files[0]);
                }
            }
            function triggerClick5(){

                document.querySelector('#image5').click();
                
                }
                
                function display5(e){
                
                    if(e.files[0]){
                        var reader = new FileReader();
                
                        reader.onload = function(e){
                           document.querySelector('#displayimg5').setAttribute('src', e.target.result);
                        }
                        reader.readAsDataURL(e.files[0]);
                    }
                }
                function triggerClick6(){

                    document.querySelector('#image6').click();
                    
                    }
                    
                    function display6(e){
                    
                        if(e.files[0]){
                            var reader = new FileReader();
                    
                            reader.onload = function(e){
                               document.querySelector('#displayimg6').setAttribute('src', e.target.result);
                            }
                            reader.readAsDataURL(e.files[0]);
                        }
                    }
                    function triggerClick7(){

                        document.querySelector('#image7').click();
                        
                        }
                        
                        function display7(e){
                        
                            if(e.files[0]){
                                var reader = new FileReader();
                        
                                reader.onload = function(e){
                                   document.querySelector('#displayimg7').setAttribute('src', e.target.result);
                                }
                                reader.readAsDataURL(e.files[0]);
                            }
                        }
                        function triggerClick8(){
                        
                            document.querySelector('#image8').click();
                            
                            }
                            
                            function display8(e){
                            
                                if(e.files[0]){
                                    var reader = new FileReader();
                            
                                    reader.onload = function(e){
                                       document.querySelector('#displayimg8').setAttribute('src', e.target.result);
                                    }
                                    reader.readAsDataURL(e.files[0]);
                                }
                            }
                            function triggerClick9(){
                        
                                document.querySelector('#image9').click();
                                
                                }
                                
                                function display9(e){
                                
                                    if(e.files[0]){
                                        var reader = new FileReader();
                                
                                        reader.onload = function(e){
                                           document.querySelector('#displayimg9').setAttribute('src', e.target.result);
                                        }
                                        reader.readAsDataURL(e.files[0]);
                                    }
                                }