'use strict';
import functions from 'postcss-functions';

const fs = require('fs');
var fs = require('fs');

const postcss = require('postcss');
const colorImage = require("postcss-color-image");
const postcssPresetEnv = require('postcss-preset-env');
const combineSelectors = require('postcss-combine-duplicated-selectors');

var postcss = require('postcss');
var styleguide = require('postcss-style-guide');

const css = fs.readFileSync('src/app.css');

const css = fs.readFileSync('input.css', 'utf8');
var input = fs.readFileSync('input.css', 'utf8');


var output = postcss([styleguide])
  .process(input)
  .then(function (result) {
    var output = fs.readFileSync('styleGuide/index.html', 'utf8');
    console.log('output:', output);
    }
  );

  var postcss = require('postcss');
  var mixins = require('postcss-sassy-mixins');

  var options = {
     // options here
  };

  var output = postcss()
    .use(mixins(options))
    .process(css)
    .css;


  const options = {
  	//options
  };

  postcss()
    .use(functions(options))
    .process(css)
    .then((result) => {
      const output = result.css;
    });

postcss([combineSelectors({removeDuplicatedProperties: true})]);
postcssPresetEnv.process(YOUR_CSS /*, processOptions, pluginOptions */);

module.exports = {
  plugins: [
    postcss( [
      require('postcss-conic-gradient' )(),
      require('postcss-brand-colors' ),
      require('postcss-theme-colors')({colors, groups}),
      require('postcss-custom-properties')({variables: colors}), // optional
      require('postcss-color-function'), // optional
      require('postcss-utilities')({/* options*/}),
      require('postcss-sort-style-rules')
    ]).process(css),
    postcss([
      require('postcss-combine-duplicated-selectors')
    ]).process(css, {from: 'src/app.css', to: 'app.css'})
      .then((result) => {
        fs.writeFileSync('app.css', result.css);
        if (result.map) fs.writeFileSync('app.css.map', result.map);
      }
    require('postcss-mixins'),
    require('postcss-mixins')({mixinsDir: path.join(__dirname, 'mixins')}),
    require('autoprefixer'),
    require('postcss-ui-theme'),
    require('postcss-nested'), // or postcss-nesting, postcss-preset-env
  ],
}
