const purgecss = require('@fullhuman/postcss-purgecss')({

  content: [
    './**/*.html',
    './**/*.pug',
    './**/*.php'
  ],

  defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []

})

module.exports = {
  plugins: [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested'),
    require('postcss-custom-properties'),
    require('autoprefixer'),
    ...process.env.NODE_ENV === 'production' ? [purgecss] : []
  ]
}