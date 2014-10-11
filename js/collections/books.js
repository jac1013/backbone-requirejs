define([
  // These are path alias that we configured in our bootstrap
  'jquery',     // lib/jquery/jquery
  'underscore', // lib/underscore/underscore
  'backbone',   // lib/backbone/backbone
  'models/books'    
], function($, _, Backbone, Book){
 
  var Books = Backbone.Collection.extend({

    model: Book
  });

  return Books;
  // What we return here will be used by other modules
});