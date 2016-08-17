$(function() {

    //Opens search bar once search icon has been clicked
    $('body').on('click', function(event) {
        console.log(event.target);
        var searchBar = $('input[type="search"]');

        if ($(event.target).parents().hasClass("search-form")) {
            
            searchBar.show('slow');
            searchBar.focus(); //check if button was clicked


        } else if (searchBar.val().length > 0) {//end first if statement
            searchBar.focusout();
            searchBar.show(); //check if there is entered search string
        } else { //end second if statement
            searchBar.hide('slow');
            searchBar.focusout(); //if no search string, close search bar
        } //end else statement
    }); //End search bar open function
});