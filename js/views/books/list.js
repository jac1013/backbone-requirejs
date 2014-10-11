define([
  // These are path alias that we configured in our bootstrap
  'jquery',     // lib/jquery/jquery
  'underscore', // lib/underscore/underscore
  'backbone',
  'handlebars',    // lib/backbone/backbone
  'collections/books',
  'text!templates/list.html'
], function($, _, Backbone, Handlebars, Books, bookListTemplate){
 
  var BookList = Backbone.View.extend({
      el: $('#container'),

      initialize: function(){
        this.collection = new Books();
        this.collection.add({title: 'Clean Code'});
        this.template = Handlebars.compile(bookListTemplate);
      },

      render: function(){
        this.$el.html(this.template(this.collections.models));
        return this;
      }
  });
  return Book;
  // What we return here will be used by other modules
});