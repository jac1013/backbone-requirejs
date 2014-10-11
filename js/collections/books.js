define([
  // These are path alias that we configured in our bootstrap
  'jquery',     // lib/jquery/jquery
  'underscore', // lib/underscore/underscore
  'backbone'
  'models/books'    // lib/backbone/backbone
], function($, _, Backbone, Handlebars){
 
  var Books = Backbone.Collection.extend({

    model: Book
  });

  return Books;
  // What we return here will be used by other modules
});