$(function(){
  
//Opens search bar once search icon has been clicked
  $('body').on('click', function(event){
    
    var searchBar = $('input[type="search"]');

    if ($(event.target).parents().hasClass("search-submit")){
      event.preventDefault();
      searchBar.show('slow');
      searchBar.focus(); //check if button was clicked

    } else if (searchBar.val().length >0){
      // event.preventDefault();
      searchBar.focusout();
      searchBar.show(); //check if there is entered search string
    } else {
      searchBar.hide('slow');
      searchBar.focusout(); //if no search string, close search bar
    }
  }); //End search bar open function


});