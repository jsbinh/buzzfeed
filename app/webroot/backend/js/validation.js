/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
    //global vars
    var form = $("#customForm");
    
    var name = $("#username");
    var nameInfo = $("#usernameInfo");
    
    var password = $("#password");
    var passwordInfo = $("#passwordInfo");
    
    var passwordOld = $("#passwordOld");
    var passwordOldInfo = $("#passwordOldInfo");
     
    var passwordNew = $("#passwordNew");
    var passwordNewInfo = $("#passwordNewInfo");
    
    var ConfirmpasswordNew = $("#ConfirmpasswordNew");
    var ConfirmpasswordNewInfo = $("#ConfirmpasswordNewInfo");
    
    var file = $("#uploadFile");
    var fileInfo = $("#uploadFileInfo");
    
    var fullname = $("#fullname");
    var fullnameInfo = $("#fullnameInfo");
    var email = $("#email");
    var emailInfo = $("#emailInfo");
    var phone = $("#phone");
    var phoneInfo = $("#phoneInfo");
        
    var year = $("#year");
    var yearInfo = $("#yearInfo");
        
    var message = $("#message");
        
    var messageInfo = $("#messageInfo");
        
    //On blur
    name.blur(validateName);
    password.blur(validatepassword);
    passwordOld.blur(validatepasswordOld);
    passwordNew.blur(validatepasswordNew);
    ConfirmpasswordNew.blur(ConfirmvalidatepasswordNew);
    fullname.blur(validateFullName);
    email.blur(validateEmail);
    phone.blur(validatephone);
    year.blur(validateyear);
        
    message.blur(validateMessageOn);
    file.blur(validateUpload);
    
    
    //On key press
    name.keyup(validateName);
    password.keyup(validatepassword);
    passwordOld.keyup(validatepasswordOld);
    passwordNew.keyup(validatepasswordNew);
   
    ConfirmpasswordNew.keyup(ConfirmvalidatepasswordNew);
     ConfirmpasswordNew.change(ConfirmvalidatepasswordNew);
    fullname.keyup(validateFullName);
    email.keyup(validateEmail);
    phone.keyup(validatephone);
    year.keyup(validateyear);
   year.change(validateyear);
    message.keyup(validateMessageOn);
         file.change(validateUpload);
		 fullname.change(validateFullName);
		 email.change(validateEmail);
		 message.change(validateMessageOn);
    file.keyup(validateUpload);
    form.submit(function(){
      
        if(validateName() &  validatepassword()  )
            return true
        else
        {
           
            if(validateName()==false)
            {
                name.addClass("error");
                nameInfo.text("UserName ít nhất 6 kí tự");
                nameInfo.addClass("error");
                if(name.val().length <1)
                {
                    name.addClass("error");
                    nameInfo.text("Username không được trống");
                    nameInfo.addClass("error");  
                }
            }
            if(validatepassword()==false)
            {
            

                password.addClass("error");
                passwordInfo.text("Password ít nhất 6 kí tự");
                passwordInfo.addClass("error");
                
               
                
                if(password.val().length <1)
                {
                    password.addClass("error");
                    passwordInfo.text(" Password không được trống ");
                    passwordInfo.addClass("error");  
                }
                if(password.val().length <1)
                {
                    password.addClass("error");
                    passwordInfo.text(" Password không được trống ");
                    passwordInfo.addClass("error");  
                }
            }
                            
            return false;
        }
    });
    
    
    var form1 = $("#customForm1");
    form1.submit(function(){
       
        if( validatepasswordOld() & validatepasswordNew() & ConfirmvalidatepasswordNew()  )
        {
            return true;
        }
        else
        {
           
            if(validatepasswordOld()==false)
            {
                //var passwordOld = $("#passwordOld");
                // var passwordOldInfo = $("#passwordOldInfo");
                passwordOld.addClass("error");
                passwordOldInfo.text("Password  hiện tại ít nhất 6 kí tự");
                passwordOldInfo.addClass("error");
                if(passwordOld.val().length <1)
                {
                    passwordOld.addClass("error");
                    passwordOldInfo.text("Password hiện tại không được trống");
                    passwordOldInfo.addClass("error");  
                }
            }
            
            if(validatepasswordNew()==false)
            {

                passwordNew.addClass("error");
                passwordNewInfo.text("Password mới ít nhất 6 kí tự");
                passwordNewInfo.addClass("error");
                if(passwordNew.val().length <1)
                {
                    passwordNew.addClass("error");
                    passwordNewInfo.text(" Password mới không được trống ");
                    passwordNewInfo.addClass("error");  
                }
            }
            
            
            if(ConfirmvalidatepasswordNew()==false)
            {
                if(ConfirmpasswordNew.val()!= passwordNew.val())
                {
                    ConfirmpasswordNew.addClass("error");
                    ConfirmpasswordNewInfo.text("Xác nhận password không trùng với password mới ");
                    ConfirmpasswordNewInfo.addClass("error");  
                }
               
            }
            
          
            return false;
        }
    });
    
    var form3 = $("#customForm3");
    form3.submit(function(){
        
       
    
      
      
        if( validateEmail() & validateFullName() & validatephone()
                    & validateyear() & validateMessageOn() & validateUpload() )
            
        {
            var r=confirm(" Bạn có chắc chắn gửi không ? ");
                if (r==false)
                    return false
            
           $("#sendEmail").attr("disabled", true);
            return true;
            
        }
        else
        {
            if(validateEmail()==false)
            {
             
               return false;
            }
            
               if(validateFullName()==false)
            {
              
               return false;
            }
            
               if(validatephone()==false)
            {
              
               return false;
            }
            
            if(validateyear()==false)
            {
              
               return false;
            }
            
                if(validateMessageOn()==false)
            {
             
               return false;
            }
            
                 if(validateUpload()==false)
            {
              
               return false;
            }
            return false;
        }
       
    });
    function validateName(){
        if(name.val().length < 6){
            return false;
        }
        else{
            name.removeClass("error");
            nameInfo.text(" ");
            nameInfo.removeClass("error");
            return true;
        }
    }
    
    function validatepassword(){
        if(password.val().length <6){
            return false;
        }
        else{			
            password.removeClass("error");
            passwordInfo.text("");
            passwordInfo.removeClass("error");
            return true;
        }
    }
    
    
    function validatepasswordOld(){
       
        if(passwordOld.val().length <6){
            return false;
        }
        else{			
            passwordOld.removeClass("error");
            passwordOldInfo.text("");
            passwordOldInfo.removeClass("error");
            return true;
        }
    }
    
    
        
    function validatepasswordNew(){
        if(passwordNew.val().length <6){
            return false;
        }
        else{			
            passwordNew.removeClass("error");
            passwordNewInfo.text("");
            passwordNewInfo.removeClass("error");
            ConfirmvalidatepasswordNew();
            return true;
        }
    }
    
    function ConfirmvalidatepasswordNew(){
        
        if(ConfirmpasswordNew.val()!= passwordNew.val())
        {
            return false;
        }
        
        else if(ConfirmpasswordNew.val().length <6){
            return false;
        }
        
        else{			
            ConfirmpasswordNew.removeClass("error");
            ConfirmpasswordNewInfo.text("");
            ConfirmpasswordNewInfo.removeClass("error");
            return true;
        }
        
        
        
    }
    
    function validateEmail(){
       
        var a = $("#email").val();
        var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
        //if it's valid email
                
        if(email.val().length < 1){
            email.addClass("error");
            emailInfo.text("Email không được để trống");
            emailInfo.addClass("error");
            return false;
        }
                
        else if(filter.test(a)){
            email.removeClass("error");
            emailInfo.text("");
            emailInfo.removeClass("error");
            return true;
        }
        //if it's NOT valid
        else{
            email.addClass("error");
            emailInfo.text("Không Đúng định dạng Email");
            emailInfo.addClass("error");
            return false;
        }
    }
    
    function validateFullName(){
        //if it's NOT valid
                
        if(fullname.val().length < 1){
            fullname.addClass("error");
            fullnameInfo.text("Họ tên không được dể trống");
            fullnameInfo.addClass("error");
            return false;
        }
                
        else if(fullname.val().length < 3){
            fullname.addClass("error");
            fullnameInfo.text("Họ tên phải ít nhất 3 kí tự");
            fullnameInfo.addClass("error");
            return false;
        }
              
        else if(fullname.val().length > 70){
            fullname.addClass("error");
            fullnameInfo.text("Họ tên chỉ tối đa 70 kí tự");
            fullnameInfo.addClass("error");
            return false;
        }
              
              
        //if it's valid
        else{
            fullname.removeClass("error");
            fullnameInfo.text("");
            fullnameInfo.removeClass("error");
            return true;
        }
    }
        
    function validatephone(){
            
        var a = $("#phone").val();
        var number= /^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/;
               
        if(phone.val().length <1){
            phone.addClass("error");
            phoneInfo.text("Phone không được để trống");
            phoneInfo.addClass("error");
            return false;
        }
               
        else if(phone.val().length <5){
            phone.addClass("error");
            phoneInfo.text("Phone ít nhất 5 kí tự");
            phoneInfo.addClass("error");
            return false;
        }
        else  if(number.test(a)){
            phone.removeClass("error");
            phoneInfo.text("");
            phoneInfo.removeClass("error");
        }
		
        else{		
                    
            phone.addClass("error");
            phoneInfo.text("Phone chứa toàn kí tự số");
            phoneInfo.addClass("error");
            return false;
        }
        return true;
    }
        
        
    function validateyear(){
        var a = $("#year").val();
        if(a!='')
            {
           year.removeClass("error");
            yearInfo.text("");
            yearInfo.removeClass("error");
             return true;
            }
       else{
            year.addClass("error");
            yearInfo.text("Năm sinh không được  để trống");
            yearInfo.addClass("error");
             
        }
		
    }
    
    
        
    
        
    function validateMessageOn(){
        //if it's NOT valid
              
        if(message.val().length <1){
            message.addClass("error");
            messageInfo.text("Giới thiệu bản thân không được để trống");
            messageInfo.addClass("error");
            return false;
        }
                
        if(message.val().length <15){
            message.addClass("error");
            messageInfo.text("Giới thiệu bản thân phải ít nhất 15 kí tự");
            messageInfo.addClass("error");
            return false;
        }
                
                  
                
        else{
            message.removeClass("error");
            messageInfo.text("");
            messageInfo.removeClass("error");
            return true;
        }
    }
        
    function validateUpload(){
        //if it's NOT valid
             
          
             
                   
        if(file.val().length <1){
		
            file.addClass("error");
            fileInfo.text("Bạn chưa upload CV ");
            fileInfo.addClass("error");
            return false;
        }
                
             
        else{
            file.removeClass("error");
            fileInfo.text("");
            fileInfo.removeClass("error");
            return true;
        }
    }
	
});