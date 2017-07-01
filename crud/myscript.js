function IsEmpty(){
  if(document.forms['frm'].full_name.value === "")
  {
    alert("Full name is required");
    return false;
  }
else if(document.forms['frm'].last_name.value === "")
{
  alert("last name is required");
  return false;
}
else if(document.forms['frm'].contact_number.value === "")
{
  alert("contact number is required");
  return false;
}
else if(document.forms['frm'].email_address.value === "")
{
  alert("email address is required");
  return false;
}
else if(document.forms['frm'].date_created.value === "")
{
  alert("evaluate the date you create");
  return false;
}
else if(document.forms['frm'].date_updated.value === "")
{
  alert("evaluate the date you update");
  return false;
}
  return true;
}

function DeleteFunction() {

    var r = confirm("Are You sure you want to Delete?");
    if (r == true) {
        alert("Data deleted");
        return true;

    } else {
        alert("Data not deleted");
        return false;
    }
}

function UpdateFunction() {

    var r = confirm("Are You sure you want to Update?");
    if (r == true) {
        return true;

    } else {
        return false;
    }
}
