// Filename: router.js
define([
  'jquery',
  'underscore',
  'backbone',
  'views/books/list',
  'views/index'
], function($, _, Backbone, BookListView, Index) {
  var AppRouter = Backbone.Router.extend({
    routes: {
      // Define some URL routes
      '': 'showIndex',
      'books': 'showBooks'
    },

    showIndex: function(){
      this.loadView(new Index());
    },

    showBooks: function() {
      this.loadView(new BookListView());
    },

    loadView: function(view){
      this.view && this.view.remove();
      this.view = view;
    }
  });

  var initialize = function() {
    var app_router = new AppRouter;
    Backbone.history.start();
  };

  return {
    initialize: initialize
  };
});