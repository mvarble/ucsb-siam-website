module.exports = {
  entry: './src.js',
  output: {
    path: __dirname,
    filename: 'index.js',
    library: {
      type: 'umd',
      export: 'default',
    },
  },
  target: 'node',
  mode: 'production',
}
