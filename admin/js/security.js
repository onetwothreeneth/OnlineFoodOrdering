filter('@#asd',response){
  alert(response);
}
function filter(string){

  if(/^[a-zA-Z0-9- ]*$/.test(string) == false) {
    var response = 'No Symbols & illegal characters allowed.';
  } else {
    var response = 'yes';
  }
  return response;

}
