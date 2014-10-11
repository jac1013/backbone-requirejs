define([
  // These are path alias that we configured in our bootstrap
    'jquery',     // lib/jquery/jquery
  'underscore', // lib/underscore/underscore
  'backbone'   // lib/backbone/backbone
], function($, _, Backbone){
 
  var Book = Backbone.Model.extend({

     defaults: {
       title: 'Pragmatic Programmer'
     }
   });

  return Book;
  // What we return here will be used by other modules
});