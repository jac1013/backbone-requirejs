define([
  // These are path alias that we configured in our bootstrap
  'jquery',     // lib/jquery/jquery
  'underscore', // lib/underscore/underscore
  'backbone',   // lib/backbone/backbone
  'handlebars'  // lib/handlebars/handlebars   
], function($, _, Backbone, Handlebars){
  // Above we have passed in jQuery, Underscore and Backbone
  // They will not be accessible in the global scope
    var Index = Backbone.View.extend({

      initialize: function(){
        this.template =  Handlebars.compile('<a href="#books">Books list</a>');
        this.render();
      },

      render: function(){
        $('.books-link-container').html(this.$el.html(this.template()));
      }
    })
  return Index;
  // What we return here will be used by other modules
});