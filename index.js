var sass = import("sass");
var Fiber = import("fibers");
var fa = import("fontawesome");

const sass = require('sass');

const result = sass.compile(scssFilename);

sass.render({
  file: "input.scss",
  importer: function(url, prev, done) {
    // ...
  },
  fiber: Fiber
}, function(err, result) {
  // ...
});

import * as csstree from 'css-tree';

// parse CSS to AST
const ast = csstree.parse('.example { world: "!" }');

// traverse AST and modify it
csstree.walk(ast, (node) => {
    if (node.type === 'ClassSelector' && node.name === 'example') {
        node.name = 'hello';
    }
});

// generate CSS from AST
console.log(csstree.generate(ast));
// .hello{world:"!"}
