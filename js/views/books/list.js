define([
  // These are path alias that we configured in our bootstrap
  'jquery',     // lib/jquery/jquery
  'underscore', // lib/underscore/underscore
  'backbone',
  'handlebars',    // lib/backbone/backbone
  'collections/books'
], function($, _, Backbone, Handlebars, Books){
 
  var BookListView = Backbone.View.extend({

    initialize: function() {
      this.collection = new Books();
      this.collection.add({
        title: 'Clean Code'
      });
      this.collection.add({
        title: 'Pragmatic Programmer'
      });
      this.collection.add({
        title: 'JavaScript: The Good Parts'
      });
      this.template = Handlebars.compile("<ul>{{#each books}}{{#with this}}<li>{{title}}</li>{{/with}}{{/each}}</ul>");
      this.render();
    },

    render: function() {
      $('.books-list-container').html(this.$el.html(this.template({books: this.collection.toJSON()})));
      return this;
    }
  });

  return BookListView;
  // What we return here will be used by other modules
});