# BackboneJS + RequireJS

 Repository to show with a simple ``BackboneJS`` project with ``facts`` [Why AMD](http://requirejs.org/docs/whyamd.html)

### How to Check it
 
 -------------------------------------------------------------------------------------

 1. ``Simple``, you have to clone/downdload this project:

 ``$ git clone https://github.com/jac1013/backbone-requirejs.git``

 2. Position yourself at the project root folder and in command line do:

 ```$ git checkout without-require```

 3. Then open the file ``index.html`` with your favorite browser (prefer ``chrome`` to follow this steps easily),
 with ``chrome``, open ``Developer Tools`` in the tab ``Timeline``.

 4. When you reload the page it will show some bars, those bars indicates many things but our interest is the scripts load time of the webpage (in case you have no idea of how to do this go [here](https://developer.chrome.com/devtools/docs/timeline)),
 reload it many times you like and remember the scripts load time that it says (an approximate of course).

 5. Repeat point #2 but this time use this command instead:

 ```$ git checkout with-require```

 6. Repeat point #4.

----------------------------------------------------------------------------------------

### TL;DR

Here are 2 ``screenshots`` and some ``samples`` from my own personal laboratory setup test:

10 samples: 89.881 - 92.916 - 83.000 - 77.036 - 89.490 - 98.496 - 77.076 - 83.589 - 94.870 - 86.746 (ms).

[without-require](https://db.tt/tUNExjg4): Approximate script LT: ``~87.310ms``

10 samples: 41.319 - 40.123 - 38.347 - 38.921 - 36.635 - 34.245 - 41.142 - 87.258 - 90.993 - 40.349 (ms).

[with-require](https://db.tt/AkUEKSEY): Approximate script LT: ``~48.933ms``

### Thank me later.

------------------------------------------------------------------------------------------

Thanks to this [tutorial](http://backbonetutorials.com/organizing-backbone-using-modules/) I made this simple project very fast.
 
 