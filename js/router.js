// Filename: router.js
define([
  'jquery',
  'underscore',
  'backbone',
  'views/books/list',
], function($, _, Backbone, ProjectListView, UserListView) {
  var AppRouter = Backbone.Router.extend({
    routes: {
      // Define some URL routes
      'books': 'showBooks',
    },

    showBooks: function() {
      var bookListView = new BookListView();
      bookListView.render();
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