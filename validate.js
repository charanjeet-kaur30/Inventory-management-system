$(document).ready(function()
{
    $('#form2').hide();
    $('#click').click(function(){
    $('#form2').show();
  });
});

// function clearError()
// {
//     var errors=document.getElementsByClassName('formerror');
//     for(let item of errors)
//     {
//       item.innerHTML=="";
//     }
// }    

function SetError(id,error)
{
  //setting Error...
  element=document.getElementById('name');
  element.getElementsByClassName('nameError')[0].innerHTML = error;
  element=document.getElementById('email');
  element.getElementsByClassName('emailError')[1].innerHTML = error;
  element=document.getElementById('phone');
  element.getElementsByClassName('phoneError')[2].innerHTML = error;
 }

function validateForm()
{
  var isvalid=true;
//   clearError();
  
  var item=document.forms['form2']['fitem'].value;
  if(item=="")
  {
    SetError('item',"Please enter item name!!");
    return isvalid=false;
  }

  var quantity=document.forms['form2']['fquantity'].value;
  if(quantity=="")
  {
    SetError('quantity',"Please enter quantity!!");
    return isvalid=false;
  }
  if(!pregmatch("^\+?[1-9][0-9]*$"))
  {
    SetError('quantity','quantity should be a positive number');
    return isvalid=false;
  }

  var price=document.forms['form2']['fprice'].value;
  if(price=="")
  {
    SetError('price',"Please enter price!!");
    return isvalid=false;
  }

  if(price.length<10)
  {
    SetError('price','price should not be less than 10 digits');
    return isvalid=false;
  }

}