const path = require('path');

const config = {
  entry: {
    juneteenth: './src/scripts/juneteenth.js',
  },

  output: {
    filename: 'js/[name]-public.js',
    path: path.resolve(__dirname, 'public')
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader'
      }
    ]
  }
}

module.exports = config;
