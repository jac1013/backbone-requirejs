 ## BackboneJS + RequireJS

 Repository to show with a simple ``BackboneJS`` project with facts [Why AMD](http://requirejs.org/docs/whyamd.html)

 #### How to Check it
 
 -------------------------------------------------------------------------------------

 1. ``Simple``, you have to clone/downdload this project:

 ```$ git clone https://github.com/jac1013/backbone-requirejs.git``

 2. Position yourself at the project root folder and in command line do:

 ```$ git checkout without-require```

 3. Then open the file ``index.html`` with your favorite browser (prefer ``chrome`` to follow this steps easily),
 with ``chrome``, open ``Developer Tools`` in the tab ``Timeline``.

 4. When you reload the page it will show some bars, those bars indicates the script load time of the webpage (in case you have no idea of how to do this go [here](https://developer.chrome.com/devtools/docs/timeline)),
 reload it many times you like and remember the load time that it says (an approximate of course).

 5. Repeat point #2 but this time use this command instead:

 ```$ git checkout with-require```

 6. Repeat point #4.

----------------------------------------------------------------------------------------

### TL;DR

Here are 2 screenshots from my own personal laboratory setup test:

[without-require](https://db.tt/fJ99Sbtm): Approximate script LT: ~135ms

[with-require](https://db.tt/sR3XlzkF): Approximate script LT: ~55ms

### Thank me later.
 
 